<div class="_shell _h1 / vol-Abs label-insideInput / net">
    <input id="inputH2" type="text" name="h2" value="{{$product->h2 ?? old('h2')}}" placeholder=".">
    <label class="Abs" for="inputH2">@svg('plus')Заголовок h2</label>
</div>

<div class="_shell / vol-Abs label-insideInput net">
    <input id="inputName_tag" type="text" name="name_tag" value="{{$product->name_tag ?? old('name_tag')}}" placeholder=".">
    <label class="Abs" for="inputName_tag">@svg('plus')name_tag</label>
</div>

<div class="_shell / vol-Abs label-insideInput / net">
    <input id="inputName_seo" type="text" name="name_seo" value="{{$product->name_seo ?? old('name_seo')}}" placeholder=".">
    <label class="Abs" for="inputName_seo">@svg('plus')name_seo</label>
</div>

<div class="_shell / vol-Abs label-insideInput / net">
    <input id="inputBread_name" type="text" name="bread_name" value="{{$product->bread_name ?? old('bread_name')}}" placeholder=".">
    <label class="Abs" for="inputBread_name">@svg('plus')bread_name</label>
</div>