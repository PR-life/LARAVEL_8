<?php

namespace App\Http\Requests\Sms;

use App\Http\Requests\Sms\StoreRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends StoreRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return array_merge(parent::rules(), [
            'id' => 'nullable|string',
            //     'id' => [
            //     'required',
            //     Rule::unique('sms')->ignore($this->route('sms'))
            // ],
        ]);


        // return array_merge(parent::rules(), [
        //     'name' => [
        //         'required',
        //         Rule::unique('groups')->ignore($this->route('group'))
        //     ],
        //     'slug' => [
        //         'required',
        //         Rule::unique('groups')->ignore($this->route('group'))
        //     ],

        // ]);
		

    }
}