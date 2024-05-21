<div class="_shell {{$css_shell_18051437 ?? 'x-hr Form -S'}} / vol-Abs">
    <input id="inputCountry" type="text" name="country" value="{{$face->country ?? old('country')}}" {!!$readonly ?? 'placeholder="."' !!}>
    <label class="Abs" for="inputCountry">@svg('plus')Страна</label>
</div>
<div class="_shell {{$css_shell_18051437 ?? 'x-hr Form -S'}} / vol-Abs">
    <input id="inputCity" type="text" name="city" value="{{$face->city ?? old('city')}}" {!!$readonly ?? 'placeholder="."' !!}>
    <label class="Abs" for="inputCity">@svg('plus')Город</label>
</div>
<div class="_shell {{$css_shell_18051437 ?? 'x-hr Form -S'}} / vol-Abs">
    <input id="inputArea" type="text" name="area" value="{{$face->area ?? old('area')}}" {!!$readonly ?? 'placeholder="."' !!}>
    <label class="Abs" for="inputArea">@svg('plus')Адрес</label>
</div>