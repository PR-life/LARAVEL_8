@extends('zTHIS.zJs._shema.INDEX')

@push('js-bottom-link')
	<script src="{{ mix('/js/skill/Scroll.js') }}"></script>
	<script src="{{ mix('/js/skill/Scroll_active.js') }}"></script>
@endpush

@push('js-bottom-solo')
<script>

</script>
@endpush


@push('milk')
<div class="Fix [ padding top bottom ]" style="bottom: 0; left:50px">
	<nav class="JsScroll js_param-active">
		<ul>
			{{-- <li><a href="#Top">Top</a></li> --}}
			<li><a href="#b2">HTML2</a></li>
			<li><a href="#b3">CSS</a></li>
			<li><a href="#b4">JavaScript</a></li>
		</ul>
	</nav>
</div>

<style>
	.JsScroll a.active {
		color: red
	}
</style>
@endpush



@section('content')

 
<div class="Plot -h"></div>

<div class="Pente aura [ margin top ]">
	<section id="b2" class="Plot -h -mbl"><h2>HTML</h2></section>
	<section id="b3" class="Plot -h -mbl"><h2>CSS</h2></section>
	<section id="b4" class="Plot -h -mbl"><h2>JavaScript</h2></section>
</div>


<div class="Plot -h"></div>

@endsection