@extends('UTIN._shema.index')

@include('_.src.link.css.Utin')
{{-- 
@include('zDT.src.css.rolling-text')
@push('js-bottom-solo')
    @include('zDT.src.script.rolling-text')
@endpush
@push('css-body','shema-morda')
@section('top')@endsection  --}}




{{-- примеры
https://ya.ru/search/?text=+%D0%BA%D0%BE%D0%BC%D0%BF%D0%B0%D0%BD%D0%B8%D0%B8+%C2%AB%D0%93%D1%80%D1%83%D0%B7%D0%BE%D0%B2%D0%B0%D1%8F+%D0%BC%D0%B5%D1%85%D0%B0%D0%BD%D0%B8%D0%BA%D0%B0%C2%BB&lr=213&search_source=yaru_desktop_common&search_domain=yaru --}}



{{-- цены
https://9writer.ru/ceny --}}


@section('content')
<div class="paragraph"></div>
<div class="Box aura void / Edge -SPC edge-s">

    <div class="Bee"></div>
 

    @include('zUTIN._lego.intro',['css' => '-Black Black -bg / space-m'])

    @include('zUTIN._lego.HB')
 
    @include('zUTIN._lego.plot_1')
 
    @include('zUTIN._lego.page_tools',['css' => '-Black Black -bg / space-m_PC'])
    @include('zUTIN._lego.plot_2')
    
    @include('zUTIN._lego.tezis',['css' => '-Black Black -bg / space-m_PC'])

    @include('zUTIN._lego.plot_TV',['css' => '-Black Black -bg / space-m_PC'])
    @include('zUTIN._lego.plot_SMI',['css' => '-Black Black -bg / space-m_PC'])
    @include('zUTIN._lego.plot_Radio',['css' => '-Black Black -bg / space-m_PC'])


    @include('zUTIN._lego.plot_ContentMarket',['css' => '-Black Black -bg / space-m_PC'])
    @include('zUTIN._lego.plot_Blogger',['css' => '-Black Black -bg / space-m_PC'])
    @include('zUTIN._lego.plot_Conferences',['css' => '-Black Black -bg / space-m_PC'])
    
 
 
 
    
</div>
 
 

<div class="Plot">

</div>
 

@endsection





@push('milk')

    @include('zUTIN.Milk.tv_expert')
    @include('zUTIN.Milk.tv_Pay')
    @include('zUTIN.Milk.smi_Answer')
    @include('zUTIN.Milk.smi_Interview')
    @include('zUTIN.Milk.smi_PressReleases')
    @include('zUTIN.Milk.smi_Pay')
    @include('zUTIN.Milk.smi_example')
    @include('zUTIN.Milk.smi_exampleLite')






{{-- <div id="milk_tvExpert" class="FIX" data-click data-fix data-css data-add='on'>
    <div class="fix / flex / cI space-s" data-close>
        <div class="_fix Pente aura / Plot -S -h fix-H_mbl / relative">
            <div class="Wings -mbl" style="z-index: 5">
                <div class="_win / flex eC / noEvents / edge-Close">
                    <div class="Close -scroll -black -an / yesEvents" data-close=""></div>
                </div>
            </div>

            <div class="Opportunities {{$js_id_event ?? 'Start'}} / {{$css ?? 'Plot -S -h / -White White -bg'}} / relative">
 
                <div class="Abs -all / Scroll_mbl"> 
                    <div class="_scr / H-100 / flex dC / index">
                
                        <div class="_head / _indexMax relative">
                            @include('zJJ.mod.Opportunities._lego._head')
                        </div>
                
                        <div class="_body / H-100_PC relative">
                            <div class="Scroll_PC">
                                <div id="scr_25121053" class="_scr">
                                    @include('zJJ.mod.Opportunities._lego._body')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>
</div> --}}





            {{-- <div class="Article / space-m round-s / yesEvents">
                <div class="paragraph"></div>
                @include('zUTIN.Milk.tv_expert')
            </div> --}}
        </div>
    </div>
</div>
@endpush
