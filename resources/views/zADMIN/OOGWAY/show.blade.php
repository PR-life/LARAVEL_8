@extends('zADMIN._shema.oogway')

@section('title')edit: Oogway @endsection
 
@prepend('addBread')
<li><span class="content-xs">{{$oogway->name}}</span></li>
@endprepend

@push('style')

#branch_{{$oogway->id}} {
    background-color: #3a3e51;
}

@if($oogway->status == '500')
#branch_{{$oogway->id}} .x-new {
    display:flex;
}
@endif


@if($oogway->status == '404')
#branch_{{$oogway->id}} {
    display:none;
}
@endif


@endpush


<?php
$arr = array(
    [	
        "name" => 'Описание',
    ],
    [	
        "name" => 'Летучка',
    ],
    [	
        "name" => 'Сотрудники',
    ],
    // [	
    //     "name" => 'Wiki',
    // ],
);
?>
 


@push('bee')

    @component('zADMIN.mod.Name.oogway', ['Var' => $oogway])@endcomponent
 

    @if($oogway->id == '10' && $oogway->status == '500')
    {{-- @if($oogway->status == '500') --}}
        @component('zADMIN._wrap.index')
            @include('zADMIN.OOGWAY._lego.manager.start')
        @endcomponent
    @endif



    @component('zADMIN.mod.Tabs.oogway' , ['menu' => $arr])@endcomponent


@endpush

 
 
@section('content')


@component('zADMIN.PAGE._wrap.tabOogway.index')


    @slot('tab_1')
        <div class="I">
            @include('zADMIN.OOGWAY.tab.1')
            {{-- @include('zADMIN.OOGWAY.branch.2002.x1') --}}
        </div>
    @endslot

    @slot('tab_2')
        <div class="Box">
             @include('zADMIN.OOGWAY.component.tasks.index')
             {{-- @include('zADMIN.OOGWAY.branch.2002.x2') --}}
        </div>
    @endslot

@endcomponent




 



@endsection
