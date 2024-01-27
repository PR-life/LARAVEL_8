@extends('UTIN._shema.index')

@include('_.src.link.css.Utin')
{{-- 
@include('zDT.src.css.rolling-text')
@push('js-bottom-solo')
    @include('zDT.src.script.rolling-text')
@endpush
@push('css-body','shema-morda')
@section('top')@endsection  --}}


@section('content')
<div class="paragraph"></div>
<div class="Box aura void / Edge -SPC edge-s">


 

    @include('UTIN._lego.intro',['css' => '-Black Black -bg / space-m'])


 
    @include('UTIN._lego.plot_1')
    @include('UTIN._lego.plot_2')
    @include('UTIN._lego.page_tools',['css' => '-Black Black -bg / space-m'])


    @include('UTIN._lego.plot_TV',['css' => '-Black Black -bg / space-m'])
    @include('UTIN._lego.plot_SMI',['css' => '-Black Black -bg / space-m'])
    @include('UTIN._lego.plot_Radio',['css' => '-Black Black -bg / space-m'])
    @include('UTIN._lego.plot_ContentMarket',['css' => '-Black Black -bg / space-m'])
    @include('UTIN._lego.plot_Blogger',['css' => '-Black Black -bg / space-m'])
    @include('UTIN._lego.plot_Conferences',['css' => '-Black Black -bg / space-m'])
    
 
 
 
    
</div>
 
 

<div class="Plot">

</div>
 

@endsection
