<?php

namespace App\Http\Controllers\ADMIN\_sherpa\Excel;

use App\Http\Controllers\Controller;
////
use Maatwebsite\Excel\Facades\Excel;
//

use App\Exports\SmsExport;
use App\Imports\SmsImport;
use App\Imports\SmsUpdate;

class ManagerController extends Controller
{

    public function updateSlug($model){
		
        switch ($model) {
            case 'Sms':
                Excel::import( new SmsUpdate(), 'Sms.xlsx');
                break;
            // case 'Landing':
            //     Excel::import( new LandingUpdate(), 'Landings.xlsx');
            //     break;
            // case 'Post':
            //     Excel::import( new PostUpdate(), 'Posts.xlsx');
            //     break;
            // case 'Category':
            //     Excel::import( new CategoryUpdate(), 'Categories.xlsx');
            //     break;
            // case 'Tag':
            //     Excel::import( new TagUpdate(), 'Tags.xlsx');
            //     break;
            // case 'Paper':
            //     Excel::import( new PaperUpdate(), 'Papers.xlsx');
            //     break;
            // case 'Faq':
            //     Excel::import( new FaqUpdate(), 'Faqs.xlsx');
            //     break;
            // case 'Item':
            //     Excel::import( new zItemUpdate(), 'Items.xlsx');
            //     break;

            //
            // case 'CommentPost':
            //     Excel::import( new CommentPostUpdate(), 'CommentPosts.xlsx');
            //     break;
            // case 'CommentPaper':
            //     Excel::import( new CommentPaperUpdate(), 'CommentPapers.xlsx');
            //     break;
            // case 'CommentCourse':
            //     Excel::import( new CommentCourseUpdate(), 'CommentCourses.xlsx');
            //     break;
        }

        return back()->with('status', "обновить таблицу: <b>$model</b>");
    }	

};




