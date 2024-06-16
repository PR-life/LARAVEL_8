<link href="{{ mix($linkCssMin ?? '/css/min.css') }}" rel="stylesheet" type="text/css">
{{-- <link href="{{ mix($linkCssApp ?? '/css/app.css') }}" rel="stylesheet" type="text/css"> --}}
@if($preloadCss)
<link rel="preload" href="{{ mix($linkCssApp ?? '/css/app.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
@else
<link href="{{ mix($linkCssApp ?? '/css/app.css') }}" rel="stylesheet">
@endif
<noscript><link rel="stylesheet" href="{{ mix($linkCssApp ?? '/css/app.css') }}"></noscript>
@yield('linkCss')
@stack('linkCss')