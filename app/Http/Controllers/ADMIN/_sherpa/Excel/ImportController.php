<?php

namespace App\Http\Controllers\ADMIN\_sherpa\Excel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//
use Maatwebsite\Excel\Facades\Excel;
//
use App\Imports\TagImport;
use App\Imports\PaperImport;
use App\Imports\child\ServiceImport;


class ImportController extends Controller
{

	public function import(Request $request)
	{
		$file = $request->file('import_file');



		switch ($file->getClientOriginalName()) {
			case 'Papers.xlsx':
				Excel::import( new PaperImport(), $file);
				break;
			case 'Services.xlsx':
				Excel::import( new ServiceImport(), $file);
				break;
			case 'Tags.xlsx':
				Excel::import( new TagImport(), $file);
				break;
			};



		// dd($file->getClientOriginalName());
		// dd($request->file('import_file'));
		// Excel::import( new PostImport(), $request->file('import_file'));
	}




	// public function index()
	// {
	// 	return view('zADMIN.PAGE.SHERPA.Excel.Morda', compact('arrModel','arrComment','arrPivot'));
	// }
};