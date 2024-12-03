<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//
use App\Models\{Post,Category,Item,Product,Paper,Sms};
 

class xBlogController extends Controller
{
 
    public function index()
    {
        $item = Category::whereSlug('blog')->firstOrFail();

        $papers = $item->paper;

        // dd($papers);

        return view(config('AS.Var').'.PAGE.Blog.index', compact('item','papers'));
        // return view('xSi.PAGE.Blog.index', compact('item','papers'));
    }



    public function showPaper($paper)
    {
        // Ищем статью по slug (можно использовать базу данных или массив)
        $item = Paper::where('slug', $paper)->firstOrFail();

        // Получаем только опубликованные и отмеченные сообщения
        $sms = Sms::where([
            ['published', '1'],
            ['featured', '1']
        ])->get();
        
        $responses = collect();
        
        // Возвращаем представление для статьи
        return view(config('AS.Var').'.PAGE.showPaper', compact('item'));
        // return view('xSi.PAGE.showPaper', compact('item','sms','responses'));
    }

}

