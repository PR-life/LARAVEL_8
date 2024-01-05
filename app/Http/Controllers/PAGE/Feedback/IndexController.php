<?php

namespace App\Http\Controllers\PAGE\Feedback;
//
// use App\Http\Controllers\Controller;
use App\Http\Requests\PAGE\Feedback\FilterRequest;
use App\Http\Filters\PaperFilter;
//
use App\Models\Post;
use App\Models\Paper;
use App\Models\Sms;
use App\Models\Category;

class IndexController extends BaseController
{


    public function index(FilterRequest $request)
    {

        $item = Category::find(3);

        $data = $request->validated();
 
        $papers = $this->service->filter($data);

        
        return view('zImago.PAGE.Feedback.index',compact('item','papers'));
    }



    public function news(FilterRequest $request)
    {
        
		$item = Category::find(5);

        $data = $request->validated();
        $data['category_id'] = $item->id;

        $papers = $this->service->filter($data);

        return view('zImago.PAGE.Feedback.index',compact('item','papers'));
    }


    public function reviews(FilterRequest $request)
    {
        
		$item = Category::find(4);

        $data = $request->validated();
        $data['category_id'] = $item->id;

        $papers = $this->service->filter($data);

        return view('zImago.PAGE.Feedback.index',compact('item','papers'));
    }



    public function imago(FilterRequest $request)
    {

        $item = Category::find(7);


        $data = $request->validated();
        $data['category_id'] = $item->id;


        $papers = $this->service->filter($data);
        // $papers = $item->papers;

        return view('zImago.PAGE.Feedback.index',compact('item','papers'));
    }


    public function courses(FilterRequest $request)
    {
        // dd(111);
		$item = Category::find(8);


        $data = $request->validated();
        $data['category_id'] = $item->id;


        $papers = $this->service->filter($data);



        return view('zImago.PAGE.Feedback.index',compact('item','papers'));
    }





    public function sms()
    {
        
		$item = Category::find(13);
		$sms = Sms::where('published', 1)->orderBy('created_at', 'desc')->paginate(25);


        return view('zImago.PAGE.Feedback.indexSms',compact('item','sms'));
    }



}
