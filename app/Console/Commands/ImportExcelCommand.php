<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
////
use Maatwebsite\Excel\Facades\Excel;
//
use App\Imports\CategoryImport;
use App\Imports\TagImport;
use App\Imports\PostImport;
use App\Imports\FaqImport;
use App\Imports\PaperImport;
use App\Imports\SmsImport;
use App\Imports\LandingImport;
//
// use App\Imports\CommentsImport;
// use App\Imports\CommentsPaperImport;
//
use App\Imports\pivot\CategoryTagImport;
use App\Imports\pivot\PostTagImport;
use App\Imports\pivot\FaqTagImport;
use App\Imports\pivot\PaperTagImport;
use App\Imports\pivot\LandingTagImport;
//
use App\Imports\En\SmsEnImport;
use App\Imports\En\PaperEnImport;
//
// use App\Imports\OogwayImport;
// use App\Imports\TaskImport;
//
//
use App\Imports\zImago\ItemImport as ItemImago;
use App\Imports\zImago\pivot\ItemTagImport as ItemTagImago;
use App\Imports\zImago\ModuleImport as ModuleImago;
use App\Imports\zImago\CourseImport as CourseImago;
// use App\Imports\zImago\CourseImport as CourseImago;

class ImportExcelCommand extends Command
{

    // php artisan excel:import
    
    protected $signature = 'excel:import';
    protected $description = 'Get data from excel';


    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        ini_set('memory_limit', '-1');
        // Excel::import(new 5555Import, public_path('..../666.xlsx'));
        // Excel::import(new 5555Import, public_path('..../666.csv'));
        // Excel::import(new 5555Import, storage_path('..../666.csv'));


        Excel::import(new CategoryImport, storage_path('app/Excel/Categories.xlsx'));
        Excel::import(new TagImport, storage_path('app/Excel/Tags.xlsx'));
        //
        Excel::import(new FaqImport, storage_path('app/Excel/Faq.xlsx'));
        Excel::import(new SmsImport, storage_path('app/Excel/Sms.xlsx'));
        // //
        Excel::import(new PostImport, storage_path('app/Excel/Posts.xlsx'));
        Excel::import(new PaperImport, storage_path('app/Excel/Papers.xlsx'));
        Excel::import(new LandingImport, storage_path('app/Excel/Landings.xlsx'));

        // //
        Excel::import(new CategoryTagImport, storage_path('app/Excel/pivot/CategoryTags.xlsx'));
        Excel::import(new PostTagImport, storage_path('app/Excel/pivot/PostTags.xlsx'));
        Excel::import(new FaqTagImport, storage_path('app/Excel/pivot/FaqTags.xlsx'));
        Excel::import(new PaperTagImport, storage_path('app/Excel/pivot/PaperTags.xlsx'));
        Excel::import(new LandingTagImport, storage_path('app/Excel/pivot/LandingTags.xlsx'));

        
        // //
        Excel::import(new SmsEnImport, storage_path('app/Excel/En/SmsEn.xlsx'));
        Excel::import(new PaperEnImport, storage_path('app/Excel/En/PapersEn.xlsx'));


        // Excel::import(new CommentsImport, storage_path('app/Excel/CommentsPost.xlsx'));
        // Excel::import(new CommentsPaperImport, storage_path('app/Excel/CommentsPaper.xlsx'));

        // //
        // Excel::import(new OogwayImport, storage_path('app/Excel/Oogways.xlsx'));
        // Excel::import(new TaskImport, storage_path('app/Excel/Tasks.xlsx'));
        // //

        // //
        // //
        Excel::import(new ItemImago, storage_path('app/Excel/zImago/Items.xlsx'));
        Excel::import(new ItemTagImago, storage_path('app/Excel/zImago/pivot/ItemTag.xlsx'));
        Excel::import(new ModuleImago, storage_path('app/Excel/zImago/Modules.xlsx'));
        Excel::import(new CourseImago, storage_path('app/Excel/zImago/Courses.xlsx'));



    }
}
