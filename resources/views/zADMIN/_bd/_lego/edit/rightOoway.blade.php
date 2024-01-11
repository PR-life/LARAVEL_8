<div class="flex dC / cross-xs / _order">
	@include('zADMIN._bd._lego.edit.wrap.label',['name'=>'order'])
	<div class="flex cI / Form -XS">
		<input id="order" class="Max -w -w1 / content-xxs" type="text" name="order" value="{{$Var->order}}">
		@error('order')
			<div class="Abs / Nameplate -rt">{{$message}}</div>
		@enderror
	</div>
</div>
<div class="flex dC / cross-xs / _status">
	@include('zADMIN._bd._lego.edit.wrap.label',['name'=>'status'])
	<div class="flex cI / Form -XS">
		<input id="status" class="Max -w -w1 / content-xxs" type="text" name="status" value="{{$Var->status}}">
	</div>
</div>
<div class="flex dC / cross-xs / _id">
	@include('zADMIN._bd._lego.edit.wrap.label',['id'=>'idItem','name'=>'id'])
	<div class="flex cI / Form -XS">
		<input id="idItem" class="Max -w -w1 / content-xxs" type="text" name="id" value="{{$Var->id}}">
	</div>
</div>