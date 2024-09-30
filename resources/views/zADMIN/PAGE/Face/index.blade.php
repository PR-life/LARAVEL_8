@extends('zADMIN._schema.index')

@section('title')Материалы @endsection

@push('addBread')
    <li>
        <span>
            <span class="content-xs">CRM</span>
        </span>
    </li>
@endpush

@push('bee')
    @include('zADMIN._lego.Bee.nameIndex',['name' => Lang::has('z_admin/menu/bar.crmMain') ? __('z_admin/menu/bar.crmMain') : 'Все профили', 'add' => route('admin.crm.face.create'), 'Model' => 'Face'])


    
    <div id="wrap_filter" class="space">

        <div class="_wrap flex bC / cross space round">
            @include('zADMIN.PAGE._lego.filter.SCHEMA.index.faces')
    
            <div class="flex cross / ">
                <a href="{{ route('admin.crm.face.index', ['sort' => 'date']) }}" class="Btn cC">Сортировать по дате</a>
                <a href="{{ route('admin.crm.face.index', ['sort' => 'surname']) }}" class="Btn cC">Сортировать по алфавиту</a>        
            </div>
        </div>
    </div>
    {{-- @include('zADMIN.PAGE._lego.filter.SCHEMA.index.customers') --}}
@endpush

{{-- @include('zADMIN.PAGE._lego.filter._lego.filter_for_table.index',['Model' => 'Face', 'model' => 'face']) --}}


@section('content')
    <div class="paragraphX2"></div>
    @component('zADMIN._wrap.index', ['css' => 'relative'])
        @component('zADMIN._wrap.max', ['css' => 'index'])
            @component('zADMIN._wrap.Table.index', ['css'=> '-faces', 'Model' => 'Face'])
                @foreach($faces as $_face)     
                    @include('zADMIN._repo.teaser.face', ['Var' => $_face])
                @endforeach
            @endcomponent
            @include('zADMIN.mod.paginator', ['Var' => $faces])
        @endcomponent
    @endcomponent

@endsection
