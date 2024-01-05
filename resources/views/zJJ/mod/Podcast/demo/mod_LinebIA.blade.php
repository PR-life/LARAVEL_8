<?php 
$linebia = [
	[
		'name' => __('zImago/mod/Opportunities/module/linebia.param_1'),
		'type' => 'module',
		'nameModule' => 'LinebIA',
	],
	[
		'name' => __('zImago/mod/Opportunities/module/linebia.param_2'),
		'type' => 'module',
		'nameModule' => 'LinebIA',
	],
	[
		'name' => __('zImago/mod/Opportunities/module/linebia.param_3'),
		'type' => 'module',
		'nameModule' => 'LinebIA',
	],
	[
		'name' => __('zImago/mod/Opportunities/module/linebia.param_4'),
		'type' => 'module',
		'nameModule' => 'LinebIA',
	],
	[
		'name' => __('zImago/mod/Opportunities/module/linebia.param_5'),
		'type' => 'module',
		'nameModule' => 'LinebIA',
	],

]
?>
 
@foreach($linebia as $item)
	@php
		$li = (object)$item;
	@endphp



@component('zJJ.mod.Opportunities._wrap.index')	
	@slot('param', $param)
	@slot('css', $li->type ?? '')
	@slot('i', $loop->iteration)	
	@slot('info', $li->info ?? null)
	@slot('cssBadge', '-blue')
	@slot('badge', null)
	@slot('name', $li->name)

	@isset($li->infoType)
		<div class="paragraph"></div>	
		<div class="content / Info -ico ico-left ico-s / Grey">
			{!!$li->infoType!!}
		</div>
	@endisset
	@isset($li->info)
		<div class="_open / noEvents" data-stop>
			{{-- <div class="paragraph"></div> --}}
			<div class="_wrapInfo content / space-m round">{!!$li->info!!}</div>
		</div>
	@endisset

	@component('zJJ.mod.Opportunities._wrap.content')
	@slot('badge','LinebIA')
		{!!$li->name!!}
	@endcomponent


@endcomponent



@endforeach