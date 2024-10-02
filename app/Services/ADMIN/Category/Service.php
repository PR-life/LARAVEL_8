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
			// dd($param);

			// Проверка, нужно ли удалить изображение
			if (isset($param['delete_image']) && $param['delete_image'] == '1') {
				// Удаляем все связанные изображения
				$this->deleteCategoryImages($category);
	
				// Обнуляем поле image
				$param['image'] = null;
			}
			unset($param['delete_image']);


			// Проверка и обработка нового изображения
			if (isset($param['image']) && $param['image'] instanceof \Illuminate\Http\UploadedFile) {
				$this->deleteCategoryImages($category);  // Удаляем старое изображение
				$param['image'] = $this->processCategoryImages($category, $param['image']);  // Обрабатываем новое изображение
			}


			if($param['canonical'] == "/") unset($param['canonical']);
			isset($param['published']) ? '' : $param['published'] = '0';


			//
			// if (isset($param['category_ids'])) {
				$category->categories()->sync($param['category_ids'] ?? []);
				unset($param['category_ids']);
			// }
			// if (isset($param['faq_ids'])) {
				$category->faqs()->sync($param['faq_ids'] ?? []);
				unset($param['faq_ids']);
			// }
			// if (isset($param['item_ids'])) {
				$category->items()->sync($param['item_ids'] ?? []);
				unset($param['item_ids']);
			// }
			// if (isset($param['lego_ids'])) {
				$category->lego()->sync($param['lego_ids'] ?? []);
				unset($param['lego_ids']);
			// }
			// if (isset($param['service_ids'])) {
				$category->services()->sync($param['service_ids'] ?? []);
				unset($param['service_ids']);
			// }
			// if (isset($param['tag_ids'])) {
				$category->tags()->sync($param['tag_ids'] ?? []);
				unset($param['tag_ids']);
			// }
 
 
 
 
 



			$category->update($param);


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
			
			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

    }

	//
	//
	private function deleteCategoryImages($category) {
		if ($category->image) {
			// Удаляем основное изображение
			Storage::disk('public')->delete($category->image);
	
			// Удаляем файл иконки (100x100)
			$icon100Filename = 'ico_100x100_' . $category->id . '.png';
			Storage::disk('public')->delete('ico/category/' . $icon100Filename);
	
			// Удаляем файл иконки (200x200)
			$icon200Filename = 'ico_200x200_' . $category->id . '.png';
			Storage::disk('public')->delete('ico/category/' . $icon200Filename);
	
			// Удаляем файл в формате PNG
			$pngFilename = 'category_images/' . $category->slug . '.png';
			Storage::disk('public')->delete($pngFilename);
		}
	}
	private function processCategoryImages($category, $image) {
		// Преобразуем изображение в PNG и сохраняем
		$filename = $this->saveImage($image, $category);
	
		// Создание иконок
		$this->createCategoryIcons($image, $category->id);
	
		return $filename;
	}
	
	private function saveImage($image, $category) {
		// Генерация имени файла и сохранение изображения в формате PNG
		$filename = time() . '_' . $category->id . '.png';
		$imageResized = Image::make($image)->encode('png');
		$imageResized->save(public_path('storage/category_images/' . $filename));
	
		return $filename;
	}
	private function createCategoryIcons($image, $categoryId) {
		$sizes = [100, 200];
		foreach ($sizes as $size) {
			$this->createCategoryIcon($image, $categoryId, $size);
		}
	}
	private function createCategoryIcon($image, $categoryId, $size) {
		// Генерация имени файла для иконки
		$iconFilename = 'ico_' . $size . 'x' . $size . '_' . $categoryId . '.png';
		
		// Изменение размера изображения и его сохранение
		$iconImage = Image::make($image)->resize($size, $size)->encode('png');
		$iconImage->save(public_path('storage/ico/category/' . $iconFilename));
	}

}