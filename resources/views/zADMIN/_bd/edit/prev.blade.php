@component('zADMIN.PAGE._wrap.Lang.index', ['css' => 'net'])
<div class="_shell vol-Abs / Form -S / x-hr">
	<input id="prev_h1" type="text" name="prev_h1" placeholder="prev_h1" value="{{isset($Var->prev_h1) ? $Var->prev_h1 : old('prev_h1')}}">
	<label class="Abs" for="prev_h1">@svg('plus')prev_h1</label>
</div>
<div class="_shell vol-Abs / Form -S / x-hr / _open">
	<input id="prev_h1_en" type="text" name="prev_h1_en" placeholder="prev_h1_en" value="{{isset($Var->prev_h1_en) ? $Var->prev_h1_en : old('prev_h1_en')}}">
	<label class="Abs" for="prev_h1_en">@svg('plus')prev_h1_en</label>
</div>
@endcomponent
@component('zADMIN.PAGE._wrap.Lang.index')
<div class="_shell vol-Abs / Form -S / x-hr">
	<input id="prev_h2" type="text" name="prev_h2" placeholder="prev_h2" value="{{isset($Var->prev_h2) ? $Var->prev_h2 : old('prev_h2')}}">
	<label class="Abs" for="prev_h2">@svg('plus')prev_h2</label>
</div>
<div class="_shell vol-Abs / Form -S / x-hr / _open">
	<input id="prev_h2_en" type="text" name="prev_h2_en" placeholder="prev_h2_en" value="{{isset($Var->prev_h2_en) ? $Var->prev_h2_en : old('prev_h2_en')}}">
	<label class="Abs" for="prev_h2_en">@svg('plus')prev_h2_en</label>
</div>
@endcomponent
@component('zADMIN.PAGE._wrap.Lang.index')
<div class="_shell">
	<textarea name="prev_p" placeholder="prev_p">{{isset($Var->prev_p) ? $Var->prev_p : old('prev_p')}}</textarea>
</div>
<div class="_shell / _open">
	<textarea name="prev_p_en" placeholder="prev_p_en">{{isset($Var->prev_p_en) ? $Var->prev_p_en : old('prev_p_en')}}</textarea>
</div>
@endcomponent


{{-- <div class="_shell">
	<textarea name="prev_p" placeholder="prev_p">{{isset($Var->prev_p) ? $Var->prev_p : old('prev_p')}}</textarea>
</div> --}}

{{-- <div style="padding-left: 4rem">
	<div class="inline">
		<div class="Badge">
			<div class="b600 net">превью</div>
		</div>
	</div>
	<div class="paragraphX2"></div>
	<div class="Blog aura / Loki">
		<div class="_edge / Edge / inline">
			@include('_pattern.Preamble.Teaser.news', ['Var' => $Var])
		</div>
		@if ($Var->shema == 'news')
			@include('_pattern.Teaser._lego.PosterADMIN', ['Var' => $Var,'Route' => 'imago.morda'])
		@else
			<div class="Info content -ico -center -space">
				Изменить макет можно во вкладке "Settings"
			</div>
			<div class="h2 center-text">параметры "редакция Тизер" доступны для макета NEWS</div>
		@endif
	</div>
</div> --}}
