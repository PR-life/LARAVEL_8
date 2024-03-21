<!DOCTYPE html>
<html id="html" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	@include('_shema._lego.head.index')
	<link href="{{ mix($linkCssMin ?? '/css/lead.css') }}" rel="stylesheet" type="text/css">
    @include('zTHIS.style.Lead')
</head>
<body id="body" class="MXAT @yield('css-body') @stack('css-body')">
<script>
	@include('_.js.bodyStart')
	@stack('script-bodyStart')
</script>

@include('_shema._lego.input')

<div id="Fon" class="Abs -all index">@stack('fon')</div>


@component('_wrap.index', ['id' => 'Wrap', 'css' => 'HWin'])


    <div id="wrap_manager" class="Space -v / Bg -gif">
        <div class="Article aura / -Black / edge">
            <div class="Font -void / center-text">
                {{-- <div class="center-text"> --}}
            @if($sms->name == 'Аноним')
                <div class="_h -vw / center-text b700">Спасибо за обращение!</div>
            @else
                <div class="_h -vw / b700">{{$sms->name}}, спасибо за обращение!</div>
            @endif
                <div class="paragraph-s"></div>
                <div class="_p">
                    @if($sms->email != null)
                        Ответ будет направлен на почту <span class="a">{{$sms->email}}</span>.                        
                    @elseif($sms->phone != null)
                         Мы перезвоним по номеру <span class="a">{{$sms->phone}}</span> в рабочие часы.
                    @elseif($sms->whatsapp != null)
                        Ответ пришлем на whatsapp <span class="a">{{$sms->whatsapp}}</span>.
                    @elseif($sms->telegram != null)
                        Ответим в telegram @<span class="a">{{$sms->telegram}}</span>.
                    @elseif($sms->viber != null)
                        Ответ пришлем на viber <span class="a">{{$sms->viber}}</span>.
                    @endif
                </div>               



                <div class="_void / inline">
                    <a class="Btn cC" href="{{$sms->from_page}}">назад</a>
                </div>
                 
                {{-- </div> --}}
                


                {{-- <div class="h1">Подписаться на рассылку</div> --}}

            </div>
        </div>
    </div>

    <div class="Pente aura / edge">
        <div class="paragraph"></div>
        <div class="center-text">
            <div class="content / Grey"><span class="Sup"><span class="_sup -left">*</span></span>Отвечаем ежедневно, будни с 10:00 до 19:00, <br class="none_PC">выходные и праздники с 10:00 до 18:00</div>
        </div>
        @include('zTHIS._lego.thanksFooter')
    </div>


@endcomponent






<div id="Milk" class="Abs Milk / index owlFIX">
	@stack('milk')
	<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
		@include('_.src.svg._def')
		@stack('svg')
	</svg>
</div>

@include('_._skeleton.bodyEnd')
<!-- <div id="Veil" data-click data-foo='click' data-goto></div> -->
@include('_shema._lego.afterMilk')

</body>
</html>
