{{-- @include('ADMIN.Bd.edit._brick.wrap.index', ['label' => 'mafia', 'var' => $Var->mafia == 1])
@include('ADMIN.Bd.edit._brick.wrap.index', ['label' => 'featured', 'textLabel' => $textFeatured ?? 'featured', 'var' => $Var->featured == 1])
@include('ADMIN.Bd.edit._brick.wrap.index', ['label' => 'published', 'var' => $Var->published == 0, 'cssCheckbox' => isset($reversePublished) ? '-reverse' : ''])
 --}}

 <div class="flex cI / cross-xs / _order">
	<label class="content-xs" for="order">order</label>
	<div class="flex cI / Form -S">
		<input id="order" class="Max -w -w1 / @error('order') -invalid @enderror" type="text" name="order" placeholder="-" value="50">
	</div>
</div>