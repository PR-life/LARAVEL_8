<div class="Preamble x-{{class_basename($Var)}} / face face-out face-ghost face-edge / user-{{$Var->user->id}} {{$Var->css}}">
	<a class="author / flex / relative" href="{{$Var->canonical ?? $link}}">
		<span class="Abs -left -t / face-paddingImg">
			<img class="Ava" src="{{$Var->user->avatar ?? '/images-0/ava/blank.png'}}" alt="автор материала: {{$Var->user->name}}">
		</span>
		<span class="b500 / nowrap">
			@isset($Var->demon_name)
				{{$Var->demon_name}}
			@else
				{{$Var->user->nickname ?? $Var->user->name}}
			@endisset
		</span>

		@if(class_basename($Var) != 'Service')
		<span class="Grey">
			<span class="ghost">_</span>
			{{$Var->demon_par_2 ?? $Var->user->user_par_1}}
			@if(($Var->demon_par_2 || $Var->user->user_par_1) && ($Var->demon_par_1 || $Var->user->user_par_2))
				@include('_.elem.dot')
			@endif
			{{$Var->demon_par_1 ?? $Var->user->user_par_2}}
		</span>
		@endif
	</a>
	@if(class_basename($Var) == 'Service')
    <div class="content-xs / Grey">
		{{$Var->user->user_par_1}}
    </div>
	@else
    <div class="content-xs / Grey" title="{{$Var->dateAsCarbon->translatedFormat('F')}} {{$Var->dateAsCarbon->day}}, {{$Var->dateAsCarbon->year}}">
		{{$Var->dateAsCarbon->diffForHumans()}}
    </div>
	@endif
</div>