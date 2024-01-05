@extends('zADMIN._shema.index')

@section('title')Admin @endsection

@push('topAfter')
    <div class="Bee / -Grey">
        <div class="space-left / hill-m / flex cI">
            <div class="flex cI">
                <div class="Ico -S / mr-2">
                    @svg('barMenu_editorial')
                </div>
                <div class="h2 -lineHeight / b100 noEvents">Формы</div>
            </div>        
        </div>
    </div>
@endpush


@push('topAfter')
    <div class="Goo -top / bgToBottom _indexMax">
        @component('zADMIN._wrap.index')
            @component('zADMIN._wrap.max')
                <div class="paragraph"></div>
                <ul class="menu -tag -S -roundS / lie">
                    <li {!! request()->routeIs('admin.sms.index') ? 'class="active"' : '' !!}><a href="{{route('admin.sms.index')}}">все</a></li>
                    <li {!! request()->routeIs('admin.sms.conversion.index') ? 'class="active"' : '' !!}><a href="{{route('admin.sms.conversion.index')}}">Конверсии</a></li>
                    <li {!! request()->routeIs('admin.sms.lead.index') ? 'class="active"' : '' !!}><a href="{{route('admin.sms.lead.index')}}">Лиды</a></li>
                </ul>
                <div class="padding top bottom S">
                    <div class="Line -separator -hor"></div>
                </div>
            @endcomponent
        @endcomponent
    </div>
@endpush


@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN.PAGE._wrap.Table.index', ['css'=> '-sms'])

            <div class="inline">
                <ul class="menu -tag -XS / Kite kite-spaceS kite-round / pointer" data-click="" data-switch="" data-package="tabPost_1" data-stop="">
                    <li data-item="1" data-packagetype="css" data-packagefoo="radio" package="Tabs -x1" class="active">
                        <span class="a Ellipsis kite-min / noEvents">все</span>
                    </li>
                    <li data-item="2" data-packagetype="css" data-packagefoo="radio" package="Tabs -x2">
                        <span class="a Ellipsis kite-min / noEvents">формы</span>
                    </li>
                    <li data-item="3" data-packagetype="css" data-packagefoo="radio" package="Tabs -x3">
                        <span class="a Ellipsis / noEvents">звонки</span>
                    </li>
                    <li data-item="4" data-packagetype="css" data-packagefoo="radio" package="Tabs -x3">
                        <span class="a Ellipsis kite-min / noEvents">вопросы</span>
                    </li>
                </ul>
            </div>
            <div class="paragraphX2"></div>

                @foreach($sms as $item)                    
                    @include('zADMIN.combine.Teaser.lib.sms.index', ['Var' => $item, 'route' => route('admin.sms.edit',$item->id)])
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $sms])
        @endcomponent
    @endcomponent

@endsection
