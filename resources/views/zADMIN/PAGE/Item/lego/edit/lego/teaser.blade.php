<div class="_shell _h1 / vol-Abs label-insideInput / net">
    <input id="inputH2" type="text" name="h2" value="{{$item->h2 ?? old('h2')}}" placeholder=".">
    <label class="Abs" for="inputH2">@svg('plus')Заголовок h2</label>
</div>

<div class="_shell / vol-Abs label-insideInput net">
    <input id="inputName_tag" type="text" name="name_tag" value="{{$item->name_tag ?? old('name_tag')}}" placeholder=".">
    <label class="Abs" for="inputName_tag">@svg('plus')name_tag</label>
</div>

<div class="_shell / vol-Abs label-insideInput / net">
    <input id="inputName_seo" type="text" name="name_seo" value="{{$item->name_seo ?? old('name_seo')}}" placeholder=".">
    <label class="Abs" for="inputName_seo">@svg('plus')name_seo</label>
</div>

<div class="_shell / vol-Abs label-insideInput / net">
    <input id="inputBread_name" type="text" name="bread_name" value="{{$item->bread_name ?? old('bread_name')}}" placeholder=".">
    <label class="Abs" for="inputBread_name">@svg('plus')bread_name</label>
</div>

<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputPrev_h1" type="text" name="prev_h1" value="{{$item->prev_h1 ?? old('prev_h1')}}" placeholder=".">
    <label class="Abs" for="inputPrev_h1">@svg('plus')prev_h1</label>
</div>

<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputPrev_h2" type="text" name="prev_h2" value="{{$item->prev_h2 ?? old('prev_h2')}}" placeholder=".">
    <label class="Abs" for="inputPrev_h2">@svg('plus')prev_h2</label>
</div>

<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputPrev_p" type="text" name="prev_p" value="{{$item->prev_p ?? old('prev_p')}}" placeholder=".">
    <label class="Abs" for="inputPrev_p">@svg('plus')prev_p</label>
</div>