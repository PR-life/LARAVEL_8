@extends('xAleksei._shema.vol-utin')

@section('title', 'Велком')


@push('css-body', '-morda ')



@push('Bar')
<div class="Top -h / space-m">
    <img src="/Utin/Vl/logo.png" alt="">
</div>
<div class="JsScroll / Goo -t">
    <div class="paragraphX2"></div>
    <div class="_wrap / space-left">
        <ul class="menu void">
            <li><a href="#wrap_cost">Расходы на рекламу</a></li>
            <li><a href="#page_Budget">Бюджеты</a></li>
            <li><a href="#wrap_555555555">Формат работы</a></li>
            <li>
                <span class="block paragraph"></span>
                <span class="separator">инструкции</span>
            </li>
            <li><a href="#wrap_555555555">Наполнение каталога</a></li>
            <li>
                <span class="block paragraph"></span>
                <span class="separator">доп. работы</span>
            </li>
            <li><a href="#wrap_555555555">Подготовка контента</a></li>
            <li>
                <span class="block paragraph"></span>
                <span class="separator">приложение</span>
            </li>
            <li><a href="#wrap_555555555">.pdf</a></li>

            {{-- <li><a href="#wrap_555555555">555555555</a></li> --}}
        </ul>
    </div>
</div>
@endpush


@section('content')
{{-- <div class="flex dC cI cC / void">
    <div class="Font">
        <div class="_h -vw">
            Январь 2024
        </div>
    </div>
</div> --}}


<div class="I aura / Edge -SPC">
    <div id="wrap_cost" class="h1 -vw / space-left" corrector-jsscroll="40">Расходы на рекламу</div>
</div>



<div class="Details -edge / details-arrow-left5555">
    <details>
        <summary class="-icoLeft55 / I aura / round-s">СВН <i></i></summary>
        <div class="Roll_mbl -edgeS Roll_mbl / net">
            @include('xAleksei.Utin.velkom.price.svn')
        </div>
    </details> 
    <details>
        <summary class="-icoLeft55 / I aura / round-s">Домофоны <i></i></summary>
        <div class="Roll_mbl -edgeS Roll_mbl / net">
            @include('xAleksei.Utin.velkom.price.domofon')
        </div>
    </details> 
    <details>
        <summary class="-icoLeft55 / I aura / round-s">Яндекс Услуги<i></i></summary>
        <div class="Roll_mbl -edgeS Roll_mbl / net">
            @include('xAleksei.Utin.velkom.price.yandexUslugi')
        </div>
    </details> 
</div> 

 

<div class="margin top S"></div>
<div class="I aura / Edge -SPC">
    <div class="h / space-left" corrector-jsscroll="40">новости</div>
</div>




<div class="space-s / void-m">
    @include('xAleksei.Utin.velkom.lego.budget',['css55' => '-Black Black -bg / space-m_PC'])
    @include('xAleksei.Utin.velkom.lego.pay',['css55' => '-Black Black -bg / space-m_PC'])
</div>


<div class="Plot -h"></div>


@endsection
 

