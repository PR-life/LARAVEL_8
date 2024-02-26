@extends('UTIN.shema.index')

@include('_.src.link.css.Utin')



@section('content')
<div class="paragraph"></div>
<div class="Box aura void-m / Edge -XSPC edge-s x-25021816">

    <div class="Bee net"></div>
 
    @include('UTIN.lego.intro',['css' => '-Black Black -bg / space-m_PC / plot-26020713'])
    @include('UTIN.lego.plot_1')


    @include('UTIN.lego.page_tools',['css' => '-Black Black -bg / space-m_PC'])
    @include('UTIN.lego.opinion_1',['css' => '-Black Black -bg / space-m_PC'])

    <h1 class="center-text [ margin top ]">Шаг 1</h1>
    <div class="paragraph"></div>
    @include('UTIN.lego.step_1',['css' => '-Black Black -bg / space-m_PC'])
    @include('UTIN.lego.step_1_TA',['css' => '-Black Black -bg / space-m_PC'])
    
    {{-- Брюс Уэйн --}}
    {{-- https://vc.ru/design/779273-kak-razrabotat-lichnyy-brend-obyasnyayu-na-primere-bryusa-ueyna?ysclid=lt15g7ddzl746905832 --}}
    


     
 



    {{-- Исследование --}}
    {{-- Система --}}







    
    {{-- 
        

    
        
 
 
     
    @include('UTIN._lego.plot_2')
    
    
    

    @include('UTIN._lego.plot_TV',['css' => '-Black Black -bg / space-m_PC'])
    @include('UTIN._lego.plot_SMI',['css' => '-Black Black -bg / space-m_PC'])
    @include('UTIN._lego.plot_Radio',['css' => '-Black Black -bg / space-m_PC'])


    @include('UTIN._lego.plot_ContentMarket',['css' => '-Black Black -bg / space-m_PC'])
    @include('UTIN._lego.plot_Blogger',['css' => '-Black Black -bg / space-m_PC'])
    
    <div class="paragraph"></div>
    <div class="Box aura Edge -SPC edge-s">
        @include('UTIN._lego.plot_PS',['css' => '-Black Black -bg / space-m_PC'])
    </div>
    <div class="paragraph"></div>
    <div class="Box aura Edge -SPC edge-s">
        @include('UTIN._lego.plot_Conferences',['css' => '-Black Black -bg / space-m_PC'])        
    </div> --}}
    

    <div class="Plot -h -XS"></div>
    
</div>
@endsection





@push('milk')

    @include('UTIN._milk.archetypes')
    @include('UTIN.milk.faq')


    {{-- @include('UTIN.Milk.tv_expert')
    @include('UTIN.Milk.tv_Pay')
    @include('UTIN.Milk.smi_Answer')
    @include('UTIN.Milk.smi_Interview')
    @include('UTIN.Milk.smi_PressReleases')
    @include('UTIN.Milk.smi_Pay')
    @include('UTIN.Milk.smi_example')
    @include('UTIN.Milk.smi_exampleLite') --}}
@endpush
