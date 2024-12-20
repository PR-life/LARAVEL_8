@component('_wrap._teaser.blog')
	@slot('schema',$Var->schema_teaser)
	@slot('css', 'space-hL')

	@include('_wrap._teaser._lego.content',['Var' => $Var, 'routeName' => $Var->canonical ?? route($routeName, $Var->slug)])
	<div class="paragraph"></div>
	@include('_lego.computed.Paper.index')
	@if(isset($Var->answer))
		<div class="paragraph net"></div>
		<div class="Chat -hidden -entropy x-blue / Edge">
			@include('_._brick.A.index',['Var' => $Var->answer,'Var_user_name' => $Var->answer_user_name])
		</div>
	@endif  
@endcomponent


 