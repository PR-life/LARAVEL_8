<?php

namespace App\Http\Controllers\PAGE\Feedback;
//
// use App\Http\Controllers\Controller;
// use App\Http\Requests\PAGE\Feedback\FilterRequest;
// use App\Http\Filters\PaperFilter;
//
use App\Models\Post;
use App\Models\Paper;
use App\Models\Sms;
use App\Models\Category;

class ShowController extends BaseController
{
 
 
    public function show($paper)
    // public function show($locale,$paper)
    {
        // dd($paper);


        $item = Paper::whereSlug($paper)->firstOrFail();
        // $papers = Paper::get();
        // return $item;


		if (!Sms::get()->isEmpty()) {
			$min = collect([['foo' => 7], ['foo' => Sms::where('mafia', 1)->count()]])->min('foo');
			$sms = Sms::where('published', 1)->get()->random($min);
			// $sms = Sms::where('published', 1)->inRandomOrder()->take($min)->get();
		} else {
			$sms = [];
		}

        return view('zImago.PAGE.Feedback.show',compact('item','sms'));
    }



    public function showsms(Sms $item)
    // public function showsms($locale,Sms $item)
    {
        // dd($paper);

        // $papers = Paper::get();
        // return $item;



		if (!Sms::get()->isEmpty()) {
			$min = collect([['foo' => 7], ['foo' => Sms::where('mafia', 1)->count()]])->min('foo');
			$sms = Sms::where('published', 1)->get()->random($min);
			// $sms = Sms::where('published', 1)->inRandomOrder()->take($min)->get();
		} else {
			$sms = [];
		}

        return view('zImago.PAGE.Feedback.showSms',compact('item'));
    }


}
