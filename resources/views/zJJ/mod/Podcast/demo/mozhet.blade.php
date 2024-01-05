<?php 
$mozhet = [
	[
		'name' => __('zImago/mod/Opportunities/mozhet.param_1'),
		'type' => 'apk',
		'info' => __('zImago/mod/Opportunities/mozhet.param_1_info'),
	],
	[
		'name' => __('zImago/mod/Opportunities/mozhet.param_2'),
		'type' => 'apk imago',
		'infoType' => __('zImago/mod/Opportunities/mozhet.param_2_infoType'),
	],
	[
		'name' => __('zImago/mod/Opportunities/mozhet.param_3'),
		'type' => 'apk imago',
		'infoType' => __('zImago/mod/Opportunities/mozhet.param_3_infoType'),
	],
	[
		'name' => __('zImago/mod/Opportunities/mozhet.param_4'),
		'type' => 'apk',
	],
	[
		'name' => __('zImago/mod/Opportunities/mozhet.param_5'),
		'type' => 'apk',
	],
	[
		'name' => __('zImago/mod/Opportunities/mozhet.param_6'),
		'type' => 'apk',
	],
	[
		'name' => __('zImago/mod/Opportunities/mozhet.param_7'),
		'type' => 'apk',
	],
	[
		'name' => __('zImago/mod/Opportunities/mozhet.param_8'),
		'type' => 'apk',
	]
]
?>

@foreach($mozhet as $item)
	@php
		$li = (object)$item;
	@endphp
	@component('zJJ.mod.Opportunities._wrap.index')	
		@slot('param', $param)
		@slot('css', $li->type ?? '')
		@slot('i', $loop->iteration)	
		@slot('info', $li->info ?? null)
		@slot('cssBadge', '-blue c2')
		@slot('badge', 'может')
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
