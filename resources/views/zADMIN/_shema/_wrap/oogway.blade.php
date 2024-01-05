@extends('zADMIN._shema.index')

{{$push ?? ''}}
 

@prepend('addBread')
<li><a class="content-xs" href="{{route('admin.oogway.morda')}}">Oogway</a></li>
@endprepend

 
{!!$slot!!}