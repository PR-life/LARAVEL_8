<div class="flex dC / cross-xs / _order">
	<label class="content-xs / pl-1" for="order">order</label>
	<div class="flex cI / Form -XS">
		<input id="order" class="Max -w -w1 / content-xxs" type="text" name="order" value="{{$Var->order}}">
		@error('order')
			<div class="Abs / Nameplate -rt">{{$message}}</div>
		@enderror
	</div>
</div>
<div class="flex dC / cross-xs / _status">
	<label class="content-xxs / pl-1" for="status">status</label>
	<div class="flex cI / Form -XS">
		<input class="Max -w -w1 / content-xxs" type="text" value="{{$Var->status}}">
	</div>
</div>
<div class="flex dC / cross-xs / _id">
	<label class="content-xxs / pl-1" for="idItem">id</label>
	<div class="flex cI / Form -XS">
		<input id="idItem" class="Max -w -w1 / content-xxs" type="text" name="id" value="{{$Var->id}}">
	</div>
</div>