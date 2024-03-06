<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
////
use Illuminate\Support\Arr;
use App\Models\Face;


class DevCommand extends Command
{

    // php artisan excel:import
    
    protected $signature = 'dev';
    protected $description = 'Get data from excel';


    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $faces = Face::all();

        foreach($faces as $_face) {

            $arr = [
                null,
                null,
                null,
                null,
                Face::get()->random()->id
            ];

            $_face->face_id = Arr::random($arr);

            // print_r($randomed1);
            // dd($arr);
        }



        

    }
}
