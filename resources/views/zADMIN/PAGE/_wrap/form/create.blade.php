<form class="Form -admin -create {{$css ?? ''}} / Bar -edgeLeft / index" method="POST" action="{{ $route }}" enctype="multipart/form-data">
	@csrf

	{{ $slot }}	
</form>	