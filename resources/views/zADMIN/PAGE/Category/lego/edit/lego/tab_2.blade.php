@component('zADMIN.PAGE._wrap.form._shell.x_hr')
    @slot('cssNet', true)
    @slot('nameId','Prev_h1')
    @slot('name','prev_h1')
    {{$category->prev_h1 ?? old('prev_h1')}}
@endcomponent

@component('zADMIN.PAGE._wrap.form._shell.x_hr')
    {{-- @slot('cssNet', true) --}}
    @slot('nameId','Prev_h2')
    @slot('name','prev_h2')
    {{$category->prev_h2 ?? old('prev_h2')}}
@endcomponent

@component('zADMIN.PAGE._wrap.form._shell.x_hr')
{{-- @slot('cssNet', true) --}}
@slot('nameId','Prev_p')
@slot('name','prev_p')
{{$category->prev_p ?? old('prev_p')}}
@endcomponent

@component('zADMIN.PAGE._wrap.form._shell.x_hr')
    {{-- @slot('cssNet', true) --}}
    @slot('nameId','Prev_url')
    @slot('name','prev_url')
    {{$category->prev_url ?? old('prev_url')}}
@endcomponent