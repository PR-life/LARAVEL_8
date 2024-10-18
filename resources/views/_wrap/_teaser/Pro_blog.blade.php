@switch($Var->schema_teaser ?? '')
	@case('service')
		@include('_lego.Teaser.vol.service')
		@break
	@default
		@include('_lego.Teaser.vol.def')
@endswitch