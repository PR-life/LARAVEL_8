<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
////
use Maatwebsite\Excel\Facades\Excel;
//
use App\Imports\En\PaperEnImport;
use App\Imports\En\SmsEnImport;


//
// use App\Imports\pivot\zItemTagImport;


class ImportExcelEnCommand extends Command
{

    // php artisan excel:import
    
    protected $signature = 'excel:importEn';
    protected $description = 'Get data from excel';


    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        ini_set('memory_limit', '-1');

        Excel::import(new PaperEnImport, storage_path('app/Excel/En/PapersEn.xlsx'));
        Excel::import(new SmsEnImport, storage_path('app/Excel/En/SmsEn.xlsx'));

    }
}
