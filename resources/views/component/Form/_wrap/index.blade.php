<form id="form_{{$id}}" class="{{$css ?? ''}}" method="POST" action="{{$route}}" enctype="multipart/form-data">
	@csrf
	<input id="inputTitle_{{$id}}" class="none" type="text" name="title" value="." placeholder='.'>
	<input id="inputFromPage_{{$id}}" class="none" type="text" name="from_page" value="{{url()->current()}}" placeholder='.'>
	<input id="inputType_{{$id}}" class="none" type="text" name="type" value="{{$type ?? 'lead'}}">
	<input id="inputLabel_{{$id}}" class="none" type="text" name="label" value="{{$label ?? 'email'}}">
    {!!$slot!!}
</form>