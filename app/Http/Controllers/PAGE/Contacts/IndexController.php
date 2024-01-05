<?php

namespace App\Http\Controllers\PAGE\Contacts;
//
use App\Http\Controllers\Controller;
//
use App\Http\Requests\PAGE\Contacts\ConsultantRequest;
use App\Http\Filters\ConsultantFilter;
//
use App\Models\Post;
use App\Models\Distributor;
use App\Models\Consultant;

class IndexController extends Controller
{

    public function index()
    {
        $item = Post::whereSlug('contacts')->firstOrFail();
        // $faq = Faq::get();

        return view('zImago.PAGE.Contacts.index',compact('item'));
    }


    public function consultants(ConsultantRequest $request)
    {
        $item = Post::whereSlug('consultants')->firstOrFail();


		$x = $request->validated();
		$filter = app()->make(ConsultantFilter::class, ['queryParams' => array_filter($x)]);

        // dd($filter);


        $consultants = Consultant::filter($filter)->where('published', 1)->orderBy('name', 'ASC')->get();



        // $data = $request->validated();
        // $consultants = $this->filter($data);



        // $consultants = Consultant::orderBy('name', 'asc')->get();
        // $faq = Faq::get();
  
        return view('zImago.PAGE.Contacts.consultants',compact('item','consultants'));
    }


    public function distributors()
    {
        $item = Post::whereSlug('distributors')->firstOrFail();
        $distributors = Distributor::all();
        // $faq = Faq::get();

        return view('zImago.PAGE.Contacts.distributors',compact('item','distributors'));
    }




    public function test()
    {
        $item = Post::whereSlug('test-the-device')->firstOrFail();

        return view('zImago.PAGE.Contacts.test',compact('item'));
    }





    //////
    // private  function filter($data) {

    //     dd($data);


    //     if(isset($data['tag'])) {
    //         return $papers = $this->tags($data['tag']);

    //     } elseif(isset($data['comments'])) {
    //         isset($data['category_id']) ? '' : $data['category_id'] = null;
    //         return $papers = $this->comments($data['category_id']);

    //     } else {
    //         $filter = app()->make(PaperFilter::class, ['queryParams' => array_filter($data)]);
    //         return $papers = Paper::filter($filter)->orderBy('created_at', 'DESC')->get();
    //     }


    // }
}



 