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
 
<div class="Pente aura / margin top">
	<button id="worker" class="Btn">button</button>
	<div id="workerDiv" class="content"></div>
</div>


<script>
	document.getElementById('worker').onclick = function(){

		let worker = new Worker('/js/Workers/w1.js');
		
		worker.postMessage('PARAM');
		worker.onmessage = function(event){ // event в виде объекта
			console.log(event.data);
		}


		let div = document.getElementById('workerDiv');
		div.innerHTML = 'нажал / результат работы Workers см. в консоли';
	}
</script>


@endsection