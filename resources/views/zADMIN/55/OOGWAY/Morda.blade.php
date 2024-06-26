@extends('zADMIN._schema.oogway')

@section('title')Oogway @endsection

 
@push('bee')

@component('zADMIN.mod.Name.oogway')@endcomponent




@endpush


 
 
 
@section('content')

@component('zADMIN._wrap.index')
     
<div class="inline">
    <a class="Btn cC" href="{{route('admin.oogway.manager.index')}}">манеджер веток</a>
</div>


<div class="paragraphX2"></div>
 
<div class="h2">Задачи</div>
<div class="paragraph"></div>
<div class="inline">
    <a class="Btn cC" href="{{route('admin.oogway.task.index')}}">список</a>
</div>



@endcomponent


 
@endsection
