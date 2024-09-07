<?php

namespace App\Http\Controllers\ADMIN\Product;

use App\Models\Product;
use App\Models\{Group,Tag,Category,Faq,Lego,Paper,User};
use App\Models\_child\Service;


class EditController extends BaseController
{
    public function __invoke($id){
		

		$product = Product::findOrFail($id);
		$products = Product::all();

		//
        $groups = Group::all();
		$tags = Tag::all();
        $categories = Category::orderBy('order')->get();
		$faqs = Faq::all();
		$Lego = Lego::all();
		$papers = Paper::all();
		$roles = User::getRoles();
		//
		$services = Service::all();


	    return view('zADMIN.PAGE.Product.edit', compact('product','products','groups','tags','categories','faqs','Lego','papers','roles','services'));
    }
}
