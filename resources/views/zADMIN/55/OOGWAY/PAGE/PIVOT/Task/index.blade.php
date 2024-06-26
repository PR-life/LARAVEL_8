@extends('zADMIN._schema.oogway.manager')

@section('title')Task @endsection

 
@prepend('addBread')
    <li><span class="content-xs">Task</span></li>
@endprepend

 
 
 
@section('content')


<div class="Bee"></div>


@component('zADMIN._wrap.index')
     
<div class="Box aura">
    <div class="inline">
        <a class="Btn cC" href="{{route('admin.oogway.pivot.task.create')}}">create</a>
    </div>
 

    @component('zADMIN._wrap.Table.index', ['css'=> '-sms'])
        @foreach($pivots as $task)
            @include('zADMIN.combine.Teaser.PIVOT', ['Var' => $task])
            {{-- <li><a href="{{route('admin.oogway.task.edit', $task->id)}}">{{strip_tags($task->name)}}</a></li> --}}
        @endforeach
    @endcomponent



    </ul>
</div>
 

@endcomponent


 
@endsection
