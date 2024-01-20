@extends('zADMIN._shema.oogway')

@section('title')show: Task @endsection
 
@prepend('addBread')
<li><span class="content-xs">{{$task->name}}</span></li>
@endprepend

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
    [	
        "name" => 'Wiki',
    ],
);
?>
 
{{-- 

@push('bee')

    @component('zADMIN.mod.Name.oogway', ['Var' => $oogway])@endcomponent
 
    @component('zADMIN.mod.Tabs.oogway' , ['menu' => $arr])@endcomponent


@endpush --}}

 
 
@section('content')


{{-- @component('zADMIN._wrap.tabOogway.index')


    @slot('tab_1')
        <div class="I">
            @include('zADMIN.OOGWAY.tab.1')
        </div>
    @endslot

    @slot('tab_2')
        <div class="Box">
             @include('zADMIN.OOGWAY.branch.2002.x2')
        </div>
    @endslot


@endcomponent


 --}}

 



@endsection
