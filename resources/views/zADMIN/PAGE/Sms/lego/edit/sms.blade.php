<div class="void / Form -S">
 

    @component('_wrap.__.summary')
        @slot('id', 'demonUser')
        @slot('name', 'кто отправил') 
        <dl class="-dot -leftS Void">
            <dt class="content-xs Grey"><label for="inputVisitor_name">name</label></dt>

            <dd><input id="inputVisitor_name" type="text" name="name" value="{{$sms->name}}"></dd>
            <dt class="content-xs Grey">страна</dt>
            <dd><span class="content-xs">{{$sms->country}}</span></dd>
            <dt class="content-xs Grey">город</dt>
            <dd><span class="content-xs">{{$sms->city}}</span></dd>
            <dt class="content-xs Grey">адрес</dt>
            <dd><span class="content-xs">{{$sms->area}}</span></dd>
            <dt class="content-xs Grey">contact</dt>
            <dd><span class="content-xs">{{$sms->contact}}</span></dd>
            <dt class="content-xs Grey">email</dt>
            <dd><span class="content-xs">{{$sms->email}}</span></dd>
            <dt class="content-xs Grey">phone</dt>
            <dd><span class="content-xs">{{$sms->phone}}</span></dd>
            <dt class="content-xs Grey">whatsapp</dt>
            <dd><span class="content-xs">{{$sms->whatsapp}}</span></dd>
            <dt class="content-xs Grey">telegram</dt>
            <dd><span class="content-xs">{{$sms->telegram}}</span></dd>
            <dt class="content-xs Grey">viber</dt>
            <dd><span class="content-xs">{{$sms->viber}}</span></dd>
        </dl>

    @endcomponent

 
    @component('_wrap.__.summary')
        @slot('id', 'wrapFlaber_sms_data')
        @slot('name', 'Данные')

        <dl class="-dot -rightS Void">
            <dt class="content-xs Grey">type</dt>
            <dd><span class="content-xs">{{$sms->type}}</span></dd>
            <dt class="content-xs Grey">label</dt>
            <dd><span class="content-xs">{{$sms->label}}</span></dd>
            <dt class="content-xs Grey">id_item</dt>
            <dd><span class="content-xs">{{$sms->id_item}}</span></dd>
            <dt class="content-xs Grey">from_page</dt>
            <dd class="content-xs -lineHeight">{{$sms->from_page}}</dd>
        </dl>
    @endcomponent
</div>
