<?unset($_GET['page'])?>

@extends('zADMIN._schema.index')

@section('title')Lego @endsection

@push('addBread')
    <li>
        <span>
            <span class="content-xs">lego</span>
        </span>
    </li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => 'Lego', 'add' => route('admin.lego.create'), 'Model' => 'Lego'])
    {{-- @include('zADMIN.PAGE._lego.filter.SHEMA.index.faqs') --}}
@endpush

@include('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['Model' => 'Lego', 'model' => 'lego'])

 
@section('content')

    @component('zADMIN._wrap.index', ['css' => 'relative'])
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-lego', 'Model' => 'Lego'])

                @foreach($lego as $_faq)    
                 
                    @if($_GET == [])
                        @continue($_faq->faq_id != null)
                    @endif

                    @include('zADMIN._repo.teaser.index', ['Var' => $_faq])
         
                @endforeach
            @endcomponent


            @include('zADMIN.mod.paginator', ['Var' => $lego])

        @endcomponent
    @endcomponent

@endsection
