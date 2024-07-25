<?php
namespace App\Http\Controllers\ADMIN\Lego;
use Illuminate\Http\Request;
//
use App\Models\Lego;
use App\Models\{Category,Tag,Group};

class IndexTrashedController extends BaseController
{

    public function __invoke(Request $request){

        $faqs = Faq::onlyTrashed()->orderBy('created_at', 'DESC')->paginate(40);


        $groups = Group::all();
        $tags = Tag::all();
        $categories = Category::all();

        $_request = $this->service->_request($request);

         return view('zADMIN.PAGE.Lego.index', compact('faqs','categories','tags','groups','_request'));
    }
}