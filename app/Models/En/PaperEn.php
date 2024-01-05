<?php

namespace App\Models\En;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;
use Carbon\Carbon;
//
use App\Models\CommentPaper;
use App\Models\Tag;
use App\Models\Category;
use App\Models\User;
//

class PaperEn extends Model
{
    use HasFactory;
	use SoftDeletes;
	use Filterable;

    protected $table = 'papers_en';
    protected $guarded = false;

	// protected $withCount = ['likedUsers','comments'];
	protected $withCount = ['comments'];


    // public function likedUsers() {
    //     return $this->belongsToMany(
    //         User::class,
    //         'paper_user_likes',
    //         'paper_id',
    //         'user_id'
    //     );
    // }
	
    public function comments() {
        return $this->hasMany(
            CommentPaper::class,
            'item_id',
			'id',
        )->orderBy('created_at', 'desc');
    }

    public function tags() {
        return $this->belongsToMany(
            Tag::class,
            'paper_tags',
            'paper_id',
            'tag_id'
        );
    }

    public function tag() {
        // return 1;
        return $this->belongsTo(
            Tag::class,
            'tag_id', // foreignKey
			'id', // ownerKey
        );
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
