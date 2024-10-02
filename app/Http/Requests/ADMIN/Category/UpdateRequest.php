<?php

namespace App\Http\Requests\ADMIN\Category;

use App\Http\Requests\ADMIN\Category\StoreRequest;


class UpdateRequest extends StoreRequest
{
 
    public function authorize()
    {
        return true;
    }
 
    public function rules()
    {
        return array_merge(parent::rules(), [
            'category_services_id' => 'nullable|integer|exists:categories,id',
            //
            'service_delivery_id' => 'nullable|integer|exists:services,id',
            'paper_payment_id' => 'nullable|integer|exists:papers,id',
            'paper_warranty_id' => 'nullable|integer|exists:papers,id',
            //
            'delete_image' => 'nullable|integer',
        ]);
    }
}
