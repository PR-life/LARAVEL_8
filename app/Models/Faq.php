<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Traits\Filterable;
use Carbon\Carbon;


class Faq extends Model
{
    use HasFactory;
    use SoftDeletes;
    use Filterable;

    protected $table = 'faqs';
    protected $guarded = false;


    protected $lang_fields = [
        'name',
        'h1',
        'text',
    ];




    public function getAttribute($key) {
        $default = parent::getAttribute($key);
        if ((app()->getLocale() !== 'ru') && isset($this->lang_fields) && in_array($key, $this->lang_fields)) {
            return $this->{$key.'_'.app()->getLocale()} ?? $this->{'en_'.$key};
            // return $this->{$key.'_'.app()->getLocale()} ?? $this->{$key.'_en'};
        }
        return $default;
    }



    public function parentFaq()
    {
        return $this->hasMany(Faq::class);
    }


    public function pivotItem() {
        return $this->belongsToMany(
            Faq::class,
            'faq_faqs',
            'faqs_id',
            'faq_id'
        );
    }

    public function friendFaqs() {
        return $this->belongsToMany(
            Faq::class,
            'faq_faqs',
            'faq_id',
            'faqs_id'
        );
    }

    public function tags() {
        return $this->belongsToMany(
            Tag::class,
            'faq_tags', // через какую тбл свзяь
            'faq_id', // id этой модели в указанной таблице
            'tag_id' // id модели Tag в указанной таблице
        );
    }


    public function category() {
        return $this->belongsTo(
            Category::class,
            'category_id', // foreignKey
			'id', // ownerKey
        );
    }

    public function childrenFaqs()
    {
        return $this->hasMany(Faq::class)->with('parentFaq')->orderBy('order','desc');
    }


    public function fullFaqs()
    {

         $col_1 = $this->belongsToMany(
            Faq::class,
            'faq_faqs',
            'faq_id',
            'faqs_id'
        )->where('published', 1)->get();

        $col_2 = $this->hasMany(Faq::class)->with('parentFaq')->where('published', 1)->get();
        $col = $col_1->merge($col_2)->sortBy('order');

        return $col;
    }



	public function getDateAsCarbonAttribute(){
		return Carbon::parse($this->created_at);
	}
}
