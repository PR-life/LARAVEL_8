{{-- <div class="Preamble / Edge / user-{{$Var->user->id}} {{$Var->css}}"> --}}
<div class="Preamble / face -ghost face-out face-edge / Edge / user-{{$Var->user->id}} {{$Var->css}}">

	<a class="author / flex / relative" href="{{$routeName}}">
		<span class="Abs -left -t / face-paddingImg">
			<img class="Ava" src="{{$Var->user->avatar ?? '/images-0/ava_face.png'}}" alt="автор материала: {{$Var->user->name}}">
		</span>
		<span class="b500 / nowrap">
			{{-- {{$Var->category->id}} --}}
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

{{-- 
<div class="Preamble face face-top face-out face-edge / Edge var-{{$Var->user->id}}">
	<div class="_1">
		<div class="flex">
			<div class="content nowrap" >
 
					<span class="b500">
						@isset($Var->demon_name)
							{{$Var->demon_name}}
						@else
							{{$Var->user->nickname ?? $Var->user->name}}
						@endisset
					</span>
 
			</div>
			<div>
				<div class="content Ellipsis Grey">
					<span class="content Op">_</span>

					@isset($Var->demon_par_2)
						{{$Var->demon_par_2}}
					@else
						@isset($Var->user->user_par_1)
							{{$Var->user->user_par_1}}
						@endisset
					@endisset

 
				
					@isset($Var->demon_par_1)
						{{$Var->demon_par_1}}
					@else
						@isset($Var->user_par_1)
							{{$Var->user->user_par_1}}
						@endisset
					@endisset

				</div>
			</div>
		</div>
	</div>
    <div class="_2 __mt content Grey" title="{{$Var->dateAsCarbon->translatedFormat('F')}} {{$Var->dateAsCarbon->day}}, {{$Var->dateAsCarbon->year}}">
		{{$Var->dateAsCarbon->diffForHumans()}}
    </div>
</div> --}}