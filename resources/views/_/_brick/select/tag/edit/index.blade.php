@foreach($Tags as $tag)
	<option value="{{$tag->id}}" 
		{{ $Var ==  $tag->id ? ' selected' : ''}}
		{{$tag->id == old('tag_id') ? ' selected' : ''}}

		>{{$tag->name}}</option>
	{{-- <option value="{{$tag->id}}"{{ is_array($arr) && in_array($tag->id, $arr) ? ' selected' : ''}}{{$tag->id == old('tag_id') ? ' selected' : ''}}>{{$tag->name}}</option> --}}
@endforeach