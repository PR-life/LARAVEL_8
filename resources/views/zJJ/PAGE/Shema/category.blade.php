@extends('zJJ._shema.Category')
{{-- @extends('zLara._shema.category', ['Var' => ['zCategoryName' => 'zCategoryName']]) --}}


 

@push('style')
#body {
    background-color: #f4f6f8;
  }
@endpush



@section('content')
    <div class="I aura [ margin top ]">


<div class="flex"> 
@component('_wrap.preview.folder.tildaVideo')
    @slot('link','#')
    @slot('tag','tag')
    @slot('description','description')
    @slot('name','Name <br> Name')
@endcomponent
</div>   

 

    </div>
@endsection