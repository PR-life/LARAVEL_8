<?php

namespace App\Services\PAGE\Feedback;

// use Exception;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Storage;
//

////
use App\Http\Filters\PaperFilter;
use App\Models\Paper;
use App\Models\En\PaperEn;
use App\Models\Tag;
use App\Models\PaperTag;


class Service {



	public function filter($data) {


		$lang = app()->getLocale();

        // $faqs = Faq::all();
		// dd($data);





        
		if($lang == 'ru') {

			if(isset($data['tag'])) {
				return $papers = $this->tags($data['tag']);
	
			} elseif(isset($data['comments'])) {
				isset($data['category_id']) ? '' : $data['category_id'] = null;
				return $papers = $this->comments($data['category_id']);
	
			} else {
				$filter = app()->make(PaperFilter::class, ['queryParams' => array_filter($data)]);
				return $papers = Paper::filter($filter)->orderBy('created_at', 'DESC')->get();
			}




		} elseif($lang == 'en') {

 
			if(isset($data['tag'])) {
				return $papers = $this->tags($data['tag']);
	
			} elseif(isset($data['comments'])) {
				isset($data['category_id']) ? '' : $data['category_id'] = null;
				return $papers = $this->comments($data['category_id']);
	
			} else {
				$filter = app()->make(PaperFilter::class, ['queryParams' => array_filter($data)]);
				return $papers = PaperEn::filter($filter)->orderBy('created_at', 'DESC')->get();
			}

		};


		// dd($data);

 


	}


	public function comments($category_id = null) {
		if($category_id) {
			return $papers = Paper::where('category_id', $category_id)->has('comments', '>', 0)->withCount('comments')->orderBy('comments_count', 'desc')->get();
		} else {
			return $papers = Paper::has('comments', '>', 0)->withCount('comments')->orderBy('comments_count', 'desc')->get();
		}
	}


	public function tags($tag_id) {
		$tag = Tag::find($tag_id);
		return $papers = $tag->papers()->get();
	}

}