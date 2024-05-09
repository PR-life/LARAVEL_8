<link href="{{ mix($linkCssMin ?? '/css/min.css') }}" rel="stylesheet" type="text/css">
{{-- <link href="{{ mix($linkCssApp ?? '/css/app.css') }}" rel="stylesheet" type="text/css"> --}}
<link rel="{{$preloadCss ?? 'preload'}}" href="{{ mix($linkCssApp ?? '/css/app.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="{{ mix($linkCssApp ?? '/css/app.css') }}"></noscript>
@yield('linkCss')
@stack('linkCss')