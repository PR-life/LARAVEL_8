<div class="net void">
    @isset($face->phone)
    <div class="_shell _h x-hr / vol-Abs label-insideInput">
        <input id="inputPhone" type="text" name="phone" value="{{$face->phone ?? old('phone')}}" readonly>
        <label class="Abs" for="inputPhone">@svg('plus')Телефон</label>
        @if($face->public_contact == 'phone')
            <div id="wrap-21051416" class="Abs -rt / noEvents">
                @svg('check')
            </div>
        @endif
    </div>
    @endisset
    @isset($face->email)
    <div class="_shell _h x-hr / vol-Abs label-insideInput">
        <input id="inputEmail" type="text" name="email" value="{{$face->email ?? old('email')}}" readonly>
        <label class="Abs" for="inputEmail">@svg('plus')email</label>
        @if($face->public_contact == 'email')
            <div id="wrap-21051416" class="Abs -rt / noEvents">
                @svg('check')
            </div>
        @endif
    </div>
    @endisset
    @isset($face->whatsapp)
    <div class="_shell _h x-hr / vol-Abs label-insideInput">
        <input id="inputWhatsapp" type="text" name="whatsapp" value="{{$face->whatsapp ?? old('whatsapp')}}" readonly>
        <label class="Abs" for="inputWhatsapp">@svg('plus')whatsapp</label>
    </div>
    @endisset
    @isset($face->telegram)
    <div class="_shell _h x-hr / vol-Abs label-insideInput">
        <input id="inputTelegram" type="text" name="telegram" value="{{$face->telegram ?? old('telegram')}}" readonly>
        <label class="Abs" for="inputTelegram">@svg('plus')telegram</label>
    </div>
    @endisset
    @isset($face->viber)
    <div class="_shell _h x-hr / vol-Abs label-insideInput">
        <input id="inputViber" type="text" name="viber" value="{{$face->viber ?? old('viber')}}" readonly>
        <label class="Abs" for="inputViber">@svg('plus')viber</label>
    </div>
    @endisset
</div>

@if(!$face->phone)
<div class="space-left [ padding bottom ]">
    <a class="p" href="{{route('admin.plura.face.edit',$face->id)}}">добавить контакты</a>
</div>
@endif