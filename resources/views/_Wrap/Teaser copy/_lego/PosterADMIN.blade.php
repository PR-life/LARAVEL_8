<a class="Edge block highlight" href="{{route($Route,$Var['slug'])}}">
	{{-- @if (isset($Var->prev_h1)) --}}
	<div class="block _edge-s">
		<div class="inline relative x-img">
			{{-- @if ($Var->prev_image == '') --}}
				<img  src="data:image/gif;base64,R0lGODlhEAAJAIAAAP///wAAACH5BAEAAAEALAAAAAAQAAkAAAIKjI+py+0Po5yUFQA7" width="560" height="315">
			{{-- @endif --}}
			<div class="Poster -center index">
				<div class="Abs -all Bg -fon / round"></div>
				<div class="_body Font / _indexMax">
					<div class="_h2 -vw / b600 center-text">{!!$Var->prev_h1 ?? 'prev_h1'!!}</div>
					<div class="paragraph"></div>
					<div class="_p p center-text">{{$Var->prev_h2 ?? 'prev_h2'}}</div>
				</div>			
			</div>
		</div>
	</div>
	{{-- @endif --}}
	<div class="paragraph-s"></div>
	@if (isset($Var->text))
	<div class="_edge content">
		{!!$Var->text!!}
	</div>
	@endif
</a>