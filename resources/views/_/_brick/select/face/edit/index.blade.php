@foreach($Faces as $_face)
	<option value="{{$_face->id}}"{{ $_face->id ==  $Var->face_id ? ' selected' : ''}}{{$_face->id == old('face_id') ? ' selected' : ''}}>{{$_face->surname}} {{$_face->name}} {{$_face->patronymic}}</option>
@endforeach
