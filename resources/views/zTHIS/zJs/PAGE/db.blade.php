@extends('zTHIS.zJs._shema.INDEX')

@push('js-bottom-link')
	{{-- <script src="{{ mix('js/_data/localStorage/index.js') }}"></script> --}}
	{{-- <script src="{{ mix('js/_data/indexedDB/index.js') }}"></script> --}}
@endpush

@push('js-bottom-solo')
{{-- Библиотека Anime --}}
<script>
 
</script>
 

@endpush


@push('milk')
 
@endpush



@section('content')

<div class="Space -v">
	<h1>перенс просто как было, нужно разбираться с нуля</h1>
	<div class="Pente aura [ margin top S ]">
		<div>
			<h4>varDB</h4>
			<script>
				let isDB = false;
				let db;
				window.addEventListener('load', function(){
					if('indexedDB' in window)
						isDB = true
				}, false);
			</script>
		</div>
	</div>



	<div id="localStorage" class="Pente aura [ margin top bottom ]"> 

		<div class="flex">
			<a class="Btn cC / add">
				add
			</a>
			<a class="Btn cC / remove">
				delete
			</a>
			<a class="Btn cC / get">
				get
			</a>
		</div>
		
		<ul class="show">
			<li>_</li>
		</ul>
	
	</div>

</div>
 



@endsection