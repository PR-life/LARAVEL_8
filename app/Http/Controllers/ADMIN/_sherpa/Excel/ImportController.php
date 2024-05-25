<?php

namespace App\Http\Controllers\ADMIN\_sherpa\Excel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//
use Maatwebsite\Excel\Facades\Excel;
//
use App\Imports\PostImport;
use App\Imports\PaperImport;


class ImportController extends Controller
{

	public function import(Request $request)
	{
		$file = $request->file('import_file');



		switch ($file->getClientOriginalName()) {
			case 'Papers.xlsx':
				// dd($file);
				Excel::import( new PaperImport(), $file);
				break;
			case 'Post':
				return 2222;
				break;
			};



		// dd($file->getClientOriginalName());
		// dd($request->file('import_file'));
		// Excel::import( new PostImport(), $request->file('import_file'));
	}




	public function index()
	{


		$arrModel = [
			// 'User',
			'Landing',
			'Category',
			'Tag',
			'Post',
			'Paper',
			'Faq',
			'Item',
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



		return view('zADMIN.PAGE.SHERPA.Excel.Morda', compact('arrModel','arrComment','arrPivot'));
	}
};