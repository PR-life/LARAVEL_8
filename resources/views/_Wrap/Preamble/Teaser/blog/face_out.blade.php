<div class="Preamble / face face-out face-ghost face-edge / user-{{$Var->user->id}} {{$Var->css}}">
	<a class="author / flex / relative" href="{{$link}}">
		<span class="Abs -left -t / face-paddingImg">
			<img class="Ava" src="{{$Var->user->avatar ?? '/images-0/ava_face.png'}}" alt="автор материала: {{$Var->user->name}}">
		</span>
		<span class="b500 / nowrap">
			@isset($Var->demon_name)
				{{$Var->demon_name}}
			@else
				{{$Var->user->nickname ?? $Var->user->name}}
			@endisset
		</span>
		<span class="Grey">
			<span class="ghost">_</span>
			{{$Var->demon_par_2 ?? $Var->user->user_par_1}}
			@if(($Var->demon_par_2 || $Var->user->user_par_1) && ($Var->demon_par_1 || $Var->user->user_par_2))
				@include('_.elem.dot')
			@endif
			{{$Var->demon_par_1 ?? $Var->user->user_par_2}}
		</span>
	</a>
    <div class="content-xs / Grey" title="{{$Var->dateAsCarbon->translatedFormat('F')}} {{$Var->dateAsCarbon->day}}, {{$Var->dateAsCarbon->year}}">
		{{$Var->dateAsCarbon->diffForHumans()}}
    </div>
</div>