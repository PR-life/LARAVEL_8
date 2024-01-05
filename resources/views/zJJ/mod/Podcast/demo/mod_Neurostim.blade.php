<?php 
$neurostim = [
	[
		'name' => __('zImago/mod/Opportunities/module/neurostim.param_1'),
		'type' => 'module',
		'nameModule' => 'Neurostim',
	],
	[
		'name' => __('zImago/mod/Opportunities/module/neurostim.param_2'),
		'type' => 'module',
		'nameModule' => 'Neurostim',
	],
	[
		'name' => __('zImago/mod/Opportunities/module/neurostim.param_3'),
		'type' => 'module',
		'nameModule' => 'Neurostim',
	],
	[
		'name' => __('zImago/mod/Opportunities/module/neurostim.param_4'),
		'type' => 'module',
		'nameModule' => 'Neurostim',
	],
	[
		'name' => __('zImago/mod/Opportunities/module/neurostim.param_5'),
		'type' => 'module',
		'nameModule' => 'Neurostim',
	],
	[
		'name' => __('zImago/mod/Opportunities/module/neurostim.param_6'),
		'type' => 'module',
		'nameModule' => 'Neurostim',
	],
	[
		'name' => __('zImago/mod/Opportunities/module/neurostim.param_7'),
		'type' => 'module',
		'nameModule' => 'Neurostim',
	],
	[
		'name' => __('zImago/mod/Opportunities/module/neurostim.param_8'),
		'type' => 'module',
		'nameModule' => 'Neurostim',
	],
	[
		'name' => __('zImago/mod/Opportunities/module/neurostim.param_9'),
		'type' => 'module',
		'nameModule' => 'Neurostim',
	],
	[
		'name' => __('zImago/mod/Opportunities/module/neurostim.param_10'),
		'type' => 'module',
		'nameModule' => 'Neurostim',
	],
	[
		'name' => __('zImago/mod/Opportunities/module/neurostim.param_11'),
		'type' => 'module',
		'nameModule' => 'Neurostim',
	],
	[
		'name' => __('zImago/mod/Opportunities/module/neurostim.param_12'),
		'type' => 'module',
		'nameModule' => 'Neurostim',
	],
	[
		'name' => __('zImago/mod/Opportunities/module/neurostim.param_13'),
		'type' => 'module',
		'nameModule' => 'Neurostim',
	],
]
?>

@foreach($neurostim as $item)
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
	@slot('badge','Neurostim')
		{!!$li->name!!}
	@endcomponent


@endcomponent




@endforeach