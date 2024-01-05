<?php 
$opredelyaet = [
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_1'),
		'type' => 'apk',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_2'),
		'type' => 'apk',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_3'),
		'type' => 'apk imago',
		'infoType' => __('zImago/mod/Opportunities/opportunities.param_3_infoType'),
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_4'),
		'type' => 'apk audit',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_5'),
		'type' => 'apk',
		'info' => __('zImago/mod/Opportunities/opportunities.param_5_info'),
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_6'),
		'type' => 'apk audit',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_7'),
		'type' => 'apk',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_8'),
		'type' => 'apk',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_9'),
		'type' => 'apk',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_10'),
		'type' => 'apk',
		'info' => __('zImago/mod/Opportunities/opportunities.param_10_info'),
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_11'),
		'type' => 'apk',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_12'),
		'type' => 'apk',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_13'),
		'type' => 'apk',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_14'),
		'type' => 'apk',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_15'),
		'type' => 'apk',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_16'),
		'type' => 'apk',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_17'),
		'type' => 'apk',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_18'),
		'type' => 'apk',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_19'),
		'type' => 'apk',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_20'),
		'type' => 'apk',
		'info' => __('zImago/mod/Opportunities/opportunities.param_20_info'),
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_21'),
		'type' => 'apk',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_22'),
		'type' => 'apk',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_23'),
		'type' => 'apk',
		// 'info' => '5555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_24'),
		'type' => 'apk',
		'info' => __('zImago/mod/Opportunities/opportunities.param_24_info'),
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_25'),
		'type' => 'apk',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_26'),
		'type' => 'apk',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_27'),
		'type' => 'apk',
		'info' => __('zImago/mod/Opportunities/opportunities.param_27_info'),
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_28'),
		'type' => 'apk',
		// 'info' => '5555555',
	],
	[
		'name' => __('zImago/mod/Opportunities/opportunities.param_29'),
		'type' => 'apk',
		'info' => __('zImago/mod/Opportunities/opportunities.param_29_info'),
	]
]
?>


@foreach($opredelyaet as $item)
	@php
		$li = (object)$item;
	@endphp


	@component('zJJ.mod.Opportunities._wrap.index')	
		@slot('param', $param)
		@slot('css', $li->type ?? '')
		@slot('i', $loop->iteration)	
		@slot('info', $li->info ?? null)
		@slot('cssBadge', '-green')
		@slot('badge', 'определяет')
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
