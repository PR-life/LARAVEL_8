<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests\Brief\StoreRequest;
use App\Models\Brief;

class BriefController extends Controller
{
 

    public function index(Request $request) {

        $idSms = $request->input('id_sms');
        $data = [
            // 'email' => $request->input('email'),
        ];
        
        return view('zBrief.Morda');
    }

    
    // public function store(Request $request) {
    public function store(StoreRequest $request) {

        // dd($request);

        $param = $request->validated();

        // dd($param);

        if(strlen($param['title']) > 1) {
            return view('_.Lol', compact('param'));
        } else {
            unset($param['title']);
        }

        // dd($param);

        // $param['v1'] = implode(',', $param['v1'] ?? []);
        $param['v2'] = implode(',', $param['v2'] ?? []);
        $param['v3'] = implode(',', $param['v3'] ?? []);

        // dd($param['v3']);
         
        $brief = Brief::create($param);


        // dd($brief);
         

        // return view('_.Thanks', compact('sms'));
        // return view('zBrief.Morda');
        return back()->with('briefSend', true);
    }

}

