<?
	$css_11011546 = 'flex dC / cross-xs';
	$css_11011547 = 'flex cI / Form -XS';
	$css_11011548 = 'Max -w -w1 / Grey / content-xxs';
?>

<div class="{{$css_11011546}} / _order">
	@include('zADMIN._bd._lego.edit.wrap.label',['name'=>'order'])
	<div class="{{$css_11011547}}">
		<input id="order" class="{{$css_11011548}}" type="text" name="order" value="{{$Var->order}}">
		@error('order')
			<div class="Abs / Nameplate -rt">{{$message}}</div>
		@enderror
	</div>
</div>
<div class="{{$css_11011546}} / _status">
	@include('zADMIN._bd._lego.edit.wrap.label',['name'=>'status'])
	<div class="{{$css_11011547}}">
		<input id="status" class="{{$css_11011548}}" type="text" name="status" value="{{$Var->status}}">
	</div>
</div>
<div class="{{$css_11011546}} / _sku">
	@include('zADMIN._bd._lego.edit.wrap.label',['name'=>'sku'])
	<div class="{{$css_11011547}}">
		<input id="sku" class="{{$css_11011548}}" type="text" name="sku" value="{{$Var->sku}}" placeholder="-">
	</div>
</div>
<div class="{{$css_11011546}} / _id">
	@include('zADMIN._bd._lego.edit.wrap.label',['for'=>'idItem','name'=>'id'])
	<div class="{{$css_11011547}}">
		<input id="idItem" class="{{$css_11011548}}" type="text" name="id" value="{{$Var->id}}">
	</div>
</div>