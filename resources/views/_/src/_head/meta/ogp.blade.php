{{-- https://ogp.me/ --}}
<meta property="og:type" content="{{$ogp->type ?? 'website'}}">
<meta property="og:title" content="{{$ogp->title ?? Request::url()}}">
<meta property="og:description" content="{{$ogp->description ?? 'website '.Request::url()}}">
<meta property="og:url" content="{{$ogp->url ?? Request::url()}}">
@isset($ogp->site_name)
<meta property="og:site_name" content="{{$ogp->site_name}}">
@endisset
<meta property="og:image" content="{{$ogp->image ?? Request::root().'/images/ogp.jpg'}}">
<meta property="og:image:type" content="{{$ogp->imageType ?? 'image/jpg'}}">
<meta property="og:image:width" content="{{$ogp->imageWidth ?? '968'}}">
<meta property="og:image:height" content="{{$ogp->imageHeight ?? '504'}}">
{{-- <meta property="og:image:alt" content="The Open Graph logo"> --}}

{{-- <meta property="og:locale" content="en_GB" /> --}}
{{-- <meta property="og:locale:alternate" content="fr_FR" /> --}}
{{-- <meta property="og:locale:alternate" content="es_ES" /> --}}

