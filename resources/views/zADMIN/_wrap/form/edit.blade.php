<div class="Bee"></div>
<form class="Form -admin -edit {{$css ?? ''}} / Bar -edgeLeft / index" method="POST" action="{{ $route }}" enctype="multipart/form-data">
	@csrf
	@method('PATCH')
	{{ $slot }}	
</form>	