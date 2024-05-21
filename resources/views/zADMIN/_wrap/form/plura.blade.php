<form class="Form -admin -plura {{$css ?? ''}} / Bar -edgeLeft / index" method="POST" action="{{ $route }}" enctype="multipart/form-data">
	@csrf
	@method('PATCH')
	{{ $slot }}	
</form>	