
<div class="flex">
    <div class="_l / Font -L / Min -w3 / space">
        <div class="_h -vw b600 / Grey -c30">og:</div>
    </div>
    <div class="_r / void-m / W-100">
        <div class="_shell x-hr Form -S / vol-Abs">
            <input id="inputOgp_title" type="text" name="ogp_title" value="{{$Var->ogp_title ?? old('ogp_title')}}" placeholder=".">
            <label class="Abs" for="inputOgp_title">@svg('plus')title</label>
        </div>
        <div class="_shell">
            {{-- <label class="content-xs pl-2" style="color: #677788">description</label> --}}
            {{-- <div class="paragraph-s"></div> --}}
            <textarea class="space-s / round" name="ogp_description" placeholder='description...'>{{$Var->ogp_description ?? old('ogp_description')}}</textarea>
        </div>
        <div class="_shell x-hr Form -S / vol-Abs">
            <input id="inputOgp_type" type="text" name="ogp_type" value="{{$Var->ogp_type ?? old('ogp_type')}}" placeholder=".">
            <label class="Abs" for="inputOgp_type">@svg('plus')type</label>
        </div>
        {{-- ogp_image --}}
    </div>
</div>

 

{{-- <meta property="og:type" content="{{$ogp->type ?? 'website'}}">
<meta property="og:title" content="{{$ogp->title ?? Request::url()}}">
<meta property="og:description" content="{{$ogp->description ?? 'website '.Request::url()}}">
<meta property="og:url" content="{{$ogp->url ?? Request::url()}}">
@isset($ogp->site_name)
<meta property="og:site_name" content="{{$ogp->site_name}}">
@endisset --}}

{{-- <meta property="og:image" content="{{$ogp->image ?? Request::root().'/images/ogp.jpg'}}"> --}}
{{-- <meta property="og:image:type" content="{{$ogp->imageType ?? 'image/jpg'}}"> --}}
{{-- <meta property="og:image:width" content="{{$ogp->imageWidth ?? '968'}}"> --}}
{{-- <meta property="og:image:height" content="{{$ogp->imageHeight ?? '504'}}">
 --}}
{{-- <meta property="og:image:alt" content="The Open Graph logo"> --}}