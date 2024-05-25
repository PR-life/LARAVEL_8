<?php

namespace App\Http\Controllers\ADMIN\_sherpa\Excel;

use App\Http\Controllers\Controller;
//
use Maatwebsite\Excel\Facades\Excel;
//
use App\Exports\GroupExport;
use App\Exports\TagExport;
use App\Exports\CategoryExport;
use App\Exports\LandingExport;
use App\Exports\PostExport;
use App\Exports\PaperExport;
use App\Exports\SmsExport;
use App\Exports\FaqExport;


class DownloadController extends Controller
{
    public function __invoke($slug){

		// dd($slug);

		switch ($slug) {
			case 'Group':
				return Excel::download( new GroupExport(), 'Groups.xlsx');
				break;
			case 'Category':
				return Excel::download( new CategoryExport(), 'Categories.xlsx');
				break;
			case 'Tag':
				return Excel::download( new TagExport(), 'Tags.xlsx');
				break;
			case 'Landing':
				return Excel::download( new LandingExport(), 'Landings.xlsx');
				break;
			case 'Post':
				return Excel::download( new PostExport(), 'Posts.xlsx');
				break;
			case 'Paper':
				return Excel::download( new PaperExport(), 'Papers.xlsx');
				break;
			case 'Faq':
				return Excel::download( new FaqExport(), 'Faqs.xlsx');
				break;
			case 'Sms':
				return Excel::download( new SmsExport(), 'Sms.xlsx');
				break;
			// case 'SmsCourse':
			// 	return Excel::download( new SmsCourseExport(), 'SmsCourse.xlsx');
			// 	break;
			// case 'Item':
			// 	return Excel::download( new zItemExport(), 'Items.xlsx');
			// 	break;
			// case 'Module':
			// 	return Excel::download( new zModuleExport(), 'Modules.xlsx');
			// 	break;
			// case 'Course':
			// 	return Excel::download( new zCourseExport(), 'Courses.xlsx');
			// 	break;
			// case 'User':
			// 	return Excel::download( new UserExport(), 'Users.xlsx');
			// 	break;
			// case 'Distributor':
			// 	return Excel::download( new zDistributorExport(), 'Distributors.xlsx');
			// 	break;

			//
			// case 'CommentPost':
			// 	return Excel::download( new CommentPostExport(), 'CommentPosts.xlsx');
			// 	break;
			// case 'CommentPaper':
			// 	return Excel::download( new CommentPaperExport(), 'CommentPapers.xlsx');
			// 	break;
			// case 'CommentCourse':
			// 	return Excel::download( new CommentCourseExport(), 'CommentCourses.xlsx');
			// 	break;
		}




        return back()->with('UpdateController', true);
    }
}