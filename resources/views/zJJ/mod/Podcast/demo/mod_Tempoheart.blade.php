<?php 
$tempoheart = [
	[
		'name' => 'оценить вегетативную регуляцию сердечного ритма',
		'type' => 'module',
		'nameModule' => 'Tempoheart',
	],
	[
		'name' => 'заблаговременно предупредить об опасности развития инфаркта миокарда, гипертонических кризов, инсультов и др. сердечно-сосудистых заболеваний',
		'type' => 'module',
		'nameModule' => 'Tempoheart',
	],
	[
		'name' => 'выявить риск метаболических, электролитных нарушений в миокарде',
		'type' => 'module',
		'nameModule' => 'Tempoheart',
	],
	[
		'name' => 'выявить группы риска по развитию нездоровой стабильности сердечного ритма',
		'type' => 'module',
		'nameModule' => 'Tempoheart',
	],
	[
		'name' => 'дать объективную оценку реакции вегетативной нервной системы при воздействии на организм электромагнитных полей, интоксикаций и других патогенных факторов',
		'type' => 'module',
		'nameModule' => 'Tempoheart',
	],
	[
		'name' => 'оценить активность дыхательного компонента при измерении изменчивости сердечного ритма, регистрируя параметры движения крови в сосудах',
		'type' => 'module',
		'nameModule' => 'Tempoheart',
	],
	[
		'name' => 'выявить уровень стрессоустойчивости',
		'type' => 'module',
		'nameModule' => 'Tempoheart',
	],
	[
		'name' => 'рассчитать индекс энергетического баланса (полноценность обмена веществ)',
		'type' => 'module',
		'nameModule' => 'Tempoheart',
	],
	[
		'name' => 'оценить степень выносливости сердечно-сосудистой системы к физическим нагрузкам',
		'type' => 'module',
		'nameModule' => 'Tempoheart',
	]
]
?>




@foreach($tempoheart as $item)
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
		@slot('badge','Tempoheart')
			{!!$li->name!!}
		@endcomponent


	@endcomponent


@endforeach