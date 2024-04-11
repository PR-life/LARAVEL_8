<meta property="og:type" content="@yield('ogp_type', 'website')">
<meta property="og:title" content="@yield('ogp_title', Request::url())">
<meta property="og:description" content="@yield('ogp_description', 'website '. Request::url())">
<meta property="og:url" content="@yield('ogp_url', Request::url())">
<meta property="og:site_name" content="{{env('APP_NAME')}}">
<meta property="og:image" content="@yield('ogp_image', Request::root().'/images/ogp.jpg')">
<meta property="og:image:type" content="{{$ogp->imageType ?? 'image/jpg'}}">
<meta property="og:image:width" content="{{$ogp->imageWidth ?? '968'}}">
<meta property="og:image:height" content="{{$ogp->imageHeight ?? '504'}}"> 