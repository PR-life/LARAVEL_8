<?php

namespace App\Http\Controllers\ADMIN\Product;

use App\Models\Product;
use App\Models\_child\Service;
use App\Models\{Group,Tag,Faq,Category,Lego,User};


class EditController extends BaseController
{
    public function __invoke($id){
		

		$product = Product::findOrFail($id);

        $categories = Category::orderBy('order')->get();
        $groups = Group::all();
		$tags = Tag::all();
		$faqs = Faq::all();
		$products = Product::all();
		$Lego = Lego::all();
		$services = Service::all();
		$roles = User::getRoles();


	    return view('zADMIN.PAGE.Product.edit', compact('product','groups','tags','faqs','categories','products','Lego','services','roles'));
    }
}
