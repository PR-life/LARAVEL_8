@component('zADMIN.PAGE._wrap.form._shell.x_hr')
    @slot('cssNet', true)
    @slot('nameId','Name_tag')
    @slot('name','name_tag')
    {{$category->name_tag ?? old('name_tag')}}
@endcomponent
@component('zADMIN.PAGE._wrap.form._shell.x_hr')
    {{-- @slot('cssNet', true) --}}
    @slot('nameId','Name_seo')
    @slot('name','name_seo')
    {{$category->name_seo ?? old('name_seo')}}
@endcomponent
 

{{-- @component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'prev_nameSeoCategory'])

@endcomponent --}}