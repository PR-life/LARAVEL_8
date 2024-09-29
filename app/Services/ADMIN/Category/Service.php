<?php

namespace App\Services\ADMIN\Category;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Services\ADMIN\BaseService;
//
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class Service extends BaseService{

	public function update($category,$param) {

		try {
			DB::beginTransaction();



			// Проверка, нужно ли удалить изображение
			if (isset($param['delete_image']) && $param['delete_image'] == '1') {
				// Удаляем текущее изображение, если оно существует
				if ($category->image) {
					// Удаляем основное изображение
					Storage::disk('public')->delete($category->image);

					// Удаляем файл иконки
					$iconFilename = 'ico_100x100_' . $category->id . '.png';
					Storage::disk('public')->delete('ico/category/' . $iconFilename);

					// Удаляем файл иконки
					$iconFilename = 'ico_200x200_' . $category->id . '.png';
					Storage::disk('public')->delete('ico/category/' . $iconFilename);

					// Удаляем файл в формате PNG (если используется)
					$pngFilename = 'category_images/' . $category->slug . '.png';
					Storage::disk('public')->delete($pngFilename);

					// Обнуляем поле image
					$param['image'] = null;
				}
			}
			unset($param['delete_image']);


            // Проверка и обработка изображения
            if (isset($param['image']) && $param['image'] instanceof \Illuminate\Http\UploadedFile) {


				// Удаляем старое изображение, если оно существует
				if ($category->image) {
					Storage::disk('public')->delete($category->image);
				}

				// Загружаем новое изображение
				$image = $param['image'];

				// Сохраняем исходник
				$originalFilename = $category->slug . '.' . $image->getClientOriginalExtension();
				$storagePath = public_path('storage/category_images/bd/');
				$param['image_original'] = $originalFilename;
				// $param['image_original'] = '/storage/category_images/bd/svarochnye-apparaty.webp';

				$image->move($storagePath, $originalFilename);

				// Путь к сохранённому исходному файлу
				$savedOriginalPath = $storagePath . $originalFilename;

				// Повторно загружаем изображение для дальнейшей обработки
				$imageResized = Image::make($savedOriginalPath)->encode('png'); // Преобразуем в PNG

				// Генерируем имя файла для сохранения в формате PNG
				$filename = time() . '_' . $category->id . '.png';
				$imageResized->save(public_path('storage/category_images/' . $filename));

				// Создание иконки (100x100) и её сохранение
				$iconFilename = 'ico_100x100_' . $category->id . '.png';
				$iconImage = Image::make($savedOriginalPath)->resize(100, 100)->encode('png');
				$iconImage->save(public_path('storage/ico/category/' . $iconFilename));

				// Создание иконки (200x200) и её сохранение
				$iconFilename = 'ico_200x200_' . $category->id . '.png';
				$iconImage = Image::make($savedOriginalPath)->resize(200, 200)->encode('png');
				$iconImage->save(public_path('storage/ico/category/' . $iconFilename));

				// Сохраняем путь к новому изображению в параметрах
				$param['image'] = $filename;
            }




			if($param['canonical'] == "/") unset($param['canonical']);
			// dd($param);


			isset($param['category_ids']) ? $categoryIds = $param['category_ids'] : $categoryIds = [];
			unset($param['category_ids']);

			isset($param['lego_ids']) ? $legoIds = $param['lego_ids'] : $legoIds = [];
			unset($param['lego_ids']);

			isset($param['tag_ids']) ? $tagIds = $param['tag_ids'] : $tagIds = [];
			unset($param['tag_ids']);

			isset($param['faq_ids']) ? $faqIds = $param['faq_ids'] : $faqIds = [];
			unset($param['faq_ids']);

			isset($param['item_ids']) ? $itemIds = $param['item_ids'] : $itemIds = [];
			unset($param['item_ids']);

			isset($param['service_ids']) ? $serviceIds = $param['service_ids'] : $serviceIds = [];
			unset($param['service_ids']);
			
			//
			isset($param['published']) ? '' : $param['published'] = '0';

			// dd($itemIds);


			//
			$category->update($param);
			$category->categories()->sync($categoryIds);
			$category->tags()->sync($tagIds);
			$category->lego()->sync($legoIds);
			$category->thisItemsPivot()->sync($itemIds);
			$category->thisServicesPivot()->sync($serviceIds);
			// $tagIds = [];


			$category->faqs()->sync($faqIds);
			// $faqIds = [];


			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $category;
	}



    public function store($param) {
		try {
			DB::beginTransaction();

			// isset($param['tag_ids']) ? $tagIds=$param['tag_ids'] : $tagIds=[];
			// unset($param['tag_ids']);

        	// $post = Post::firstOrCreate($param);
			// $post->tags()->attach($tagIds);
			// 	// attach: Присоединение / Отсоединение отношений Многие ко многим
			// $tagIds = [];
			
			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		// return $post;

    }
}