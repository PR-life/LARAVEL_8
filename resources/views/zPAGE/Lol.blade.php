<!DOCTYPE html>
<html id="html" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('_schema._lego.head.index')
</head>
<body id="body" class="MXAT @yield('css-body') @stack('css-body')">
<script>
	@include('_.js.bodyStart')
	@stack('script-bodyStart')
</script>

@include('_schema._lego.input')

<div id="Fon" class="Abs -all index">@stack('fon')</div>


{{-- @include('_._skeleton.Top') --}}
{{-- @include('_._skeleton.header') --}}
{{-- @include('_._skeleton.menuMain') --}}

{{-- @yield('bread') --}}
{{-- @stack('bread') --}}

@component('_wrap.oiBar', ['id' => 'Wrap', 'css' => 'HWin'])
 

    <div class="Pente aura [ padding top bottom ]">
        <div class="text void / center-text">
            <div class="h1">Успешно)</div>
            <div class="inline">
                <a class="Btn cC" href="{{$param['from_page']}}">назад</a>
            </div>
        </div>
    </div>

@endcomponent


{{-- <div class="FixMenu -mbl / none_PC">
	@include('_._skeleton.menuMobile')
</div> --}}
{{-- @include('zImago._skeleton.menuBeyond') --}}

{{-- @include('_._skeleton.Slump') --}}
{{-- @include('_._skeleton.Geek') --}}

<div id="Milk" class="Abs Milk / index owlFIX">
	<!-- include('_.gaud.Error.index') -->
	<!-- include('_.module.Kontur.index') -->
	@stack('milk')
	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		@include('_.src.svg._def')
		@stack('svg')
	</svg>
</div>

@include('_._skeleton.bodyEnd')
<!-- <div id="Veil" data-click data-foo='click' data-goto></div> -->
@include('_schema._lego.afterMilk')

</body>
</html>
