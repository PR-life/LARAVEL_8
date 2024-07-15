@extends('zADMIN._schema.INDEX_')

{{$push ?? ''}}
 

@prepend('addBread')
<li><a class="content-xs" href="{{route('admin.oogway.morda')}}">Oogway</a></li>
@endprepend

 
{!!$slot!!}