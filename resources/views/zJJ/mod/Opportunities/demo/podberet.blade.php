<?php 
$podberet = [
	[
		'name' => __('zImago/mod/Opportunities/podberet.param_1'),
		'type' => 'apk',
		'info' => __('zImago/mod/Opportunities/podberet.param_1_info'),
	],
	[
		'name' => __('zImago/mod/Opportunities/podberet.param_2'),
		'type' => 'apk',
		'info' => __('zImago/mod/Opportunities/podberet.param_2_info'),
	],
	[
		'name' => __('zImago/mod/Opportunities/podberet.param_3'),
		'type' => 'apk',
		'info' => __('zImago/mod/Opportunities/podberet.param_3_info'),
	],
	[
		'name' => __('zImago/mod/Opportunities/podberet.param_4'),
		'type' => 'apk audit',
		// 'info' => '5555555',
	],
]
?>


@foreach($podberet as $item)
	@php
		$li = (object)$item;
	@endphp



	@component('zJJ.mod.Opportunities._wrap.index')	
		@slot('param', $param)
		@slot('css', $li->type ?? '')
		@slot('i', $loop->iteration)	
		@slot('info', $li->info ?? null)
		@slot('cssBadge', '-blue')
		@slot('badge', 'подберет')
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
	@endcomponent


@endforeach
