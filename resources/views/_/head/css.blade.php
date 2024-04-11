<link href="{{ mix($linkCssMin ?? '/css/min.css') }}" rel="stylesheet" type="text/css">
<link href="{{ mix($linkCssApp ?? '/css/app.css') }}" rel="stylesheet" type="text/css">
@yield('linkCss')
@stack('linkCss')