<div class="Teaser vol-{{$Var->schema_teaser}} / Void / space-hL Edge">


	@switch($Var->schema_teaser ?? '')
		@case('service')
			<div class="edge-s">
				@include('_wrap._teaser._lego.service',['Var' => $Var, 'link' => route($routeName, $Var->slug)])
			</div>
			@break
		@default
			@include('_wrap._teaser._lego.content',['Var' => $Var, 'routeName' => route($routeName, $Var->slug)])
	@endswitch

	<div class="paragraph"></div>
	@include('_lego.computed.Paper.index')


	@if(isset($Var->answer))
		<div class="paragraph net"></div>
		<div class="Chat -hidden -entropy x-blue / Edge">
			@include('_._brick.A.index',['Var' => $Var->answer,'Var_user_name' => $Var->answer_user_name])
		</div>
	@endif  


</div>