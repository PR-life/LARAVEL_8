<div class="Teaser {{$Var->shema_teaser}} / Void -slim / space-hL Edge">
	@include('_Wrap.Teaser._lego.content',['Var' => $Var, 'routeName' => route($routeName, $Var->slug)])
	<div class="paragraph"></div>
	@include('_lego.computed.Paper.index')
	@if(isset($Var->answer))
		<div class="paragraph net"></div>
		<div class="Chat -hidden -entropy x-blue / Edge">
			@include('_._brick.A.index',['Var' => $Var->answer,'Var_user_name' => $Var->answer_user_name])
		</div>
	@endif  
</div>