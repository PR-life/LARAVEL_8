<div class="Preamble / face face-out face-edge / Edge / var-3">

	<div class="author / flex">
		<span class="b500 / nowrap">
			{{$Var->name}}
		</span>
		<span class="Grey">
			<span class="ghost">_</span>
			{{$Var->country}}
			@include('_.elem.dot')
			{{$Var->city}}
		</span>
	</div>

    <div class="content-xs / Grey" title="{{$Var->dateAsCarbon->translatedFormat('F')}} {{$Var->dateAsCarbon->day}}, {{$Var->dateAsCarbon->year}}">
		{{$Var->dateAsCarbon->diffForHumans()}}
    </div>
	
</div>