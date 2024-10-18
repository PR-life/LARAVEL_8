<div class="edge-leftS / Edge">
	@include('_wrap.Preamble.Teaser.blog.face_out', ['Var' => $Var, 'link' => $routeName])
</div>
<div class="x-wrap--a relative">
	@if ($Var->schema_teaser == 'poster')
		<div class="paragraph"></div>
		@include('_wrap._teaser._brick.descriptionMin', ['Var' => $Var, 'link' => $routeName])
		<div class="paragraph"></div>
		@include('_wrap.Poster.paper', ['Var' => $Var, 'link' => $routeName])
	@elseif ($Var->schema_teaser == 'yota')
		<div class="paragraph"></div>
		@include('_wrap.Poster.yota', ['Var' => $Var, 'link' => $routeName, 'Veil' => $Var->prev_veil, 'image' =>$Var->image ? '/storage/paper_images/teaser/'.$Var->image : null])
		<div class="paragraph"></div>
		@include('_wrap._teaser._brick.descriptionMin', ['Var' => $Var, 'link' => $routeName])
	@else
		@include('_wrap._teaser._brick.description', ['Var' => $Var, 'link' => $routeName])
	@endif
	
	@if ($Var->schema_teaser == 'default' && isset($Var->image))
		<div class="paragraph"></div>
		<div class="edge-s">
			<img src="/storage/paper_images/teaser/{{$Var->image}}" alt="">
		</div>
	@endif
</div>

{{-- @if (($Var->schema_teaser == 'default') && !$Var->url_video) --}}
{{-- @include('_pattern.Teaser._lego.prev_image', ['VarRoute' => $routeName]) --}}
{{-- @include('_pattern.Teaser._lego.video') --}}