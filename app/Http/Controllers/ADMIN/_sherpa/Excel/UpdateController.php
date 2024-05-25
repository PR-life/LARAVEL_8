<?php

namespace App\Http\Controllers\ADMIN\_sherpa\Excel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//
use Maatwebsite\Excel\Facades\Excel;
//
// use App\Imports\PostUpdate;
use App\Updates\PaperUpdate;
// use App\Imports\TagUpdate;


class UpdateController extends Controller
{

	public function __invoke(Request $request)
	{
		$file = $request->file('update_file');


        // dd($file);

		switch ($file->getClientOriginalName()) {
			case 'Papers.xlsx':
				Excel::import( new PaperUpdate(), $file);
				break;
			case 'Tags.xlsx':
				// Excel::import( new TagUpdate(), $file);
				break;
			};



		// dd($file->getClientOriginalName());
		// dd($request->file('import_file'));
		// Excel::import( new PostImport(), $request->file('import_file'));
	}
};