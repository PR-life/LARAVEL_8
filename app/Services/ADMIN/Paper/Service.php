<?php

namespace App\Services\ADMIN\Paper;

use Exception;
use Illuminate\Support\Facades\DB;
use App\Services\ADMIN\BaseService;
//
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
//
use App\Models\Paper;


class Service extends BaseService {


	public function update($paper,$param) {

		try {
			DB::beginTransaction();


            // Проверка, нужно ли удалить изображение
            if (isset($param['delete_image']) && $param['delete_image'] == '1') {
                // Удаляем старое изображение
                $this->deleteImages($paper->image, 'paper', $paper->id);
                $param['image'] = null;
            }
            unset($param['delete_image']);

            // Проверка и обработка нового изображения
            if (isset($param['image']) && $param['image'] instanceof \Illuminate\Http\UploadedFile) {


				// Сохраняем исходник
				$image = $param['image'];
				$originalFilename = $paper->slug . '.' . $image->getClientOriginalExtension();

				// dd($originalFilename);
				$storagePath = public_path('storage/paper_images/bd/');
				$param['image_original'] = $originalFilename;
				$image->move($storagePath, $originalFilename);
				// Путь к сохранённому исходному файлу
				$savedOriginalPath = $storagePath . $originalFilename;

				
                // Удаляем старое изображение
                $this->deleteImages($paper->image, 'paper', $paper->id);
                // Обрабатываем и сохраняем новое изображение
                $param['image'] = $this->processImages($savedOriginalPath, $paper->id, 'paper');

            }





			isset($param['category_ids']) ? $categoryIds = $param['category_ids'] : $categoryIds = [];
			unset($param['category_ids']);
			
			isset($param['tag_ids']) ? $tagIds = $param['tag_ids'] : $tagIds = [];
			unset($param['tag_ids']);

			isset($param['faq_ids']) ? $faqIds = $param['faq_ids'] : $faqIds = [];
			unset($param['faq_ids']);

			isset($param['item_ids']) ? $itemIds = $param['item_ids'] : $itemIds = [];
			unset($param['item_ids']);

			// dd($faqIds);
			
			//

			if($param['canonical'] == "/") unset($param['canonical']);
			
			isset($param['category_id']) ? '' : $param['category_id'] = null;
			isset($param['tag_id']) ? '' : $param['tag_id'] = null;

			isset($param['pin']) ? '' : $param['pin'] = '0';
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
			$paper->update($param);

			$paper->categories()->sync($categoryIds);
			$categoryIds = [];

			$paper->tags()->sync($tagIds);
			$tagIds = [];

			$paper->faqs()->sync($faqIds);
			$faqIds = [];

			$paper->items()->sync($itemIds); 
			$itemIds = [];

			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $paper;
	}



    public function store($param) {
		try {
			DB::beginTransaction();

        	$paper = Paper::firstOrCreate($param);
						
			DB::commit();
		} catch (Exception $exception) {
			DB::rollBack();
			dd($exception);
            abort(500);
		}

		return $paper;

    }
}