<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;
//

class Paper extends BaseContent
{
    use HasFactory;
	use SoftDeletes;
	use Filterable;

    protected $table = 'papers';
    protected $guarded = false;

	// protected $withCount = ['likedUsers','comments'];
	// protected $withCount = ['comments'];

    // Если вам нужно использовать кастомное имя внешнего ключа, вы можете переопределить метод getForeignKey в дочернем классе, например, в модели Paper:
    // public function getForeignKey()
    // {
    //     return 'custom_paper_id';
    // }

    // public function likedUsers() {
    //     return $this->belongsToMany(
    //         User::class,
    //         'paper_user_likes',
    //         'paper_id',
    //         'user_id'
    //     );
    // }
	
    // public function comments() {
    //     return $this->hasMany(
    //         CommentPaper::class,
    //         'item_id',
	// 		'id',
    //     )->orderBy('created_at', 'desc');
    // }


    protected function getItemPivotTable(){
        return 'paper_items';
    }
    protected function getFaqPivotTable(){
        return 'paper_faqs';
    }
    protected function getTagPivotTable(){
        return 'paper_tags';
    }
    protected function getCategoryPivotTable(){
        return 'paper_categories';
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
