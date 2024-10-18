@component('_wrap._teaser.blog')
	@slot('schema',$Var->schema_teaser)

	{{-- @include('_wrap._teaser._lego.service',['Var' => $Var, 'link' => route($routeName, $Var->slug)]) --}}



	<a class="flex cI_PC bC dC_mbl cC_mbl cross / Tile -PC / space space-leftL_PC / highlight" href="{{$Var->canonical ?? route($routeName, $Var->slug)}}">
		<div class="h -lineHeight / nowrap / Min -w4 / Ellipsis">{!!$Var->name_tag ?? $Var->prev_h1 ?? $Var->name!!}</div>
		@if(isset($Var->price))
		<div class="nowrap content-m">{{$Var->price}} руб.</div>
		@endif


		{{-- @if(isset($Var->text))
			<div class="Ellipsis line-1 / content-m -lineHeight">
				{!!\Illuminate\Support\Str::words(strip_tags($Var->text), 10, $end="...")!!}
			</div>
		@elseif(isset($Var->article))
			<div class="Ellipsis line-1 / content-m -lineHeight">
				{!!\Illuminate\Support\Str::words(strip_tags($Var->article), 10, $end="...")!!}
			</div>
		@endif --}}
	</a>
@endcomponent