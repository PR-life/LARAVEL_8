<link href="{{ mix($linkCssMin ?? '/css/min.css') }}" rel="stylesheet">
@if($preloadCss)
<link rel="preload" href="{{ mix($linkCssApp ?? '/css/app.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
@else
<link href="{{ mix($linkCssApp ?? '/css/app.css') }}" rel="stylesheet">
@endif

<link href="{{ mix('/css/solo/Start.css') }}" rel="stylesheet">

<noscript><link href="{{ mix($linkCssApp ?? '/css/app.css') }}" rel="stylesheet"></noscript>
@yield('linkCss')
@stack('linkCss')