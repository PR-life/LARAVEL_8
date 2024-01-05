{{-- <input id="name" type="hidden" name="name" value="{{$customer->name}}"> --}}
{{-- <input id="country" type="hidden" name="country" value="{{$customer->country}}"> --}}
{{-- <input id="city" type="hidden" name="city" value="{{$customer->city}}"> --}}

<div class="void / Form -S">

    <div class="pl-edgeS">
        <div class="Preamble / face face-padding">
            <div class="author">
                {{$customer->name}}
            </div>
            <div class="content-xs">
                {{$customer->country ?? ''}}
                ,
                {{$customer->city ?? ''}}
            </div>
        </div>
    </div>


    @component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms')
        @slot('id', 'sms_tool_1')
        @slot('name', 'Контакты')

        <div class="_shell / vol-Abs label-insideInput">
            <input id="phone" class="content-xs" type="text" name="phone" value="+7 985 414-66-69" placeholder="." readonly>
            <label class="Abs" for="phone">телефон</label>
        </div>


        @if($customer->email)
        <div class="_shell / vol-Abs label-insideInput">
            <input id="email" class="content-xs" type="text" name="email" value="{{$customer->email}}" placeholder="." readonly>
            <label class="Abs" for="email">email</label>
        </div>
        @endif
    

        <div class="_shell / vol-Abs label-insideInput">
            <input id="whatsap" class="content-xs" type="text" name="whatsap" value="+7 985 414-66-69" placeholder="." readonly>
            <label class="Abs" for="whatsap">whatsap</label>
        </div>

    
    

        <div class="_shell / vol-Abs label-insideInput">
            <input id="telegram" class="content-xs" type="text" name="telegram" value="@kyutinen" placeholder="." readonly>
            <label class="Abs" for="telegram">telegram</label>
        </div>

    
        <div class="_shell / vol-Abs label-insideInput">
            <input id="viber" class="content-xs" type="text" name="viber" value="+7 985 414-66-69" placeholder="." readonly>
            <label class="Abs" for="viber">viber</label>
        </div>

    @endcomponent


    @component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms')
    @slot('id', 'sms_tool_size')
    @slot('name', 'Мерки')


        <dl class="-dot Void">
            <dt><span class="content-xs Grey">рост</span></dt>
            <dd>176</dd>
            <dt><span class="content-xs Grey">Обхват груди</span></dt>
            <dd>100</dd>
            <dt><span class="content-xs Grey">Обхват талии</span></dt>
            <dd>88</dd>
            <dt><span class="content-xs Grey">Обхват бедер</span></dt>
            <dd>104</dd>
            <dt><span class="content-xs Grey">Длина брюк</span></dt>
            <dd>110</dd>
        </dl>


    @endcomponent
    @component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms')
        @slot('id', 'sms_tool_about')
        @slot('name', 'Личные данные')

        <div class="_shell / vol-Abs label-insideInput">
            <input id="phone" class="content-xs" type="text" name="phone" value="01 февраль" placeholder="." readonly>
            <label class="Abs" for="phone">День Рождения</label>
        </div>

        <div class="_shell / vol-Abs label-insideInput">
            <input id="phone" class="content-xs" type="text" name="phone" value="Софья" placeholder="." readonly>
            <label class="Abs" for="phone">имя супруга</label>
        </div>


    @endcomponent





    @component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms')
        @slot('id', 'sms_tool_2')
        @slot('name', 'Статусы')

        <div class="text">
            <ul class="-XS">
                <li>Телефоны, Email и т.д. - если больше 1 сущности, то сильно усложняем БД</li>
            </ul>
        </div>
    @endcomponent

    <div class="paragraph / net"></div>

    <div class="pl-edgeS"> 
        <dl class="-dot -rightS Void">
            <dt class="content-xs Grey">в базе с</dt>
            <dd><span class="content-xs">{{$customer->created_at}}</span></dd>
        </dl>
    </div>

</div>
