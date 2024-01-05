<form class="{{$css ?? ''}}" method="POST" action="{{ $route }}" enctype="multipart/form-data">
	@csrf
	@method('PATCH')
	{{ $slot }}	
</form>	