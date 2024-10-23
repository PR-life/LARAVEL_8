<?php

namespace App\Http\Controllers\ADMIN\_CRM\Face;

//
use Illuminate\Http\Request;
use App\Http\Requests\_size\clothes\temporaryRequest;
// use App\Http\Requests\ADMIN\Face\UpdateRequest;

//
use App\Models\Face;


class UpdateController extends BaseController
{
    public function __invoke(Request $request, Face $face){


        $validator1 = $request->validate([
            'sku' => 'nullable|string',
			//
			'name' => 'required|string',
            'surname' => 'required|string',
            'patronymic' => 'nullable|string',
            'birthday' => 'nullable',
            'gender' => 'nullable',
            
            
            'note' => 'nullable',


            //
            'day' => 'nullable|integer|min:1|max:31',
            'month' => 'nullable|integer|min:1|max:12',
            'year' => 'nullable|integer|min:1900|max:' . date('Y'),


            //
            'email' => 'nullable|email',
            'phone' => 'nullable',
			'whatsapp' => 'nullable',
			'telegram' => 'nullable|string',
			'viber' => 'nullable',
            'public_contact' => 'nullable|string',
            'country' => 'nullable|string',
            'city' => 'nullable|string',
            'area' => 'nullable|string',
            'nickname' => 'nullable|string',
            'avatar' => 'nullable|string',
            'estimation' => 'nullable|string',
            'reviews' => 'nullable|string',
            'posts' => 'nullable|string',
            'face_par_1' => 'nullable|string',
            'face_par_2' => 'nullable|string',
            'face_par_3' => 'nullable|string',
            'note' => 'nullable|string',
            'crm_id' => 'nullable|integer|exists:crm,id',
            'mafia' => 'nullable|integer',
        ]);

        $validator2 = $request->validate([
            // 'sku' => 'string',
            'face_id' => 'nullable',
            'up_size' => 'nullable',
            'bottom_size' => 'nullable',
            'size_jacket' => 'nullable',
            'size_jacket_height' => 'nullable',
            'size_jacket_exhaustiveness' => 'nullable',
            'size_trouser' => 'nullable',
            'size_shirt' => 'nullable',
            'size_hosiery' => 'nullable',
            'size_jeans' => 'nullable',
            'size_shoes' => 'nullable',
        ]);


        

        // dd($validator1);
        // dd($request);
        // $data = $request->validated();
        // dd($data);
        // $face = $this->service->update($face,$data);
        $face = $this->service->temporary_update($face,$validator1,$validator2);

		return back()->with('UpdateController', true);
    }
}
