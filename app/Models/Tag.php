<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;
use Carbon\Carbon;

class Tag extends Model
{
    use HasFactory;
	use SoftDeletes;
    use Filterable;
	
    protected $table = 'tags';
    protected $guarded = false;


	public function items(){
		return $this->belongsToMany(Item::class, 'item_tags', 'tag_id', 'item_id')->where('published', 1);
	}

	public function papers(){
		return $this->belongsToMany(Paper::class, 'paper_tags', 'tag_id', 'paper_id')->where('published', 1);
	}

	public function faqs(){
		return $this->belongsToMany(Faq::class, 'faq_tags', 'tag_id', 'faq_id')->where('published', 1)->orderBy('order', 'asc'); 
	}

	public function magnetFaq(){
		return $this->hasMany(
			Faq::class,
			'tag_id',
			'id',
		)->where('published', 1)->orderBy('created_at', 'desc');   
	}


	public function magnetSms(){
		return $this->hasMany(
			Sms::class,
			'tag_id',
			'id',
		)->where('published', 1)->orderBy('created_at', 'desc');   
	}
	

	public function posts(){
		return $this->belongsToMany(Post::class, 'post_tags', 'tag_id', 'post_id')->where('published', 1);
	}

	public function categories(){
		return $this->belongsToMany(Category::class, 'category_tags', 'tag_id', 'category_id')->where('published', 1);
	}

    public function category() {
        return $this->belongsTo(
            Category::class,
            'category_id',
			'id',
        );
    }

 

	public function getDateAsCarbonAttribute(){
		return Carbon::parse($this->created_at);
	}
}