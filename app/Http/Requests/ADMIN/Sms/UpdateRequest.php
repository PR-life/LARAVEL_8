<?php

namespace App\Http\Requests\ADMIN\Sms;


class UpdateRequest extends StoreRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {

        return array_merge(parent::rules(), [
            'answer'=>'nullable|string',
            'answer_user_name'=>'nullable|string',
        ]);

    }

    // public function rules()
    // {

    //     return array_merge(parent::rules(), [

    //         'sku'=>'nullable|string',

    //         'name'=>'nullable|string',
    //         // 'contact'=>'nullable|string',
    //         // 'email'=>'nullable|string',
    //         // 'phone'=>'nullable|string',
    //         // 'whatsapp'=>'nullable|string',
    //         // 'telegram'=>'nullable|string',
    //         // 'viber'=>'nullable|string',


    //         'country'=>'nullable|string',
    //         'city'=>'nullable|string',
    //         'area'=>'nullable|string',

    //         //
    //         'sms'=>'nullable|string',

    //         //
    //         'answer'=>'nullable|string',
    //         'answer_user_name'=>'nullable|string',

    //         //
    //         'param_1'=>'nullable|string',
    //         'param_2'=>'nullable|string',
    //         'param_3'=>'nullable|string',

    //         //
    //         'question_1'=>'nullable|string',
    //         'question_2'=>'nullable|string',
    //         'question_3'=>'nullable|string',
    //         'question_4'=>'nullable|string',

    //         //
    //         'type'=>'nullable|string',
    //         'label'=>'nullable|string',


	// 		//
    //         'go_mod_talk'=>'nullable|integer',
	
	// 		//
    //         'group_id' => 'nullable|integer|exists:groups,id',
    //         'tag_id' => 'nullable|integer|exists:tags,id',
    //         'category_id' => 'nullable|integer|exists:categories,id',
    //         'landing_id' => 'nullable|integer|exists:landings,id',

    //         'tag_ids' => 'nullable|array',
    //         'tag_ids.*' => 'nullable|integer|exists:tags,id',

    //         'category_ids' => 'nullable|array',
    //         'category_ids.*' => 'nullable|integer|exists:categories,id',

    //         //
	// 		'mafia' => 'nullable|integer',

	// 		//
	// 		'order' => 'nullable|integer',
	// 		'status' => 'nullable|integer',
	// 		'featured' => 'nullable|integer',
	// 		'published' => 'nullable|integer',

    //         //
	// 		'created_at' => 'required|date',
    //     ]);

    // }

	// public function messages() {
	// 	// return parent::messages(); // по умолчаиню
	// 	return [
	// 		'created_at.date' => 'не дата',
	// 	];
	// }
}

 