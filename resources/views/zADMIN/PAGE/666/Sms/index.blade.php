@extends('zADMIN._shema.index')

@section('title')Admin @endsection

@push('addBread')
<li>
    <span>
        <span class="content-xs">Редакция</span>
    </span>
</li>
@endpush

@push('topAfter')
    @include('zADMIN.PAGE._lego.filter.btn.content')
@endpush

@push('bee')

    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Форма обратной связи', 'ico' => 'barMenu_editorial'])
    {{-- @include('zADMIN.PAGE._lego.filter.SHEMA.index.papers') --}}
    @include('zADMIN.PAGE._lego.filter.table-index')
@endpush

 

@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-sms'])
                @foreach($sms as $_sms)       
                    @include('zADMIN.combine.Teaser.lib.sms', ['Var' => $_sms])
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $sms])
        @endcomponent
    @endcomponent

@endsection
