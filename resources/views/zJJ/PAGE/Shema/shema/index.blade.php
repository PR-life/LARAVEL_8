@extends('zJJ._shema.aside')

@push('basement')

    @component('zJJ.PAGE.Shema.Tool')
    <div class="inline">
        @stack('Tool_wings')
        @include('zJJ.PAGE.Shema.mod.menu.manager')
    </div>
    <div class="paragraphX2"></div>
    @endcomponent

@endpush