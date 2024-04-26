<div class="_shell x-hr Form -S / vol-Abs / net">
    <input id="inputPrev_h1" type="text" name="prev_h1" value="{{$landing->prev_h1 ?? old('prev_h1')}}" placeholder=".">
    <label class="Abs" for="inputPrev_h1">@svg('plus')prev_h1</label>
</div>


<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputPrev_h2" type="text" name="prev_h2" value="{{$landing->prev_h2 ?? old('prev_h2')}}" placeholder=".">
    <label class="Abs" for="inputPrev_h2">@svg('plus')prev_h2</label>
</div>

<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputPrev_p" type="text" name="prev_p" value="{{$landing->prev_p ?? old('prev_p')}}" placeholder=".">
    <label class="Abs" for="inputPrev_p">@svg('plus')prev_p</label>
</div>

<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputBreadName" type="text" name="bread_name" value="{{$Var->bread_name ?? old('bread_name')}}" placeholder=".">
    <label class="Abs" for="inputBreadName">@svg('plus')bread_name</label>
</div>