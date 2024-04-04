@component('zADMIN._wrap.form._shell.Lang', ['id' => 'prev_h1Post', 'cssWrap' => 'net'])
<div class="_shell x-hr Form -S / vol-Abs / net">
    <input id="inputPrev_h1" type="text" name="prev_h1" value="{{$post->prev_h1 ?? old('prev_h1')}}" placeholder=".">
    <label class="Abs" for="inputPrev_h1">@svg('plus')prev_h1</label>
</div>
<div class="none on / _shell x-hr Form -S / vol-Abs">
    <input id="inputPrev_h1_en" type="text" name="en_prev_h1" value="{{$post->en_prev_h1 ?? old('en_prev_h1')}}" placeholder=".">
    <label class="Abs" for="inputPrev_h1_en">@svg('plus')en_prev_h1</label>
</div>
@endcomponent

@component('zADMIN._wrap.form._shell.Lang', ['id' => 'prev_h2Post'])
<div class="_shell x-hr Form -S / vol-Abs / net">
    <input id="inputPrev_h2" type="text" name="prev_h2" value="{{$post->prev_h2 ?? old('prev_h2')}}" placeholder=".">
    <label class="Abs" for="inputPrev_h2">@svg('plus')prev_h2</label>
</div>
<div class="none on / _shell x-hr Form -S / vol-Abs">
    <input id="inputPrev_h2_en" type="text" name="en_prev_h2" value="{{$post->en_prev_h2 ?? old('en_prev_h2')}}" placeholder=".">
    <label class="Abs" for="inputPrev_h2_en">@svg('plus')en_prev_h2</label>
</div>
@endcomponent