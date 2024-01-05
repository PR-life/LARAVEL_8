@extends('zADMIN._shema.index')

@section('title')Admin @endsection

@push('topAfter')
    <div class="Bee / -Grey">
        <div class="space-left / hill-m / flex cI">
            <div class="flex cI">
                <div class="Ico -S / mr-2">
                    @svg('barMenu_editorial')
                </div>
                <div class="h2 -lineHeight slctn / b100 noEvents">Специальные предложения</div>
            </div>        
        </div>
    </div>
@endpush


@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])


        <div class="text">
            <ul>
                <li>Подарочные сертификаты</li>
            </ul>
        </div>

            {{-- @component('zADMIN.PAGE._wrap.Table.index', ['css'=> '-face'])
                @foreach($faces as $face)     
                    @include('zADMIN.combine.Teaser.lib.customer.index', ['route' => route('admin.customer.edit',$face->id)])
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $faces]) --}}
        @endcomponent
    @endcomponent

@endsection
