@include('component.Form._brick.input.bd_min')
@include('component.Form._brick.input.spam')

    <input type="hidden" name="label" value="ask">
    <input type="hidden" name="reachgoal_id" value="formAsk">

    @if($item instanceof App\Models\Item)
        <input type="hidden" name="item_id" value="{{$item->id}}">
    @endif
    @if($item instanceof App\Models\Product)
        <input type="hidden" name="product_id" value="{{$item->id}}">
    @endif


    <div class="{{$css_wrap07110929 ?? ''}}">
        {!!$slot ?? ''!!}
        <div class="_shell @error('sms','newAsk') Error Anime vol-shake_hor @enderror">
    
            @error('sms','newAsk')
                <div class="_anime / Abs / Nameplate -rt / familySamolet / _anime">{{$errors->newAsk->first('sms')}}</div>
            @enderror
    
            <textarea id="textarea_{{$id ?? 'Ask'}}" class="{{$textarea_css ?? 'round space'}}" name="sms" maxlength="850" rows="12" placeholder="{{$placeholder ?? 'Напишите ваш вопрос'}}..." js-focus>{{old('sms')}}</textarea>
        </div>
    </div>