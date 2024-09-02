<?php

namespace App\Http\Controllers\ADMIN\Category;

use App\Http\Controllers\Controller;
//
use App\Services\ADMIN\Category\Service;
//
use App\Models\Category;

class BaseController extends Controller {

    public $service; 

    public function __construct(Service $service) {
        $this->service = $service;
    }

    protected function getCategories()
    {
        return Category::whereNull('category_id')
            ->with('childrenCategories')
            ->orderBy('order', 'asc')
            ->orderBy('name', 'asc')
            ->get();
    }

}
