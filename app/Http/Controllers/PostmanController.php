<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Mail;

//
use Illuminate\Http\Request;
use App\Http\Requests\Postman\StoreRequest;
// use App\Http\Requests\Sms\zSi\StoreRequestSi;
// use App\Http\Requests\Sms\PostmanRequest;
// use App\Http\Requests\Sms\NotiRequest;
// use App\Http\Requests\Sms\LeadRequest;
// use App\Models\Sms;
// use App\Models\Noti;
// use App\Models\Lead;
use App\Models\CommentPaper;
use App\Models\CommentPost;
// use App\Models\CommentCourse;
//
//
// use Mail;
// use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;



class PostmanController extends Controller
{
    public function store(StoreRequest $request) {

        $validator = Validator::make($request->all(), [
            'text' =>  'required|max:255',
        ]);


        if ($validator->fails()) {
			$request->session()->flash('formPostmanError', 'Task was successful!');
            Session::flash('error', $validator->messages()->first());
            return redirect()->back()->withInput();
        }
		// dd($request);
		// $errors = $validator->errors();
		// echo $errors->first('email');

		$newItem;
		$param = $request->validated();

		// dd($param);

		if($param['title'] != '.') {
			return view('_.lol');
		}
		unset($param['title']);


		$x = CommentPaper::create($param);
		$newItem = 'CommentPaper_' . $x->id;


		// dd($param);

		// 
		// $param['text'] = $param['sms'];
		// unset($param['sms']);
		// $switchModel = $param['model'];
		// unset($param['model']);

		// // dd($param);
		// // isset($param['featured']) ? '' : $param['featured'] = '0';

 
		// switch ($switchModel) {
		// 	case 'Paper':
		// 		$param['paper_id'] = $param['model_id'];
		// 		unset($param['model_id']);
		// 		$x = CommentPaper::create($param);
		// 		$newItem = 'CommentPaper_' . $x->id;
		// 		break;
		// 	case 'Post':
		// 		$param['post_id'] = $param['model_id'];
		// 		unset($param['model_id']);
		// 		$x = CommentPost::create($param);
		// 		$newItem = 'CommentPost_' . $x->id;
		// 		break;
		// 	case 'Course':
		// 		$param['course_id'] = $param['model_id'];
		// 		unset($param['model_id']);
		// 		$x = CommentCourse::create($param);
		// 		$newItem = 'CommentCourse_' . $x->id;
		// 		break;
		// }


		return back()->with('UpdateController', $newItem);
		// return back()->with('UpdateController', true);
        // return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}

