@extends('zADMIN._shema.oogway')

@section('title')Oogway @endsection



@push('style')
#branch_1 {
    background-color: #3a3e51;
}
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
    [	
        "name" => 'Wiki',
    ],
);
?>
 


@push('topAfter')

    @component('zADMIN.mod.Name.oogway')@endcomponent
 
    @component('zADMIN.mod.Tabs.oogway' , ['menu' => $arr])@endcomponent


@endpush

 

 
 
@section('content')


<div id="tabOogway" class="Tabs " localstorage-controlCss addcss='-x' param-id='tabsOogway'>

    <div class="_shell / _tab x1">
        @component('zADMIN._wrap.index')
        <div class="I">
            @include('zADMIN.OOGWAY.branch.2002.x1')
        </div>
        @endcomponent
    </div>
    <div class="_shell / _tab x2">
        @component('zADMIN._wrap.index')
            <div class="Box">
                @include('zADMIN.OOGWAY.branch.2002.x2')
            </div>
        @endcomponent
    </div>
    <div class="_shell / _tab x3">
        @component('zADMIN._wrap.index')
            <h1>x3</h1>
        @endcomponent
    </div>
    <div class="_shell / _tab x4">
        @component('zADMIN._wrap.index')
            <h1>x4</h1>
        @endcomponent
    </div>
</div>
@endsection
