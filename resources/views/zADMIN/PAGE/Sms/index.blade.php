@extends('zADMIN._schema.index')

@section('title')Sms @endsection

@push('addBread')
    <li>
        <span>
            <span class="content-xs">Редакция</span>
        </span>
    </li>
@endpush


@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Контакт с клиентом','Model' => 'Sms','ico' => 'emailBg'])
    @include('zADMIN.PAGE._lego.filter.SHEMA.index.sms')
@endpush
 
@include('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['Model' => 'Sms', 'model' => 'sms'])


@section('content')

    @component('zADMIN._wrap.index', ['css' => 'relative'])
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-sms', 'Model' => 'Sms'])
                @foreach($sms as $_sms)       
                @include('zADMIN._repo.teaser.sms', ['Var' => $_sms])
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $sms])
        @endcomponent
    @endcomponent

@endsection
