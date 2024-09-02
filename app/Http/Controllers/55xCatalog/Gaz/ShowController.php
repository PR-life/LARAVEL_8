<?php

namespace App\Http\Controllers\xCatalog\Gaz;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//
use App\Models\{Product,Category,Landing};
 

class ShowController extends Controller
{
    public function __invoke(Product $item){


		// $item = Product::
		// // Получаем количество сегментов
		// $totalSegments = $request->segments();
    
		// // Получаем последний сегмент
		// $lastSegment = $request->segment(count($totalSegments));

 
		// $item = Item::where('slug',$lastSegment)->firstOrFail();

		// $items = $item->category->items->where('tag_id',$item->tag_id)->where('published','1');

		// //
		// $x = $item->category_id;
		// $uniqueCategoryIds = $item->tag->itemsMain
		// 	->pluck('category_id')   // Извлекаем значения category_id
		// 	->unique()               // Оставляем только уникальные значения
		// 	->reject(function ($value) use ($x) { // Передаем $x в функцию
		// 		return $value == $x;  // Исключаем значение $x
		// 	})
		// 	->values()               // Сбрасываем ключи коллекции
		// 	->toArray();             // Преобразуем коллекцию в массив
		// $pivotItems = Item::whereIn('category_id', $uniqueCategoryIds)->where('tag_id', $item->tag_id)->where('published', '1')->get();
		

		// if(isset($item->tag->serviceCategory)) {
		// 	$service_1 = $item->tag->serviceCategory->services()->get();
		// 	$service_2 = $item->tag->serviceCategory->servicesPivot()->get();
	
		// 	$services = collect($service_1)->merge($service_2)->sortBy('order');
		// } else {
		// 	$services = [];
		// }

		// // dd($item->tag);

		// // return view('zAsgrupp.PAGE.catalog.Gaz.main_item', compact('item','items','pivotItems','services'));


        return view('xAsgrupp.PAGE.ShowProduct', compact('item'));

    }
}

 