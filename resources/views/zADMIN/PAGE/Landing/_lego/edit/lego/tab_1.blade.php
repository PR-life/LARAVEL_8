@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'prev_h1Landing', 'cssWrap' => 'net'])
<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputPrev_h1" type="text" name="prev_h1" value="{{$landing->prev_h1 ?? old('prev_h1')}}" placeholder=".">
    <label class="Abs" for="inputPrev_h1">@svg('plus')prev_h1</label>
</div>
<div class="_shell x-hr Form -S / vol-Abs / _OpenLvl_2">
    <input id="inputPrev_h1_en" type="text" name="en_prev_h1" value="{{$landing->en_prev_h1 ?? old('en_prev_h1')}}" placeholder=".">
    <label class="Abs" for="inputPrev_h1_en">@svg('plus')en_prev_h1</label>
</div>
@endcomponent

@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'prev_h2Landing'])
<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputPrev_h2" type="text" name="prev_h2" value="{{$landing->prev_h2 ?? old('prev_h2')}}" placeholder=".">
    <label class="Abs" for="inputPrev_h2">@svg('plus')prev_h2</label>
</div>
<div class="_shell x-hr Form -S / vol-Abs / _OpenLvl_2">
    <input id="inputPrev_h2_en" type="text" name="en_prev_h2" value="{{$landing->en_prev_h2 ?? old('en_prev_h2')}}" placeholder=".">
    <label class="Abs" for="inputPrev_h2_en">@svg('plus')en_prev_h2</label>
</div>
@endcomponent