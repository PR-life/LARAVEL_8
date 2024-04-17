<div class="paragraph x-11011809"></div>
@component('_lego.ADMIN.bar.preamble')
    @slot('ava', auth()->user()->avatar)
    {{auth()->user()->name}}
@endcomponent