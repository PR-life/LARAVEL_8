<?php

namespace App\Http\Requests\Sms;
//
use Illuminate\Validation\Rule;

class UpdateRequest extends BaseRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        return array_merge(parent::rules(), [
            'id' => 'nullable|string',
            'email' => 'nullable|email',
            'phone' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9',
			'whatsapp' => 'nullable|string',
			'telegram' => 'nullable|string',
			'viber' => 'nullable|string',
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