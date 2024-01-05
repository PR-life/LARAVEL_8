@extends('zADMIN._shema.index')

@section('title')Admin @endsection

@push('topAfter')
    <div class="Bee / -Grey">
        <div class="space-left / hill-m / flex cI">
            <div class="flex cI">
                <div class="Ico -S / mr-2">
                    @svg('barMenu_editorial')
                </div>
                <div class="h2 -lineHeight / b100 noEvents">Статьи</div>
            </div>        
        </div>
    </div>
@endpush


@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN.PAGE._wrap.Table.index', ['css'=> '-paper'])
                @foreach($papers as $paper)     
                    @include('zADMIN.combine.Teaser.lib.index', ['Var' => $paper, 'route' => route('admin.paper.edit',$paper->id)])
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $papers])
        @endcomponent
    @endcomponent

@endsection
