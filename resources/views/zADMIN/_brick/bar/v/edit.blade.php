<?
$link = route($routeName, [
	'name' => request()->get('name'),
	'shema' => request()->get('shema'),
	'tag_id' => request()->get('tag_id'),
	'page' => request()->get('page'),
	'category_id' => request()->get('category_id'),
	'group_id' => request()->get('group_id'),
	'tag_id' => request()->get('tag_id')
]);
?>

@component('zADMIN._brick.bar.v._wrap.index')
	<div class="paragraph"></div>
	<a class="flex cI cC / orb" href="{{$link}}" title="назад">
		<span class="Ico -S">@svg('arrow-2')</span>
	</a>
	<button class="flex cI cC / orb pointer / transparent" type="submit" title="обновить">
		<span class="Ico">@svg('change')</span>
	</button>
@endcomponent