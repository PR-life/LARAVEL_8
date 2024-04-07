<input id="user_id" type="hidden" name="user_id" value="{{$task->user_id}}">
{{-- <input id="country" type="hidden" name="country" value="{{$task->country}}"> --}}
{{-- <input id="city" type="hidden" name="city" value="{{$task->city}}"> --}}

<div class="void / Form -S">

    <div class="pl-edgeS">
        <div class="Preamble / face face-padding">
            <div class="author">
                {{$task->user->name}}
            </div>
            <div class="content-xs / Grey">
                {{$task->user->user_par_1}}
            </div>
        </div>
    </div>


    @component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms')
        @slot('id', 'flaber_sms_tool_1')
        @slot('name', 'Настройки')


        <div class="_shell / vol-Abs label-insideInput">
            <input id="local_status" class="content-xs" type="text" name="local_status" value="{{$task->local_status}}" placeholder=".">
            <label class="Abs" for="email">local_status</label>
        </div>
 
        <div class="_shell / vol-Abs label-insideInput">
            <input id="contractor_id" class="content-xs" type="text" name="contractor_id" value="{{$task->contractor_id}}" placeholder=".">
            <label class="Abs" for="email">contractor_id</label>
        </div>


        <div class="_shell / vol-Abs label-insideInput">
            <input id="observer_id" class="content-xs" type="text" name="observer_id" value="{{$task->observer_id}}" placeholder=".">
            <label class="Abs" for="email">observer_id</label>
        </div>

    @endcomponent


 

    <div class="paragraph / net"></div>

    <div class="pl-edgeS"> 
        <dl class="-dot -rightS Void">
            <dt class="content-xs Grey">дата</dt>
            <dd><span class="content-xs">{{$task->dateAsCarbon->diffForHumans()}}</span></dd>
        </dl>
    </div>

</div>
