{{-- https://ogp.me/ --}}
<meta property="og:type" content="@yield('ogp_type', 'website')">
<meta property="og:title" content="@yield('ogp_title', Request::url())">
<meta property="og:description" content="@yield('ogp_description', 'website '. Request::url())">
<meta property="og:url" content="@yield('ogp_url', Request::url())">
<meta property="og:site_name" content="{{env('APP_NAME')}}">
<meta property="og:image" content="@yield('ogp_image', Request::root().'/images/ogp.jpg')">
<meta property="og:image:type" content="{{$ogp->imageType ?? 'image/jpg'}}">
<meta property="og:image:width" content="{{$ogp->imageWidth ?? '968'}}">
<meta property="og:image:height" content="{{$ogp->imageHeight ?? '504'}}"> 
{{-- <meta property="og:image:alt" content="The Open Graph logo"> --}}
{{-- <meta property="og:locale" content="en_GB" /> --}}
{{-- <meta property="og:locale:alternate" content="fr_FR" /> --}}
{{-- <meta property="og:locale:alternate" content="es_ES" /> --}}
@stack('meta')