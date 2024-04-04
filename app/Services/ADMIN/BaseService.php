<?php
namespace App\Services\ADMIN;


class BaseService {
	public function _request($_request) {
		return 	$_request = [
					'page' => request()->get('page'),
					'tag_id' => request()->get('tag_id'),
					'category_id' => request()->get('category_id'),
					'group_id' => request()->get('group_id'),
					'name' => request()->get('name'),
					'shema' => request()->get('shema'),
				];
	}

}

