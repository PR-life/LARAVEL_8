<div class="_edge / Edge">
	@include('_pattern.Preamble.Teaser.news', ['Var' => $Var, 'VarRoute' => $routeName])
</div>
@if ($Var->shema_teaser == 'news')
	<div class="paragraph"></div>
	@include('_pattern.Teaser._lego.Poster', ['Var' => $Var, 'VarRoute' => $routeName])
@endif


@if (($Var->shema_teaser == 'default'))
{{-- @if (($Var->shema_teaser == 'default') && !$Var->url_video) --}}
	@include('_pattern.Teaser.component.description', ['Var' => $Var, 'VarRoute' => $routeName])
@endif

@include('_pattern.Teaser._lego.prev_image', ['VarRoute' => $routeName])
@include('_pattern.Teaser._lego.video')