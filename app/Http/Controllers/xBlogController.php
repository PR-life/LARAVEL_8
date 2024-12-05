<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use App\Models\{Post,Item,Paper,Sms};
use App\Models\_child\{Telegram,Service};
use App\Models\{Category};

class xBlogController extends Controller
{
 
    public function index()
    {
        $item = Category::whereSlug('blog')->firstOrFail();

        $papers = $item->paper->sortByDesc('created_at');

        // dd($papers);

        return view(config('AS.Var').'.PAGE.Blog.index', compact('item','papers'));
        // return view('xSi.PAGE.Blog.index', compact('item','papers'));
    }



    // TODO ищи в GPT запись 03121601 
    // тема "2. Объединение коллекций (простой подход без полиморфизма)"
    public function show($slug)
    {
        // Последовательно ищем в каждой таблице
        $item = Paper::where('slug', $slug)->first() 
           ?? Telegram::where('slug', $slug)->first() 
           ?? Service::where('slug', $slug)->first();

        // Получаем только опубликованные и отмеченные сообщения
        // $sms = Sms::where([
        //     ['published', '1'],
        //     ['featured', '1']
        // ])->get();

        // $responses = collect();
        
 
        return view(config('AS.Var').'.PAGE.showPaper', compact('item'));
        // return view('xSi.PAGE.showPaper', compact('item','sms','responses'));
    }

}

