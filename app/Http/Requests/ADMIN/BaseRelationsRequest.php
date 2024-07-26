<?php

namespace App\Http\Requests\ADMIN;

use App\Http\Requests\ADMIN\BaseRequest;

class BaseRelationsRequest extends BaseRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return array_merge(parent::rules(), [

            'group_id' => 'nullable|integer|exists:groups,id',
            'tag_id' => 'nullable|integer|exists:tags,id',
            'category_id' => 'nullable|integer|exists:categories,id', 
            'item_id' => 'nullable|integer|exists:items,id',
            'item_surrogate_id' => 'nullable|integer|exists:items,id',

            //
            'paper_delivery' => 'nullable|integer|exists:papers,id',
            'service_delivery_id' => 'nullable|integer|exists:services,id',
            'category_services_id' => 'nullable|integer|exists:categories,id',
                
            //
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
                // .* - выбираем все что в array "tag_ids"

            'group_ids' => 'nullable|array',
            'group_ids.*' => 'nullable|integer|exists:groups,id',         
                
            'category_ids' => 'nullable|array',
            'category_ids.*' => 'nullable|integer|exists:categories,id',

            'faq_ids' => 'nullable|array',
            'faq_ids.*' => 'nullable|integer|exists:faqs,id',

            'paper_ids' => 'nullable|array',
            'paper_ids.*' => 'nullable|integer|exists:papers,id',
 
            'item_ids' => 'nullable|array',
            'item_ids.*' => 'nullable|integer|exists:items,id',
 
            'service_ids' => 'nullable|array',
            'service_ids.*' => 'nullable|integer|exists:services,id',

            'lego_ids' => 'nullable|array',
            'lego_ids.*' => 'nullable|integer|exists:lego,id',

        ]);
    }
    
    //написали сами
    // зарезервированный метод класса Request
    public function messages() {
        // return parent::messages(); // по умолчаиню
        return [
            'category_id.integer' => 'category_id должен быть integer',
            'category_id.exists' => 'такого category_id в таблице categories нет',
        ];
    }
}
