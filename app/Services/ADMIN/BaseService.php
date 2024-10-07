<?php
namespace App\Services\ADMIN;
//
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BaseService {
	public function _request($_request) {
		return 	$_request = [
					'page' => request()->get('page'),
					'tag_id' => request()->get('tag_id'),
					'category_id' => request()->get('category_id'),
					'group_id' => request()->get('group_id'),
					'textsms' => request()->get('textsms'),
					'name' => request()->get('name'),
					'schema' => request()->get('schema'),
				];
	}


	//
    public function deleteImages($imagePath, $imagePrefix, $id)
    {
        if ($imagePath) {
            // Удаляем основное изображение
            Storage::disk('public')->delete($imagePath);
    
            // Удаляем файлы иконок
            $iconSizes = [100, 200];
            foreach ($iconSizes as $size) {
                $iconFilename = 'ico_' . $size . 'x' . $size . '_' . $id . '.png';
                Storage::disk('public')->delete('ico/' . $imagePrefix . '/' . $iconFilename);
            }
    
            // Удаляем основной PNG файл
            $pngFilename = $imagePrefix . '_images/' . $id . '.png';
            Storage::disk('public')->delete($pngFilename);
        }
    }

    public function processImages($image, $id, $imagePrefix)
    {
        // Преобразуем изображение в PNG и сохраняем
        $filename = $this->saveImage($image, $id, $imagePrefix);
    
        // Создаем иконки
        $this->createIcons($image, $id, $imagePrefix);
    

        // Создаем превью изображения
        $this->createPreviewImage($image, $id, $imagePrefix);


        return $filename;
    }






    
    protected function saveImage($image, $id, $imagePrefix)
    {
        // Генерация имени файла и сохранение изображения в формате PNG
        $filename = time() . '_' . $id . '.png';
        $imageResized = Image::make($image)->encode('png');
        $imageResized->save(public_path('storage/' . $imagePrefix . '_images/' . $filename));
    
        return $filename;
    }

    protected function createIcons($image, $id, $imagePrefix)
    {
        $sizes = [100, 200];
        foreach ($sizes as $size) {
            $this->createIcon($image, $id, $size, $imagePrefix);
        }
    }

    // protected function createIcon($image, $id, $size, $imagePrefix)
    // {
    //     // Генерация имени файла для иконки
    //     $iconFilename = 'ico_' . $size . 'x' . $size . '_' . $id . '.png';
        
    //     // Изменение размера изображения и его сохранение
    //     $iconImage = Image::make($image)->resize($size, $size)->encode('png');
    //     $iconImage->save(public_path('storage/ico/' . $imagePrefix . '/' . $iconFilename));
    // }
    protected function createIcon($image, $id, $size, $imagePrefix)
    {
        // Генерация имени файла для иконки
        $iconFilename = 'ico_' . $size . 'x' . $size . '_' . $id . '.png';
        
        // Изменение размера изображения до указанного размера без искажения (с обрезкой лишнего)
        $iconImage = Image::make($image)->fit($size, $size)->encode('png');
        $iconImage->save(public_path('storage/ico/' . $imagePrefix . '/' . $iconFilename));
    }


    protected function createPreviewImage($image, $id, $imagePrefix)
    {
        // Генерация имени файла для превью
        $filename = time() . '_' . $id . '.png';
        
        // Создание превью изображения (300x300) с сохранением пропорций
        $previewImage = Image::make($image)->fit(300, 300)->encode('png');
        $previewImage->save(public_path('storage/' . $imagePrefix . '_images/teaser/' . $filename));
    }
    
}

