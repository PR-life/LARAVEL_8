@if (isset($Var->url_video))
	<div class="paragraph"></div>
	<video preload="none" poster="/video{{$Var->url_video}}.jpg" muted controls>
		<source src="/video{{$Var->url_video}}.mp4">
	</video>

	{{-- @component('_pattern.Teaser.component.description', ['Var' => $Var, , 'VarRoute' => $routeName, 'class_h' => 'hMin b600'])
		{!!\Illuminate\Support\Str::words(strip_tags($Var->text), 20, $end="...")!!}
	@endcomponent --}}

@endif