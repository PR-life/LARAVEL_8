<div class="item flex cI relative / Soma / {{$Var->published == 1 ? 'published' : 'pause'}} {{$Var->mafia == 1 ? 'mafiaOn' : 'mafiaOff'}} {{$Var->featured == 1 ? 'featured' : ''}} {{'status-'.$Var->status}} {{$Var->shema_teaser}} {{$css ?? ''}}">
	<div class="table-wrap W-100">
		<div class="cell-1">
			{!!$slot!!}
		</div>
		{{-- <div class="cell-2 / none">
			{!!$cell_2 ?? ''!!}
		</div> --}}
		{{-- <div class="cell-3 / none">
			{!!$cell_3 ?? ''!!}
		</div> --}}
		{{-- <div class="cell-4 / none">
			{!!$cell_4 ?? ''!!}
		</div> --}}
	</div>


	<div class="Abs -right -t / _Axon">
		@include('zADMIN._brick.manager.on_teaser')
	</div>
</div>