<div class="_shell {{$css_shell_18051438 ?? 'x-hr Form -S'}} / vol-Abs">
    <input id="inputPhone" type="text" name="phone" value="{{$face->phone ?? old('phone')}}" {!!$readonly ?? 'placeholder="."' !!}>
    <label class="Abs" for="inputPhone"><span class="_svg / round-s contentBox">@svg('plus')</span>Телефон</label>
</div>

<div class="_shell {{$css_shell_18051438 ?? 'x-hr Form -S'}} / vol-Abs">
    <input id="inputEmail" type="text" name="email" value="{{$face->email ?? old('email')}}" {!!$readonly ?? 'placeholder="."' !!}>
    <label class="Abs" for="inputEmail"><span class="_svg / round-s contentBox">@svg('plus')</span>email</label>
</div>


<div class="flex">
    <div class="_shell {{$css_shell_18051438 ?? 'x-hr Form -S'}} / vol-Abs ">
        <input id="inputWhatsapp" type="text" name="whatsapp" value="{{$face->whatsapp ?? old('whatsapp')}}" {!!$readonly ?? 'placeholder="."' !!}>
        <label class="Abs" for="inputWhatsapp"><span class="_svg / round-s contentBox">@svg('plus')</span>whatsapp</label>
    </div>
    @include('zADMIN.PAGE.Face.brick.data.brick.btnCopy',['id' => 'copyButtonWhatsapp', 'name' => 'телефон'])
</div>

<div class="flex">
    <div class="_shell {{$css_shell_18051438 ?? 'x-hr Form -S'}} / vol-Abs">
        <input id="inputViber" type="text" name="viber" value="{{$face->viber ?? old('viber')}}" {!!$readonly ?? 'placeholder="."' !!}>
        <label class="Abs" for="inputViber"><span class="_svg / round-s contentBox">@svg('plus')</span>viber</label>
    </div>
    @include('zADMIN.PAGE.Face.brick.data.brick.btnCopy',['id' => 'copyButtonViber', 'name' => 'телефон'])
</div>
<div class="flex">
    <div class="_shell {{$css_shell_18051438 ?? 'x-hr Form -S'}} / vol-Abs">
        <input id="inputTelegram" type="text" name="telegram" value="{{$face->telegram ?? old('telegram')}}" {!!$readonly ?? 'placeholder="."' !!}>
        <label class="Abs" for="inputTelegram"><span class="_svg / round-s contentBox">@svg('plus')</span>telegram</label>
    </div>
    @include('zADMIN.PAGE.Face.brick.data.brick.btnCopy',['id' => 'copyButtonTelegram', 'name' => 'телефон'])
</div>
 


<script>
    document.getElementById('copyButtonWhatsapp').addEventListener('click', function() {
        const phoneValue = document.getElementById('inputPhone').value;
        document.getElementById('inputWhatsapp').value = phoneValue;
    });
    document.getElementById('copyButtonViber').addEventListener('click', function() {
        const phoneValue = document.getElementById('inputPhone').value;
        document.getElementById('inputViber').value = phoneValue;
    });
    document.getElementById('copyButtonTelegram').addEventListener('click', function() {
        const phoneValue = document.getElementById('inputPhone').value;
        document.getElementById('inputTelegram').value = phoneValue;
    });
</script>

{{-- 
    напиши  код JS для input

нужна маска для номера телефона в формате: +7 (903) 721-01-29

--}}