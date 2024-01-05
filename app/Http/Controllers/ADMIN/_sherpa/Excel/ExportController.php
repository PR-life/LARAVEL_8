<?php

namespace App\Http\Controllers\ADMIN\_sherpa\Excel;

use App\Http\Controllers\Controller;
////
use Maatwebsite\Excel\Facades\Excel;
//

use App\Exports\CategoryExport;
use App\Exports\TagExport;
use App\Exports\PostExport;
use App\Exports\FaqExport;
use App\Exports\PaperExport;
use App\Exports\SmsExport;
use App\Exports\LandingExport;
//
// use App\Exports\msg\CommentPostExport;
// use App\Exports\msg\CommentPaperExport;
//
use App\Exports\pivot\CategoryTagExport;
use App\Exports\pivot\PostTagExport;
use App\Exports\pivot\FaqTagExport;
use App\Exports\pivot\PaperTagExport;
use App\Exports\pivot\LandingTagExport;
//
use App\Exports\En\SmsEnExport;
use App\Exports\En\PaperEnExport;
//
use App\Exports\oogway\OogwayExport;
use App\Exports\oogway\TaskExport;
//
//
use App\Exports\zImago\ItemExport as ItemImago;
use App\Exports\zImago\pivot\ItemTagExport as ItemTagImago;;
use App\Exports\zImago\ModuleExport as ModuleImago;;
use App\Exports\zImago\CourseExport as CourseImago;;
// use App\Exports\zDistributorExport;
// use App\Exports\zConsultantExport;
// use App\Exports\zModuleExport;
//
// use App\Exports\pivotItemTagExport;


// use App\Exports\pivotCourseTagExport;
// use App\Imports\pivotCourseTagImport;





// use App\Exports\LandingExport;
// use App\Imports\LandingImport;
// use App\Imports\LandingUpdate;





// use App\Exports\CommentCourseExport;
// use App\Imports\CommentCourseImport;
// use App\Imports\CommentCourseUpdate;
 
// use App\Exports\SmsCourseExport;
// // use App\Imports\SmsCourseImport;
// // use App\Imports\SmsCourseUpdate;

// //
// use App\Imports\zItemImport;
// use App\Imports\zItemUpdate;

// use App\Exports\zModuleExport;
// use App\Imports\zModuleImport;
// use App\Imports\zModuleUpdate;

// use App\Exports\zCourseExport;
// use App\Imports\zCourseImport;
// use App\Imports\zCourseUpdate;

// use App\Exports\zDistributorExport;
// use App\Imports\zDistributorImport;
// use App\Imports\zDistributorUpdate;

// //






class ExportController extends Controller
{



	public function __invoke()
	{
 

		// $nameOogway = 'Oogways' . '_' . date('dm_Gi'). '.xlsx';
		// Excel::store(new OogwayExport, 'Excel/old/'.$nameOogway);
		// Excel::store(new OogwayExport, 'Excel/Oogways.xlsx');


		// $nameTask = 'Tasks' . '_' . date('dm_Gi'). '.xlsx';
		// Excel::store(new TaskExport, 'Excel/old/'.$nameTask);
		// Excel::store(new TaskExport, 'Excel/Tasks.xlsx');

		// dd(111);

		$nameCategory = 'Categories' . '_' . date('dm_Gi'). '.xlsx';
		Excel::store(new CategoryExport, 'Excel/old/'.$nameCategory);
		Excel::store(new CategoryExport, 'Excel/Categories.xlsx');

		$nameTag = 'Tags' . '_' . date('dm_Gi'). '.xlsx';
		Excel::store(new TagExport, 'Excel/old/'.$nameTag);
		Excel::store(new TagExport, 'Excel/Tags.xlsx');

		$namePost = 'Posts' . '_' . date('dm_Gi'). '.xlsx';
		Excel::store(new PostExport, 'Excel/old/'.$namePost);
		Excel::store(new PostExport, 'Excel/Posts.xlsx');
		
		$nameFaq = 'Faq' . '_' . date('dm_Gi'). '.xlsx';
		Excel::store(new FaqExport, 'Excel/old/'.$nameFaq);
		Excel::store(new FaqExport, 'Excel/Faq.xlsx');

		$namePaper = 'Papers' . '_' . date('dm_Gi'). '.xlsx';
		Excel::store(new PaperExport, 'Excel/old/'.$namePaper);
		Excel::store(new PaperExport, 'Excel/Papers.xlsx');

		$nameSms = 'Sms' . '_' . date('dm_Gi'). '.xlsx';
		Excel::store(new SmsExport, 'Excel/old/'.$nameSms);
		Excel::store(new SmsExport, 'Excel/Sms.xlsx');

		$nameLanding = 'Landing' . '_' . date('dm_Gi'). '.xlsx';
		Excel::store(new LandingExport, 'Excel/old/'.$nameLanding);
		Excel::store(new LandingExport, 'Excel/Landings.xlsx');

		// dd(222);
		
		$namePaperEn = 'PapersEn' . '_' . date('dm_Gi'). '.xlsx';
		Excel::store(new PaperEnExport, 'Excel/old/En/'.$namePaperEn);
		Excel::store(new PaperEnExport, 'Excel/En/PapersEn.xlsx');

		$nameSmsEn = 'SmsEn' . '_' . date('dm_Gi'). '.xlsx';
		Excel::store(new SmsEnExport, 'Excel/old/'.$nameSms);
		Excel::store(new SmsEnExport, 'Excel/En/SmsEn.xlsx');


		// dd(444)
		
		$nameCategoryTag = 'CategoryTag' . '_' . date('dm_Gi'). '.xlsx';
		Excel::store(new CategoryTagExport, 'Excel/old/pivot/'.$nameCategoryTag);
		Excel::store(new CategoryTagExport, 'Excel/pivot/CategoryTags.xlsx');

		$namePostTag = 'PostTags' . '_' . date('dm_Gi'). '.xlsx';
		Excel::store(new PostTagExport, 'Excel/old/pivot/'.$namePostTag);
		Excel::store(new PostTagExport, 'Excel/pivot/PostTags.xlsx');

		$nameFaqTag = 'FaqTags' . '_' . date('dm_Gi'). '.xlsx';
		Excel::store(new FaqTagExport, 'Excel/old/pivot/'.$nameFaqTag);
		Excel::store(new FaqTagExport, 'Excel/pivot/FaqTags.xlsx');
		

		$nametPaperTag = 'PaperTags' . '_' . date('dm_Gi'). '.xlsx';
		Excel::store(new PaperTagExport, 'Excel/old/pivot/'.$nametPaperTag);
		Excel::store(new PaperTagExport, 'Excel/pivot/PaperTags.xlsx');

		$nametLandingTag = 'LandingTags' . '_' . date('dm_Gi'). '.xlsx';
		Excel::store(new LandingTagExport, 'Excel/old/pivot/'.$nametLandingTag);
		Excel::store(new LandingTagExport, 'Excel/pivot/LandingTags.xlsx');




		// dd(IMAGO)

		$nameItem = 'Items' . '_' . date('dm_Gi'). '.xlsx';
		Excel::store(new ItemImago, 'Excel/zImago/old/'.$nameItem);
		Excel::store(new ItemImago, 'Excel/zImago/Items.xlsx');
		
		$nameItemTagImago = 'ItemTag' . '_' . date('dm_Gi'). '.xlsx';
		Excel::store(new ItemTagImago, 'Excel/old/'.$nameItemTagImago);
		Excel::store(new ItemTagImago, 'Excel/zImago/pivot/ItemTag.xlsx');
		
		$nameModule = 'Modules' . '_' . date('dm_Gi'). '.xlsx';
		Excel::store(new ModuleImago, 'Excel/zImago/old/'.$nameModule);
		Excel::store(new ModuleImago, 'Excel/zImago/Modules.xlsx');

		$nameCourse = 'Courses' . '_' . date('dm_Gi'). '.xlsx';
		Excel::store(new CourseImago, 'Excel/zImago/old/'.$nameCourse);
		Excel::store(new CourseImago, 'Excel/zImago/Courses.xlsx');




		// $nameCommentPost = 'CommentsPost' . '_' . date('dm_Gi'). '.xlsx';
		// Excel::store(new CommentPostExport, 'Excel/old/'.$nameCommentPost);
		// Excel::store(new CommentPostExport, 'Excel/CommentsPost.xlsx');
		
		// $nameCommentPaper = 'CommentsPaper' . '_' . date('dm_Gi'). '.xlsx';
		// Excel::store(new CommentPaperExport, 'Excel/old/'.$nameCommentPaper);
		// Excel::store(new CommentPaperExport, 'Excel/CommentsPaper.xlsx');
		
 
	


		
 
		
 
		
		
		
		
		// //////
		// $nameDistributor = 'Distributors' . '_' . date('dm_Gi'). '.xlsx';
		// Excel::store(new zDistributorExport, 'Excel/old/'.$nameDistributor);
		// Excel::store(new zDistributorExport, 'Excel/Distributors.xlsx');
		
		// $nameConsultant = 'Consultants' . '_' . date('dm_Gi'). '.xlsx';
		// Excel::store(new zConsultantExport, 'Excel/old/'.$nameConsultant);
		// Excel::store(new zConsultantExport, 'Excel/Consultants.xlsx');



		


		// $nameModule = 'Module' . '_' . date('dm_Gi'). '.xlsx';
		// Excel::store(new zModuleExport, 'Excel/old/'.$nameModule);
		// Excel::store(new zModuleExport, 'Excel/Modules.xlsx');



		return 111;
		// Excel::store(new PaperExport, 'Papers.xlsx');










































// 		$nameUser = 'Users' . '_' . date('dm_Gi'). '_' . '.xlsx';
 
// 		Excel::store(new UserExport, 'old/'.$nameUser);
// 		Excel::store(new UserExport, 'Users.xlsx');



// 		$nameLanding = 'Landings' . '_' . date('dm_Gi'). '_' . '.xlsx';
 

// 		Excel::store(new LandingExport, 'old/'.$nameLanding);
// 		Excel::store(new LandingExport, 'Landings.xlsx');





 





// 		$nameCommentCourse = 'CommentCourses' . '_' . date('dm_Gi'). '_' . '.xlsx';

// 		Excel::store(new CommentCourseExport, 'old/'.$nameCommentCourse);
// 		Excel::store(new CommentCourseExport, 'CommentCourses.xlsx');





// 		$nameItem = 'Item' . '_' . date('dm_Gi'). '_' . '.xlsx';

// 		Excel::store(new zItemExport, 'old/'.$nameItem);
// 		Excel::store(new zItemExport, 'Items.xlsx');

// 		$nameModule = 'Module' . '_' . date('dm_Gi'). '_' . '.xlsx';

// 		Excel::store(new zModuleExport, 'old/'.$nameModule);
// 		Excel::store(new zModuleExport, 'Modules.xlsx');


// 		$nameCourse = 'Course' . '_' . date('dm_Gi'). '_' . '.xlsx';

// 		Excel::store(new zCourseExport, 'old/'.$nameCourse);
// 		Excel::store(new zCourseExport, 'Courses.xlsx');


// 		$nameDistributor = 'Distributor' . '_' . date('dm_Gi'). '_' . '.xlsx';

// 		Excel::store(new zDistributorExport, 'old/'.$nameDistributor);
// 		Excel::store(new zDistributorExport, 'Distributors.xlsx');

// 		///////


// 		//


// 		$nameItemTag = 'ItemTags' . '_' . date('dm_Gi'). '_' . '.xlsx';

// 		Excel::store(new pivotItemTagExport, 'old/pivot/'.$nameItemTag);
// 		Excel::store(new pivotItemTagExport, 'pivot/ItemTags.xlsx');


// 		$nameCourseTag = 'CourseTags' . '_' . date('dm_Gi'). '_' . '.xlsx';

// 		Excel::store(new pivotCourseTagExport, 'old/pivot/'.$nameCourseTag);
// 		Excel::store(new pivotCourseTagExport, 'pivot/CourseTags.xlsx');



// 		return back()->with('status', 'Резервные копии готовы');
// 		// return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
// 		// return view('_.Excel'); 
		
// 		// return Excel::download( new PaperExport(), 'papers-ex.xlsx');
// 		// return Excel::download( new PaperExport(), 'papers-ex.csv');

		
// /*		
// 		Excel::store( new PaperExport(), 'PapersExport.csv');;
// 		Excel::store( new FaqExport(), 'FaqsExport.csv');;
// 		Excel::store( new DistributorExport(), 'DistributorsExport.csv');
// 		Excel::store( new CourseExport(), 'CourseExport.csv');
// */
// 		// Excel::store( new PaperExport(), 'Papers.csv');;
// 		// Excel::store( new FaqExport(), 'Faqs.csv');;
// 		// Excel::store( new DistributorExport(), 'Distributors.csv');
// 		// Excel::store( new CourseExport(), 'Courses.csv');
// 		// Excel::store( new ItemExport(), 'Items.csv');
// 		// return Excel::store( new ModuleExport(), 'Modules.csv');;

// 		/*
// 		return Excel::store( new FarmerExport(), 'FarmerExport.csv');
// 		return Excel::download( new FarmerExport(), 'FarmerExport.csv');
// 		*/
	}











































//     public function index() {
// 		$data['h1'] = 'Excel';
// 		$data['wrap_h1'] = 'sherpa';

//         return view('_ADMIN.Excel', compact('data'));

//     }


// 	public function downloadSlug($slug){

// 		switch ($slug) {
// 			case 'Landing':
// 				return Excel::download( new LandingExport(), 'Landings.xlsx');
// 				break;
// 			case 'Post':
// 				return Excel::download( new PostExport(), 'Posts.xlsx');
// 				break;
// 			case 'Category':
// 				return Excel::download( new CategoryExport(), 'Categories.xlsx');
// 				break;
// 			case 'Tag':
// 				return Excel::download( new TagExport(), 'Tags.xlsx');
// 				break;
// 			case 'Paper':
// 				return Excel::download( new PaperExport(), 'Papers.xlsx');
// 				break;
// 			case 'Faq':
// 				return Excel::download( new FaqExport(), 'Faqs.xlsx');
// 				break;
// 			case 'Sms':
// 				return Excel::download( new SmsExport(), 'Sms.xlsx');
// 				break;
// 			case 'SmsCourse':
// 				return Excel::download( new SmsCourseExport(), 'SmsCourse.xlsx');
// 				break;
// 			case 'Item':
// 				return Excel::download( new zItemExport(), 'Items.xlsx');
// 				break;
// 			case 'Module':
// 				return Excel::download( new zModuleExport(), 'Modules.xlsx');
// 				break;
// 			case 'Course':
// 				return Excel::download( new zCourseExport(), 'Courses.xlsx');
// 				break;
// 			case 'User':
// 				return Excel::download( new UserExport(), 'Users.xlsx');
// 				break;
// 			case 'Distributor':
// 				return Excel::download( new zDistributorExport(), 'Distributors.xlsx');
// 				break;

// 			//
// 			case 'CommentPost':
// 				return Excel::download( new CommentPostExport(), 'CommentPosts.xlsx');
// 				break;
// 			case 'CommentPaper':
// 				return Excel::download( new CommentPaperExport(), 'CommentPapers.xlsx');
// 				break;
// 			case 'CommentCourse':
// 				return Excel::download( new CommentCourseExport(), 'CommentCourses.xlsx');
// 				break;
// 		}
// 	}

// 	public function importSlug($slug){

// 		switch ($slug) {
// 			case 'Landing':
// 				Excel::import( new LandingImport(), 'Landings.xlsx');
// 				break;
// 			case 'Post':
// 				Excel::import( new PostImport(), 'Posts.xlsx');
// 				break;
// 			case 'Category':
// 				Excel::import( new CategoryImport(), 'Categories.xlsx');
// 				break;
// 			case 'Tag':
// 				Excel::import( new TagImport(), 'Tags.xlsx');
// 				break;
// 			case 'Paper':
// 				Excel::import( new PaperImport(), 'Papers.xlsx');
// 				break;
// 			case 'Faq':
// 				Excel::import( new FaqImport(), 'Faqs.xlsx');
// 				break;
// 			case 'Sms':
// 				Excel::import( new SmsImport(), 'Sms.xlsx');
// 				break;
// 			case 'Item':
// 				Excel::import( new zItemImport(), 'Items.xlsx');
// 				break;
// 			case 'Module':
// 				Excel::import( new zModuleImport(), 'Modules.xlsx');
// 				break;
// 			case 'Course':
// 				Excel::import( new zCourseImport(), 'Courses.xlsx');
// 				break;
// 			case 'Distributor':
// 				Excel::import( new zDistributorImport(), 'Distributors.xlsx');
// 				break;

// 			//
// 			case 'CommentPost':
// 				Excel::import( new CommentPostImport(), 'CommentPosts.xlsx');
// 				break;
// 			case 'CommentPaper':
// 				Excel::import( new CommentPaperImport(), 'CommentPapers.xlsx');
// 				break;
// 			case 'CommentCourse':
// 				Excel::import( new CommentCourseImport(), 'CommentCourses.xlsx');
// 				break;

// 			//
// 			case 'FaqTag':
// 				Excel::import( new pivotFaqTagImport(), 'pivot/FaqTags.xlsx');
// 				break;
// 			case 'ItemTag':
// 				Excel::import( new pivotItemTagImport(), 'pivot/ItemTags.xlsx');
// 				break;
// 		}
// 		return back()->with('status', "загрузка в БД: <b>$slug</b>");
// 	}



// 	public function updateSlug($slug){
		
// 		switch ($slug) {
// 			case 'Landing':
// 				Excel::import( new LandingUpdate(), 'Landings.xlsx');
// 				break;
// 			case 'Post':
// 				Excel::import( new PostUpdate(), 'Posts.xlsx');
// 				break;
// 			case 'Category':
// 				Excel::import( new CategoryUpdate(), 'Categories.xlsx');
// 				break;
// 			case 'Tag':
// 				Excel::import( new TagUpdate(), 'Tags.xlsx');
// 				break;
// 			case 'Paper':
// 				Excel::import( new PaperUpdate(), 'Papers.xlsx');
// 				break;
// 			case 'Faq':
// 				Excel::import( new FaqUpdate(), 'Faqs.xlsx');
// 				break;
// 			case 'Sms':
// 				Excel::import( new SmsUpdate(), 'Sms.xlsx');
// 				break;
// 			case 'Item':
// 				Excel::import( new zItemUpdate(), 'Items.xlsx');
// 				break;
// 			case 'Module':
// 				Excel::import( new zModuleUpdate(), 'Modules.xlsx');
// 				break;
// 			case 'Course':
// 				Excel::import( new zCourseUpdate(), 'Courses.xlsx');
// 				break;
// 			case 'Distributor':
// 				Excel::import( new zDistributorUpdate(), 'Distributors.xlsx');
// 				break;

// 			//
// 			case 'CommentPost':
// 				Excel::import( new CommentPostUpdate(), 'CommentPosts.xlsx');
// 				break;
// 			case 'CommentPaper':
// 				Excel::import( new CommentPaperUpdate(), 'CommentPapers.xlsx');
// 				break;
// 			case 'CommentCourse':
// 				Excel::import( new CommentCourseUpdate(), 'CommentCourses.xlsx');
// 				break;
// 		}
// 		return back()->with('status', "обновить таблицу: <b>$slug</b>");
// 	}











// 	// php artisan make:export PostExport --model=Post



	// public function index()
 







// 	// php artisan make:import PaperautoImport --model=Paper
// 	public function import(Request $request)
// 	{

 


// 		Excel::import( new PostImport(), $request->file('import_file'));


// 		// $papers = Excel::toCollection( new PaperautoImport(), $request->file('import_file'));
// 		// // dd($papers);
// 		// foreach ($papers[0] as $paper) {
// 		// 	// dd( $paper[1] . '' . $paper[2]);
// 		// 	Paper::where('id', $paper[0])->update([
// 		// 		'name' => $paper[1],
// 		// 		'slug' => $paper[2],
// 		// 		'country' => $paper[4],
// 		// 	]);
// 		// }

// 		// return redirect()->route('vopros.index');

// 		// этот код создает все что есть в файле, с дублями
// 		// Excel::import( new PaperautoImport(), $request->file('import_file'));
// 		// return redirect()->route('vopros.index');
// 	}



}
