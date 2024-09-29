<?php

namespace App\Services\ADMIN\Product;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Services\ADMIN\BaseService;
//
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Service extends BaseService {


	public function update($product,$param) {

		try {
			DB::beginTransaction();


			// Проверка, нужно ли удалить изображение
			if (isset($param['delete_image']) && $param['delete_image'] == '1') {
				// Удаляем текущее изображение, если оно существует
				if ($product->image) {
					// Удаляем основное изображение
					Storage::disk('public')->delete($product->image);

					// Удаляем файл иконки
					$iconFilename = 'ico_100x100_' . $product->id . '.png';
					Storage::disk('public')->delete('ico/product/' . $iconFilename);

					// Удаляем файл иконки
					$iconFilename = 'ico_200x200_' . $product->id . '.png';
					Storage::disk('public')->delete('ico/product/' . $iconFilename);

					// Удаляем файл в формате PNG (если используется)
					$pngFilename = 'product_images/' . $product->slug . '.png';
					Storage::disk('public')->delete($pngFilename);

					// Обнуляем поле image
					$param['image'] = null;
				}
			}
			unset($param['delete_image']);


            // Проверка и обработка изображения
            if (isset($param['image']) && $param['image'] instanceof \Illuminate\Http\UploadedFile) {


				// Удаляем старое изображение, если оно существует
				if ($product->image) {
					Storage::disk('public')->delete($product->image);
				}

				// Загружаем новое изображение
				$image = $param['image'];

				// Сохраняем исходник
				$originalFilename = $product->slug . '.' . $image->getClientOriginalExtension();
				$storagePath = public_path('storage/product_images/bd/');
				$param['image_original'] = $originalFilename;

				$image->move($storagePath, $originalFilename);

				// Путь к сохранённому исходному файлу
				$savedOriginalPath = $storagePath . $originalFilename;

				// Повторно загружаем изображение для дальнейшей обработки
				$imageResized = Image::make($savedOriginalPath)->encode('png'); // Преобразуем в PNG

				// Генерируем имя файла для сохранения в формате PNG
				$filename = time() . '_' . $product->id . '.png';
				$imageResized->save(public_path('storage/product_images/' . $filename));

				// Создание превью изображения (300x300) и его сохранение
				$previewImage = Image::make($savedOriginalPath)->resize(300, 300)->encode('png');
				$previewImage->save(public_path('storage/product_images/teaser/' . $filename));



				// Создание иконки (100x100) и её сохранение
				$iconFilename = 'ico_100x100_' . $product->id . '.png';
				$iconImage = Image::make($savedOriginalPath)->resize(100, 100)->encode('png');
				$iconImage->save(public_path('storage/ico/product/' . $iconFilename));

				// Создание иконки (200x200) и её сохранение
				$iconFilename = 'ico_200x200_' . $product->id . '.png';
				$iconImage = Image::make($savedOriginalPath)->resize(200, 200)->encode('png');
				$iconImage->save(public_path('storage/ico/product/' . $iconFilename));

				// Сохраняем путь к новому изображению в параметрах
				$param['image'] = $filename;
            }









			isset($param['category_ids']) ? $categoryIds = $param['category_ids'] : $categoryIds = [];
			unset($param['category_ids']);
			
			isset($param['tag_ids']) ? $tagIds = $param['tag_ids'] : $tagIds = [];
			unset($param['tag_ids']);

			isset($param['lego_ids']) ? $legoIds = $param['lego_ids'] : $legoIds = [];
			unset($param['lego_ids']);

			isset($param['faq_ids']) ? $faqIds = $param['faq_ids'] : $faqIds = [];
			unset($param['faq_ids']);

			isset($param['product_ids']) ? $productIds = $param['product_ids'] : $productIds = [];
			unset($param['product_ids']);

			// dd($faqIds);
			
			//

			if($param['canonical'] == "/") unset($param['canonical']);
			
			isset($param['category_id']) ? '' : $param['category_id'] = null;
			isset($param['tag_id']) ? '' : $param['tag_id'] = null;

			isset($param['featured']) ? '' : $param['featured'] = '0';
			isset($param['published']) ? '' : $param['published'] = '0';
			isset($param['mafia']) ? '' : $param['mafia'] = '0';
				// isset($param['css_type']) ? $param['css_type'] = implode(" ", $param['css_type']) : $param['css_type'] = null;
			

			//
			if(isset($param['prev_image']) && !is_string($param['prev_image'])) {
				$param['prev_image'] = Storage::disk('public')->put('/images', $param['prev_image']);
				// $data['prev_image'] = str_replace('public','',Storage::put('/public/images', $data['prev_image']));
			}


			//
			$product->update($param);

			$product->categories()->sync($categoryIds);
			$categoryIds = [];

			$product->tags()->sync($tagIds);
			$tagIds = [];

			$product->lego()->sync($legoIds);
			$legoIds = [];

			$product->faqs()->sync($faqIds);
			$faqIds = [];

			$product->products()->sync($productIds); 
			$productIds = [];

			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $product;
	}



    public function store($param) {
		try {
			DB::beginTransaction();

			// isset($param['tag_ids']) ? $tagIds=$param['tag_ids'] : $tagIds=[];
			// unset($param['tag_ids']);

        	$product = Product::firstOrCreate($param);
			
			// $paper->tags()->attach($tagIds);
				// attach: Присоединение / Отсоединение отношений Многие ко многим
			// $tagIds = [];
			
			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $product;

    }
}