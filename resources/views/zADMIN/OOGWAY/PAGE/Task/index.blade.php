@extends('zADMIN._shema.oogway.manager')

@section('title')Task @endsection

 
@prepend('addBread')
    <li><span class="content-xs">Task</span></li>
@endprepend

 
 
 
@section('content')


<div class="Bee"></div>


@component('zADMIN._wrap.index')
     
<div class="Box aura">
    <div class="inline">
        <a class="Btn cC" href="{{route('admin.oogway.task.create')}}">create</a>
    </div>
 

    @component('zADMIN._wrap.Table.index', ['css'=> '-sms'])
        @foreach($tasks as $task)
            @include('zADMIN.combine.Teaser.task', ['Var' => $task, 'route' => route('admin.oogway.task.edit',$task->id)])
            {{-- <li><a href="{{route('admin.oogway.task.edit', $task->id)}}">{{strip_tags($task->name)}}</a></li> --}}
        @endforeach
    @endcomponent


 


    </ul>
</div>
 

@endcomponent


 
@endsection
