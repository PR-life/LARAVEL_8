<div class="Teaser / Void -slim / space-hL Edge">

	<div class="_edge / Edge">
		@include('_Wrap.Preamble.Teaser.sms', ['Var' => $Var, 'link' => route($routeName, $Var->slug ?? $Var->id)])
	</div>

	<div class="paragraph-s"></div>
	<div class="Q -max content-l -lineHeight / {{$cssQ ?? ''}}">
		{!!\Illuminate\Support\Str::words(strip_tags($Var->sms), 100, $end="...")!!}
	</div>

	{{-- @include('_Wrap.Teaser._lego.content',['Var' => $Var, 'routeName' => route($routeName, $Var->slug)]) --}}
	<div class="paragraph"></div>
	{{-- @include('_lego.computed.Paper.index') --}}
	@if(isset($Var->answer))
		<div class="paragraph net"></div>
		<div class="Chat -hidden -entropy x-blue / Edge">
			@include('_._brick.A.index',['Var' => $Var->answer,'Var_user_name' => $Var->answer_user_name])
		</div>
	@endif  
</div>