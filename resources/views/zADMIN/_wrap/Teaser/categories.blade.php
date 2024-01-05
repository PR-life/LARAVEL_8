<div class="item flex cI relative / {{$css ?? ''}} {{count($Var->childrenCategories) > 0 ? '-parent' : ''}} {{$Var->published == 1 ? 'published' : 'pause'}} {{$Var->mafia == 1 ? 'mafiaOn' : 'mafiaOff'}}">
	<div class="table-wrap W-100">
		<div class="cell-1">
			{!!$slot!!}
		</div>
		<div class="cell-2 / none">
			{!!$cell_2 ?? ''!!}
		</div>
		<div class="cell-3 / none">
			{!!$cell_3 ?? ''!!}
		</div>
		<div class="cell-4 / none">
			{!!$cell_4 ?? ''!!}
		</div>
	</div>
</div>



{{-- <div class="item / flex dC cC / relative index / {{$css ?? ''}} {{$Var->published == 1 ? 'published' : 'pause'}} {{$Var->mafia == 1 ? 'mafiaOn' : 'mafiaOff'}}">
	<div class="table-wrap / flex bC cI">
		<div class="col-1 / flex cross-s">
			{!!$slot!!}
		</div>
		<div class="col-2 / flex cross-s / x-relations">
			{!!$relations ?? ''!!}
		</div>
		<div class="col-3 / flex cross-s / x-seo / none">
			{!!$seo ?? ''!!}
		</div>
		<div class="col-4 / flex cross-s / x-param / none">
			{!!$param ?? ''!!}
		</div>
	</div>
	<div class="Abs -rb / _indexMax">
		@include('zADMIN._brick.manager.basket', ['Var' => $Var, 'slug' => $slug])
	</div>
</div> --}}