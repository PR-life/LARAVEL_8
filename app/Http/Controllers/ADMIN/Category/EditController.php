<?php

namespace App\Http\Controllers\ADMIN\Category;

use App\Http\Controllers\Controller;
//
use App\Models\Category;
use App\Models\{Tag,Group,Faq,Item,Lego};
use App\Models\_child\Service;
use App\Http\Controllers\ADMIN\xTraits\CommonDataTrait;

class EditController extends BaseController
{

    use CommonDataTrait;


    public function __invoke($id){

        $category = Category::findOrFail($id);

        $categories = $this->getCategories();

        // Получаем общие данные из трейта
        $commonData = $this->getCommonData();


        return view('zADMIN.PAGE.Category.edit', array_merge(
            compact('category', 'categories'),
            $commonData
        ));
    }
}
