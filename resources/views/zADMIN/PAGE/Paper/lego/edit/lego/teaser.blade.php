@component('zADMIN._wrap.form._shell.x_hr')
    @slot('cssNet', true)
    @slot('nameId','Name_tag')
    @slot('name','name_tag')
    {{$paper->name_tag ?? old('name_tag')}}
@endcomponent
@component('zADMIN._wrap.form._shell.x_hr')
    {{-- @slot('cssNet', true) --}}
    @slot('nameId','Name_seo')
    @slot('name','name_seo')
    {{$paper->name_seo ?? old('name_seo')}}
@endcomponent
 


<div class="_shell x-hr Form -S / vol-Abs / net">
    <input id="inputPrev_h1" type="text" name="prev_h1" value="{{$paper->prev_h1 ?? old('prev_h1')}}" placeholder=".">
    <label class="Abs" for="inputPrev_h1">@svg('plus')prev_h1</label>
</div>


<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputPrev_h2" type="text" name="prev_h2" value="{{$paper->prev_h2 ?? old('prev_h2')}}" placeholder=".">
    <label class="Abs" for="inputPrev_h2">@svg('plus')prev_h2</label>
</div>

<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputPrev_p" type="text" name="prev_p" value="{{$paper->prev_p ?? old('prev_p')}}" placeholder=".">
    <label class="Abs" for="inputPrev_p">@svg('plus')prev_p</label>
</div>
<div class="_shell x-hr Form -S / vol-Abs">
    <input id="inputBread_name" type="text" name="bread_name" value="{{$paper->bread_name ?? old('bread_name')}}" placeholder=".">
    <label class="Abs" for="inputBread_name">@svg('plus')bread_name</label>
</div>


<div class="net">
    <div class="content-s Grey">св-ва</div>
    <div class="paragraphX2"></div>
    <div class="_shell x-hr Form -S / vol-Abs">
        <input id="inputPrev_veil" type="text" name="prev_veil" value="{{$paper->prev_veil ?? old('prev_veil')}}" placeholder=".">
        <label class="Abs" for="inputPrev_veil">@svg('plus')prev_veil</label>
    </div>
</div>