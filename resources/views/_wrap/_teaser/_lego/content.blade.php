<div class="edge-leftS / Edge">
	@include('_wrap.Preamble.Teaser.blog.face_out', ['Var' => $Var, 'link' => $routeName])
</div>
@if ($Var->shema_teaser == 'poster')
	<div class="paragraph"></div>
	@include('_wrap._teaser._brick.descriptionMin', ['Var' => $Var, 'link' => $routeName])
	<div class="paragraph"></div>
	@include('_wrap.Poster.paper', ['Var' => $Var, 'link' => $routeName])
@elseif ($Var->shema_teaser == 'yota')
	<div class="paragraph"></div>
	@include('_Wrap.Poster.yota', ['Var' => $Var, 'link' => $routeName])
	<div class="paragraph"></div>
	@include('_wrap._teaser._brick.descriptionMin', ['Var' => $Var, 'link' => $routeName])
@else
	@include('_wrap._teaser._brick.description', ['Var' => $Var, 'link' => $routeName])
@endif

{{-- @if (($Var->shema_teaser == 'default') && !$Var->url_video) --}}
{{-- @include('_pattern.Teaser._lego.prev_image', ['VarRoute' => $routeName]) --}}
{{-- @include('_pattern.Teaser._lego.video') --}}