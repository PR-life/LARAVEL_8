<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputPhone" type="text" name="phone" value="{{$face->phone ?? old('phone')}}" placeholder=".">
    <label class="Abs" for="inputPhone">@svg('plus')Телефон</label>
</div>

<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputEmail" type="text" name="email" value="{{$face->email ?? old('email')}}" placeholder=".">
    <label class="Abs" for="inputEmail">@svg('plus')email</label>
</div>

<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputWhatsapp" type="text" name="whatsapp" value="{{$face->whatsapp ?? old('whatsapp')}}" placeholder=".">
    <label class="Abs" for="inputWhatsapp">@svg('plus')whatsapp</label>
</div>

<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputTelegram" type="text" name="telegram" value="{{$face->telegram ?? old('telegram')}}" placeholder=".">
    <label class="Abs" for="inputTelegram">@svg('plus')telegram</label>
</div>

<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputViber" type="text" name="viber" value="{{$face->viber ?? old('viber')}}" placeholder=".">
    <label class="Abs" for="inputViber">@svg('plus')viber</label>
</div>

<div class="paragraph net"></div>
<div class="content-xs center-text / Grey -c50 / higlight slctn noEvents net">Откуда</div>
<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputCountry" type="text" name="country" value="{{$face->country ?? old('country')}}" placeholder=".">
    <label class="Abs" for="inputCountry">@svg('plus')Страна</label>
</div>
<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputCity" type="text" name="city" value="{{$face->city ?? old('city')}}" placeholder=".">
    <label class="Abs" for="inputCity">@svg('plus')Город</label>
</div>
<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputArea" type="text" name="area" value="{{$face->area ?? old('area')}}" placeholder=".">
    <label class="Abs" for="inputArea">@svg('plus')Адрес</label>
</div>




<div class="content-xs / Grey -c50 / higlight slctn noEvents net">Основной контакт</div>
<div class="paragraph net"></div>
<div class="menu -tile -XS / cloud / net">
    @component('zADMIN.PAGE._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
        @slot('name', 'public_contact')
        @slot('id', 'public_contact_def')
        @slot('param', 'checked')
        @slot('value', null)
        
        не выбран
    @endcomponent
    @component('zADMIN.PAGE._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
        @slot('name', 'public_contact')
        @slot('id', 'public_contact_phone')
        @slot('param', 'phone')
        @slot('value', $face->public_contact)
        
        Телефон
    @endcomponent
    @component('zADMIN.PAGE._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
        @slot('name', 'public_contact')
        @slot('id', 'public_contact_email')
        @slot('param', 'email')
        @slot('value', $face->public_contact)
        
        email
    @endcomponent
    @component('zADMIN.PAGE._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
        @slot('name', 'public_contact')
        @slot('id', 'public_contact_whatsapp')
        @slot('param', 'whatsapp')
        @slot('value', $face->public_contact)
        
        whatsapp
    @endcomponent
    @component('zADMIN.PAGE._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
        @slot('name', 'public_contact')
        @slot('id', 'public_contact_telegram')
        @slot('param', 'telegram')
        @slot('value', $face->public_contact)
        
        telegram
    @endcomponent
    @component('zADMIN.PAGE._wrap.menu.tile.radio', ['cssName' => 'content-xxs'])
        @slot('name', 'public_contact')
        @slot('id', 'public_contact_viber')
        @slot('param', 'viber')
        @slot('value', $face->public_contact)
        
        viber
    @endcomponent
</div>
<div class="paragraph net"></div>