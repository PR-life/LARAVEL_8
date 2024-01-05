<input id="name" type="hidden" name="name" value="{{$sms->name}}">
<input id="country" type="hidden" name="country" value="{{$sms->country}}">
<input id="city" type="hidden" name="city" value="{{$sms->city}}">

<div class="void / Form -S">

    <div class="pl-edgeS">
        <div class="Preamble / face face-padding">
            <div class="author">
                {{$sms->name}}
            </div>
            <div class="content-xs">
                {{$sms->country ?? ''}}
                ,
                {{$sms->city ?? ''}}
            </div>
        </div>
    </div>


    @component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms')
        @slot('id', 'sms_tool_1')
        @slot('name', 'Контакты')

        @if($sms->email)
        <div class="_shell / vol-Abs label-insideInput">
            <input id="email" class="content-xs" type="text" name="email" value="{{$sms->email}}" placeholder="." readonly>
            <label class="Abs" for="email">email</label>
        </div>
        @endif
    
        @if($sms->phone)
        <div class="_shell / vol-Abs label-insideInput">
            <input id="phone" class="content-xs" type="text" name="phone" value="{{$sms->phone}}" placeholder="." readonly>
            <label class="Abs" for="phone">phone</label>
        </div>
        @endif
    
        @if($sms->whatsap)
        <div class="_shell / vol-Abs label-insideInput">
            <input id="whatsap" class="content-xs" type="text" name="whatsap" value="{{$sms->whatsap}}" placeholder="." readonly>
            <label class="Abs" for="whatsap">whatsap</label>
        </div>
        @endif
    
    
        @if($sms->telegram)
        <div class="_shell / vol-Abs label-insideInput">
            <input id="telegram" class="content-xs" type="text" name="telegram" value="{{$sms->telegram}}" placeholder="." readonly>
            <label class="Abs" for="telegram">telegram</label>
        </div>
        @endif
    
    
        @if($sms->viber)
        <div class="_shell / vol-Abs label-insideInput">
            <input id="viber" class="content-xs" type="text" name="viber" value="{{$sms->viber}}" placeholder="." readonly>
            <label class="Abs" for="viber">viber</label>
        </div>
        @endif
    @endcomponent


    @component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms')
        @slot('id', 'sms_tool_2')
        @slot('name', 'Статусы')
    @endcomponent

    <div class="paragraph / net"></div>

    <div class="pl-edgeS"> 
        <dl class="-dot -rightS Void">
            <dt class="content-xs Grey">дата</dt>
            <dd><span class="content-xs">{{$sms->created_at}}</span></dd>
            <dt class="content-xs Grey">страница</dt>
            <dd><a class="content-xs / nowrap block Ellipsis" href="{{$sms->from_page}}" target="_blank">{{str_replace('https://sensitiv-imago.ru','',$sms->from_page)}}</a></dd>
        </dl>
    </div>

</div>
