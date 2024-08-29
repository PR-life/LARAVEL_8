<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use App\Models\{Post,Item,Product};
 

class xAsgruppController extends Controller
{


    public function showProduct(Product $item){
	
        // dd($item);
        

        return view('xAsgrupp.PAGE.ShowProduct', compact('item'));
    }


    
    public function showItem(Item $item){
	

        $SKU = $item->sku ?? $item->parentItem->sku ?? 'not';

        if($item->style) {
            $IMG = '/images/kovka/'.$item->category->slug.'/'.$item->style->slug.'/'.$SKU.'/1.webp';
        } else {
            $IMG = '/images/kovka/blank.webp';
        }

        $items_1 = Item::whereSku($SKU)->first();
        if ($items_1) {
            // Если запись найдена, получаем связанные элементы
            $items_2 = $items_1->childrenItems; // Предположим, что это отношение возвращает коллекцию
        
            // Преобразуем $items_1 в коллекцию
            $items_1_collection = collect([$items_1]);
        
            // Объединяем коллекции
            $ITEMS = $items_1_collection->merge($items_2);
        } else {
            // Если $items_1 равно null, задаем $ITEMS как пустую коллекцию
            $ITEMS = collect();
        }
 
        // dd($ITEMS);

        return view('xAsgrupp.PAGE.ShowItem', compact('item','SKU','IMG','ITEMS'));
    }

	
    public function morda(Request $request){
		
		$item = Post::whereSlug('morda')->firstOrFail();
	
        return view('xAsgrupp.Morda', compact('item'));
    }
}

