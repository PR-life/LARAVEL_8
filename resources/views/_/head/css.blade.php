<link href="{{ mix($linkCssMin ?? '/css/min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ mix($linkCssApp ?? '/css/app.css') }}" rel="stylesheet" type="text/css">
{{-- <link rel="preload" href="{{ mix($linkCssApp ?? '/css/app.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript>
    <link href="{{ mix($linkCssApp ?? '/css/app.css') }}" rel="stylesheet" type="text/css">
</noscript> --}}

@yield('linkCss')
@stack('linkCss')