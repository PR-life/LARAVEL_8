<div class="Article aura">
	<div class="_shell _name @error('name') Error @enderror / vol-Abs / net">
		<input id="inputName" type="text" name="name" value="{{$lego->name ?? old('name')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')Name</label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div>

	<div class="hill-s"></div>

	<div class="_shell _h1 / vol-Abs / net">
		<input id="inputH" type="text" name="h" value="{{$lego->h ?? old('h')}}" placeholder=".">
		<label class="Abs" for="inputH">@svg('plus')Заголовок h</label>
	</div>

</div>

<div class="paragraph"></div>

<div class="_shell _h1 / net">
	<input id="inputBladeName" type="text" name="bladeName" value="{{$lego->bladeName ?? old('bladeName')}}" placeholder="bladeName">
</div>


@if(!$lego->bladeName)
<div class="Article aura / pl-2">
	<div>
		@include('zADMIN._wrap.text.nameTextarea', ['name' => 'текст'])
		<div class="paragraph"></div>
		<div class="_shell / Note -lite">
			<textarea id="tinymce_1" name="text" placeholder='текст...'>{{$lego->text}}</textarea>
			{{-- @include('zADMIN._brick.cleanHTML') --}}
		</div>
	</div>

	<div class="hill"></div>
    @component('_wrap.__.summary')
        @slot('icoCloseName', 'closeRoll')
        @slot('id', 'wrapNote')
        @slot('name', 'блокнот')

		<div class="_shell / Note -lite">
			<textarea id="tinymce_note" name="note" placeholder='текст...'>{{$lego->note}}</textarea>
		</div>

    @endcomponent	
</div>

@endif