@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'prev_nameTagCategory', 'cssWrap' => 'net'])
<div class="_shell x-hr Form -S / vol-Abs / net">
    <input id="inputName_tag" type="text" name="name_tag" value="{{$category->name_tag ?? old('name_tag')}}" placeholder=".">
    <label class="Abs" for="inputName_tag">@svg('plus')name_tag</label>
</div>
<div class="_shell x-hr Form -S / vol-Abs / _OpenLvl_2">
    <input id="inputName_tag_en" type="text" name="en_name_tag" value="{{$category->en_name_tag ?? old('en_name_tag')}}" placeholder=".">
    <label class="Abs" for="inputName_tag_en">@svg('plus')en_name_tag</label>
</div>
@endcomponent

@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' => 'prev_nameSeoCategory'])
<div class="_shell x-hr Form -S / vol-Abs / net">
    <input id="inputName_seo" type="text" name="name_seo" value="{{$category->name_seo ?? old('name_seo')}}" placeholder=".">
    <label class="Abs" for="inputName_seo">@svg('plus')name_seo</label>
</div>
<div class="_shell x-hr Form -S / vol-Abs / _OpenLvl_2">
    <input id="inputName_seo_en" type="text" name="en_name_seo" value="{{$category->en_name_seo ?? old('en_name_seo')}}" placeholder=".">
    <label class="Abs" for="inputName_seo_en">@svg('plus')en_name_seo</label>
</div>
@endcomponent

<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputString_1" type="text" name="string_1" value="{{$category->string_1 ?? old('string_1')}}" placeholder=".">
    <label class="Abs" for="inputString_1">@svg('plus')string_1</label>
</div>