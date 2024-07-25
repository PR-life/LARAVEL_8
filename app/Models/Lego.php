<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;


class Lego extends BaseContent
{
	use SoftDeletes;
    use Filterable;

    protected $table = 'lego';
    protected $guarded = false;



    protected function getTagPivotTable(){
        return 'lego_tags';
    }
    protected function getCategoryPivotTable(){
        return 'lego_categories';
    }
    protected function getGroupPivotTable(){
        return 'lego_groups';
    }
}
