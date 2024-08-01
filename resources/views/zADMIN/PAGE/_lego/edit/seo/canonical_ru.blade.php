@if($Var->mockup != 'link')
@component('zADMIN._wrap.form._shell.x_hr')
    @slot('cssNet', true)
    @slot('nameId','Title')
    @slot('name','title')
    {{$Var->title ?? old('title')}}
@endcomponent

<div class="_shell">
    <div class="net">
        <label class="content-xs pl-2" style="color: #677788">description</label>
        <div class="paragraph-s"></div>
    </div>
    <div class="_shell / net">
        <textarea name="description" placeholder='текст...'>{{$Var->description ?? old('description')}}</textarea>
    </div>
    <div class="paragraph-s"></div>
    <div class="flex / cross-xs / space-left">
        @include('zADMIN._brick.media.emoji.index')
    </div>
    <div class="paragraph"></div>
</div>
@endif
@component('zADMIN._wrap.form._shell.x_hr')
    {{-- @slot('cssNet', true) --}}
    @slot('nameId','Canonical')
    @slot('name','canonical')
    {{$Var->canonical ?? '/'}}
@endcomponent



<div class="Details transparent / space">
    <details>
		<summary><span>keywords</span><i></i></summary>
        <div class="_shell Article aura / Note -lite">
            <textarea name="keywords" placeholder="текст...">{{$Var->keywords ?? old('keywords')}}</textarea>
        </div>
	</details>
</div>