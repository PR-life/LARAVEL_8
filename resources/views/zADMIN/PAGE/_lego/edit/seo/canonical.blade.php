@component('zADMIN._wrap.form._shell.Lang', ['id' =>'title'. (class_basename($Var)), 'cssWrap' => 'net'])
<div class="_shell x-hr Form -S / vol-Abs / net">
    <input id="inputTitle" type="text" name="title" value="{{$Var->title ?? old('title')}}" placeholder=".">
    <label class="Abs" for="inputTitle">@svg('plus')title</label>
</div>
<div class="none on / _shell x-hr Form -S / vol-Abs">
    <input id="inputTitle_en" type="text" name="en_title" value="{{$Var->en_title ?? old('en_title')}}" placeholder=".">
    <label class="Abs" for="inputTitle_en">@svg('plus')en_title</label>
</div>
@endcomponent
 
@component('zADMIN._wrap.form._shell.Lang', ['id' =>'description'. (class_basename($Var)),])
<div class="net">
    <label class="content-xs pl-2" style="color: #677788">description</label>
    <div class="paragraph-s"></div>
</div>
<div class="_shell / pl-2 net">
    <textarea class="round-s space" name="description" placeholder='текст...'>{{$Var->description ?? old('description')}}</textarea>
</div>
<div class="none on / _shell / pl-2 net">
    <textarea class="round-s space" name="en_description" placeholder='text...'>{{$Var->en_description ?? old('en_description')}}</textarea>
</div>

<div class="net">
    <div class="paragraph"></div>
    <div class="flex / cross-xs / space-left">
        @include('zADMIN._brick.media.emoji.index')
    </div>
</div>
@endcomponent

 
@component('zADMIN._wrap.form._shell.Lang', ['id' =>'keyword'. (class_basename($Var)),])
<div class="net">
    <label class="content-xs pl-2" style="color: #677788">keyword</label>
    <div class="paragraph-s"></div>
</div>
<div class="_shell / pl-2 net">
    <textarea class="round-s space" name="keywords" placeholder='текст...'>{{$Var->keywords ?? old('keywords')}}</textarea>
</div>
<div class="none on / _shell / pl-2 net">
    <textarea class="round-s space" name="en_keywords" placeholder='text...'>{{$Var->en_keywords ?? old('en_keywords')}}</textarea>
</div>
@endcomponent

<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputBreadName" type="text" name="bread_name" value="{{$Var->bread_name ?? old('bread_name')}}" placeholder=".">
    <label class="Abs" for="inputBreadName">@svg('plus')bread_name</label>
</div>

@component('zADMIN._wrap.form._shell.Lang', ['id' =>'canonical'. (class_basename($Var)), 'cssWrap' => 'net'])


    @component('zADMIN._wrap.form._shell.x_hr')
        @slot('cssNet', true)
        @slot('nameId','Canonical')
        @slot('name','canonical')
        {{$Var->canonical ?? '/'}}
    @endcomponent

    @component('zADMIN._wrap.form._shell.x_hr')
        {{-- @slot('cssNet', true) --}}
        @slot('nameId','Canonical_en')
        @slot('name','en_canonical')
        {{$Var->en_canonical ?? '/'}}
    @endcomponent


@endcomponent