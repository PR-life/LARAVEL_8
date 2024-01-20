<div class="_shell x-hr Form -S / vol-Abs / net">
    <input id="inputTitle" type="text" name="title" value="{{$Var->title ?? old('title')}}" placeholder=".">
    <label class="Abs" for="inputTitle">@svg('plus')title</label>
</div>

<div class="void-m">
    <div class="net">
        <label class="content-xs pl-2" style="color: #677788">description</label>
        <div class="paragraph-s"></div>
    </div>
    <div class="_shell / net">
        <textarea name="description" placeholder='текст...'>{{$Var->description ?? old('description')}}</textarea>
    </div>
</div>

<div class="flex / cross-xs / space-left">
    @include('zADMIN._brick.media.emoji.index')
</div>

<div class="void-m">
    <div class="net">
        <label class="content-xs pl-2" style="color: #677788">keyword</label>
        <div class="paragraph-s"></div>
    </div>
    <div class="_shell / net">
        <textarea name="keywords" placeholder='текст...'>{{$Var->keywords ?? old('keywords')}}</textarea>
    </div>
</div>

<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputBreadName" type="text" name="bread_name" value="{{$Var->bread_name ?? old('bread_name')}}" placeholder=".">
    <label class="Abs" for="inputBreadName">@svg('plus')bread_name</label>
</div>

<div class="_shell x-hr Form -S / vol-Abs / net">
    <input id="inputCanonical" type="text" name="canonical" value="{{$Var->canonical ?? old('canonical')}}" placeholder=".">
    <label class="Abs" for="inputCanonical">@svg('plus')canonical</label>
</div>
