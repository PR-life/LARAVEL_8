<div class="item flex cI relative / {{$css ?? ''}} {{$Var->published == 1 ? 'published' : 'pause'}} {{$Var->mafia == 1 ? 'featured' : 'mafiaOff'}} {{$Var->featured == 1 ? 'featured' : ''}}">
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


	<div class="Abs -right -t">
		@include('zADMIN._brick.manager.ON')
	</div>
</div>