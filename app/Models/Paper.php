<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;
use Carbon\Carbon;
//

class Paper extends Model
{
    use HasFactory;
	use SoftDeletes;
	use Filterable;

    protected $table = 'papers';
    protected $guarded = false;

	// protected $withCount = ['likedUsers','comments'];
	// protected $withCount = ['comments'];



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


    public function items() {
        return $this->belongsToMany(
            Item::class,
            'paper_items',
            'paper_id',
            'item_id'
        )->orderBy('order');
    }

    public function faqs() {
        return $this->belongsToMany(
            Faq::class,
            'paper_faqs',
            'paper_id',
            'faq_id'
        )->orderBy('order');
    }


    public function tags() {
        return $this->belongsToMany(
            Tag::class,
            'paper_tags',
            'paper_id',
            'tag_id'
        )->orderBy('order');
    }

    public function tag() {
        // return 1;
        return $this->belongsTo(
            Tag::class,
            'tag_id', // foreignKey
			'id', // ownerKey
        );
    }

    public function categories() {
        return $this->belongsToMany(
            Category::class,
            'paper_categories',
            'paper_id',
            'category_id'
        )->orderBy('order');
    }


    public function category() {
        return $this->belongsTo(
            Category::class,
            'category_id',
			'id',
        );
    }

    public function user() {
        return $this->belongsTo(
            User::class,
            'user_id',
			'id',
        );
    }


	public function getDateAsCarbonAttribute(){
		return Carbon::parse($this->created_at);
	}
}
