<option selected value> -- тег не установлен -- </option>
@foreach($Tags as $_tag)
	<option class="x-{{$_tag->id}}" value="{{$_tag->id}}"{{ $Var == $_tag->id ? ' selected' : ''}}{{$_tag->id == old('tag_id') ? ' selected' : ''}}>{{$_tag->name}}</option>
@endforeach