@extends('zADMIN._shema.index')

@section('title')Admin @endsection

@push('bee')
    <div class="Bee / -Grey">
        <div class="space-left / hill-m / flex cI">
            <div class="flex cI">
                <div class="Ico -S / mr-2">
                    @svg('barMenu_editorial')
                </div>
                <div class="h2 -lineHeight / b100 noEvents">Faq</div>
            </div>        
        </div>
    </div>
@endpush


@section('content')

    @component('zADMIN._wrap.index')
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN.PAGE._wrap.Table.index', ['css'=> '-faq'])
                @foreach($faqs as $faq)     
                    @include('zADMIN.combine.Teaser.lib.index', ['Var' => $faq, 'route' => route('admin.faq.edit',$faq->id)])
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $faqs])
        @endcomponent
    @endcomponent

@endsection
