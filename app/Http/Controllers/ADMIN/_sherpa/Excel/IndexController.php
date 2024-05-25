<?php

namespace App\Http\Controllers\ADMIN\_sherpa\Excel;

use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function __invoke(){

		$arrModel = [
			// 'User',
			// 'Landing',
			'Category',
			'Tag',
			// 'Post',
			'Paper',
			// 'Faq',
			// 'Item',
			// 'Module',
			// 'Course',
			// 'Distributor',
			// 'Sms',
			// 'SmsCourse',
		];
		$arrComment = [
			// 'CommentPost',
			// 'CommentPaper',
			// 'CommentCourse',
		];
		$arrPivot = [
			// 'FaqTag',
			// 'ItemTag',
			// 'CourseTag',
		];


        return view('zADMIN.PAGE.SHERPA.Excel.Morda',compact('arrModel','arrComment','arrPivot'));
    }
}