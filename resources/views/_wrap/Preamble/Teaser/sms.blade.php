<div class="Preamble / face face-s face-out face-edge / Edge / var-3">

	<div class="author / flex cI / cross-xxs">
		<a class="b500 / nowrap" href="{{$link}}">
			{{$Var->name == 'без имени' ? 'аноним' : $Var->name}}
		</a>
		{{-- <span class="Grey">
			<span class="ghost">_</span>
			{{$Var->country}}
			@include('_.elem.dot')
			{{$Var->city}}
		</span> --}}

		
		<div class="content-xs / Grey" title="{{$Var->dateAsCarbon->translatedFormat('F')}} {{$Var->dateAsCarbon->day}}, {{$Var->dateAsCarbon->year}}">
			{{$Var->dateAsCarbon->diffForHumans()}}
		</div>
		
	</div>

    {{-- <div class="content-xs / Grey" title="{{$Var->dateAsCarbon->translatedFormat('F')}} {{$Var->dateAsCarbon->day}}, {{$Var->dateAsCarbon->year}}">
		{{$Var->dateAsCarbon->diffForHumans()}}
    </div> --}}
	
</div>