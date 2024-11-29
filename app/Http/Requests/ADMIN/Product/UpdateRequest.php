<?php

namespace App\Http\Requests\ADMIN\Product;

use App\Http\Requests\ADMIN\Item\StoreRequest;

class UpdateRequest extends StoreRequest
{

    public function authorize()
    {
        return true;
    }

 
    public function rules()
    {
        return array_merge(parent::rules(), [

            'delete_image' => 'nullable|integer',

            //
            'product_surrogate_id' => 'nullable|integer|exists:products,id',

            //
            'service_delivery_id' => 'nullable|integer|exists:services,id',
			'paper_payment_id' => 'nullable|exists:papers,id',
			'paper_warranty_id' => 'nullable|exists:papers,id',
			'paper_one_id' => 'nullable|exists:papers,id',
			'paper_two_id' => 'nullable|exists:papers,id',


            //
			'price_h' => 'nullable|string',
			'price_p' => 'nullable|string',

            //
            'price_old' => 'nullable|integer',
			'price_name' => 'nullable|string',
			'discount_percentage' => 'nullable|integer',
            
			'stock_quantity' => 'nullable|integer',
			'reserved_quantity' => 'nullable|integer',
			'threshold_quantity' => 'nullable|integer',
			'in_stock' => 'nullable|boolean',

			'param_liters' => 'nullable|integer',
			'param_weight' => 'nullable|integer',

            //
            'category_services_id' => 'nullable|integer|exists:categories,id',

        ]);

    }
}
