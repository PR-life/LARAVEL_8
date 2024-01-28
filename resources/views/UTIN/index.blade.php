@extends('UTIN._shema.index')

@include('_.src.link.css.Utin')
{{-- 
@include('zDT.src.css.rolling-text')
@push('js-bottom-solo')
    @include('zDT.src.script.rolling-text')
@endpush
@push('css-body','shema-morda')
@section('top')@endsection  --}}




{{-- https://pr.help/medicinskij-pr-dlja-vrachej-hirurgov-medi/ --}}

{{-- цены
https://9writer.ru/ceny --}}


@section('content')
<div class="paragraph"></div>
<div class="Box aura void / Edge -SPC edge-s">


 

    @include('UTIN._lego.intro',['css' => '-Black Black -bg / space-m'])

 
    @include('UTIN._lego.plot_1')
    @include('UTIN._lego.plot_2')
    @include('UTIN._lego.page_tools',['css' => '-Black Black -bg / space-m_PC'])

    @include('UTIN._lego.tezis',['css' => '-Black Black -bg / space-m_PC'])

    @include('UTIN._lego.plot_TV',['css' => '-Black Black -bg / space-m_PC'])
    @include('UTIN._lego.plot_SMI',['css' => '-Black Black -bg / space-m_PC'])
    @include('UTIN._lego.plot_Radio',['css' => '-Black Black -bg / space-m_PC'])


    @include('UTIN._lego.plot_ContentMarket',['css' => '-Black Black -bg / space-m_PC'])
    @include('UTIN._lego.plot_Blogger',['css' => '-Black Black -bg / space-m_PC'])
    @include('UTIN._lego.plot_Conferences',['css' => '-Black Black -bg / space-m_PC'])
    
 
 
 
    
</div>
 
 

<div class="Plot">

</div>
 

@endsection





@push('milk')

    @include('UTIN.Milk.tv_expert')
    @include('UTIN.Milk.tv_Pay')
    @include('UTIN.Milk.smi_Answer')
    @include('UTIN.Milk.smi_Interview')
    @include('UTIN.Milk.smi_Pay')






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
                @include('UTIN.Milk.tv_expert')
            </div> --}}
        </div>
    </div>
</div>
@endpush
