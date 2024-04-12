<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;
use Carbon\Carbon;
//

class Landing extends Model
{
    use HasFactory;
	use SoftDeletes;
	use Filterable;

    protected $table = 'landings';
    protected $guarded = false;

	// protected $withCount = ['likedUsers','comments'];
	// protected $withCount = ['comments'];


    protected $lang_fields = [
        'name',
        'h1',
        'intro',
        'text',
        'prev_h1',
        'prev_h2',
        'prev_p',
        'title',
        'description',
        'keywords',
    ];
	
    // public function comments() {
    //     return $this->hasMany(
    //         CommentPaper::class,
    //         'item_id',
	// 		'id',
    //     )->orderBy('created_at', 'desc');
    // }

    public function tags() {
        return $this->belongsToMany(
            Tag::class,
            'landing_tags',
            'landing_id',
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

    public function getAttribute($key) {
        $default = parent::getAttribute($key);
        if ((app()->getLocale() !== 'ru') && isset($this->lang_fields) && in_array($key, $this->lang_fields)) {
            return $this->{$key.'_'.app()->getLocale()} ?? $this->{'en_'.$key};
            // return $this->{$key.'_'.app()->getLocale()} ?? $this->{$key.'_en'};
        }
        return $default;
    }
}
