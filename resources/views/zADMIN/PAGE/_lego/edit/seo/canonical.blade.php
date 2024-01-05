@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' =>'title'. (class_basename($Var)), 'cssWrap' => 'net'])
<div class="_shell x-hr Form -S / vol-Abs / net">
    <input id="inputTitle" type="text" name="title" value="{{$Var->title ?? old('title')}}" placeholder=".">
    <label class="Abs" for="inputTitle">@svg('plus')title</label>
</div>
<div class="_shell x-hr Form -S / vol-Abs / _OpenLvl_2">
    <input id="inputTitle_en" type="text" name="en_title" value="{{$Var->en_title ?? old('en_title')}}" placeholder=".">
    <label class="Abs" for="inputTitle_en">@svg('plus')en_title</label>
</div>
@endcomponent
 
@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' =>'description'. (class_basename($Var)),])
<div class="net">
    <label class="content-xs pl-2" style="color: #677788">description</label>
    <div class="paragraph-s"></div>
</div>
<div class="_shell / net">
    <textarea name="description" placeholder='текст...'>{{$Var->description ?? old('description')}}</textarea>
</div>
<div class="_shell / net / _OpenLvl_2">
    <textarea name="en_description" placeholder='text...'>{{$Var->en_description ?? old('en_description')}}</textarea>
</div>
@endcomponent


@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' =>'keyword'. (class_basename($Var)),])
<div class="net">
    <label class="content-xs pl-2" style="color: #677788">keyword</label>
    <div class="paragraph-s"></div>
</div>
<div class="_shell / net">
    <textarea name="keywords" placeholder='текст...'>{{$Var->keywords ?? old('keywords')}}</textarea>
</div>
<div class="_shell / net / _OpenLvl_2">
    <textarea name="en_keywords" placeholder='text...'>{{$Var->en_keywords ?? old('en_keywords')}}</textarea>
</div>
@endcomponent

@component('zADMIN.PAGE._wrap.form._shell.Lang', ['id' =>'canonical'. (class_basename($Var)), 'cssWrap' => 'net'])
<div class="_shell x-hr Form -S / vol-Abs / net">
    <input id="inputCanonical" type="text" name="canonical" value="{{$Var->canonical ?? old('canonical')}}" placeholder=".">
    <label class="Abs" for="inputCanonical">@svg('plus')canonical</label>
</div>
<div class="_shell x-hr Form -S / vol-Abs / _OpenLvl_2">
    <input id="inputCanonical_en" type="text" name="en_canonical" value="{{$Var->en_canonical ?? old('en_canonical')}}" placeholder=".">
    <label class="Abs" for="inputCanonical_en">@svg('plus')en_canonical</label>
</div>
@endcomponent