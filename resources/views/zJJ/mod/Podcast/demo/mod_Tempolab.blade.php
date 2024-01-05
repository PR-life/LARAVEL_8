<?php 
$tempolab = [
	[
		'name' => 'неинвазивно получить 85 параметров периферического и биохимического состава крови',
		'type' => 'module',
		'nameModule' => 'Tempolab',
	],
	[
		'name' => 'получить гемодинамические показатели',
		'type' => 'module',
		'nameModule' => 'Tempolab',
	],
	[
		'name' => 'получить разнообразную информацию о транспорте кислорода крови',
		'type' => 'module',
		'nameModule' => 'Tempolab',
	],
	[
		'name' => 'проанализировать деятельности сердечно-сосудистой системы',
		'type' => 'module',
		'nameModule' => 'Tempolab',
	],
	[
		'name' => 'изучить взаимосвязи с кроветворной, ферментативной и иммунной системами организма',
		'type' => 'module',
		'nameModule' => 'Tempolab',
	]
]
?>


@foreach($tempolab as $item)
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
	@slot('badge','Tempolab')
		{!!$li->name!!}
	@endcomponent


@endcomponent


	{{-- @component('zJJ.mod.Opportunities._wrap.index')	
		@slot('param', $param)
		@slot('css', $li->type ?? '')	
		@slot('param', $param ?? '')	
		@slot('i', $loop->iteration)


			@component('zJJ.mod.Opportunities._wrap.content')
			@slot('badge','Tempolab')
				{!!$li->name!!}
			@endcomponent

	@endcomponent --}}
@endforeach