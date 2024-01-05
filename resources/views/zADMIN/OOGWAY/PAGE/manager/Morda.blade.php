@extends('zADMIN._shema.oogway.manager')

@section('title')Manager @endsection




@prepend('addBread')
    <li><a class="content-xs" href="{{route('admin.oogway.manager.index')}}">Manager</a></li>
@endprepend


@section('content')
 
<div class="Bee"></div>


@component('zADMIN._wrap.index')
     

    <div class="Box aura">
        <div class="inline">
            <a class="Btn cC" href="{{route('admin.oogway.manager.create')}}">создать Контейнер</a>
        </div>


        @component('zADMIN.PAGE._wrap.Table.index', ['css'=> '-oogway'])
        @foreach($oogways as $oogway)
            @include('zADMIN.combine.Teaser.oogway', ['Var' => $oogway, 'route' => route('admin.oogway.manager.edit',$oogway->id)])
            {{-- <li><a href="{{route('admin.oogway.task.edit', $task->id)}}">{{strip_tags($task->name)}}</a></li> --}}
        @endforeach
        @endcomponent
    </div>


@endcomponent


@endsection
