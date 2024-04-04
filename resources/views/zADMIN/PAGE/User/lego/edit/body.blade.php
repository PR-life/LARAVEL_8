<div class="void">
	<div class="_shell _name @error('name') Error @enderror / vol-Abs label-insideInput">
		<input id="inputName" type="text" name="name" value="{{$user->name ?? old('name')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')Имя</label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div>
	
	<div>
		<div class="_shell _name @error('nickname') Error @enderror / vol-Abs label-insideInput">
			<input id="inputNickname" type="text" name="nickname" value="{{$user->nickname ?? old('nickname')}}" placeholder=".">
			<label class="Abs" for="inputNickname">@svg('plus')nickname</label>
			@error('nickname')
				<div class="Abs / Nameplate -rt">{{ $errors->first('nickname') }}</div>
			@enderror
		</div>
		<div class="Info -ico ico-left ico-xs vol-2">
			<div class="content-s / Grey -c30">Это имя отображается в ваших отзывах и комментариях по умолчанию</div>
		</div>
	</div>
</div>




<div class="hill-s"></div>

	{{-- @component('zADMIN._wrap.Tab.edit.body')
		@slot('tab_1')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE.Post.lego.edit.lego.teaser')
		@endslot
		@slot('tab_2')
			<div class="paragraphX2 / net"></div>
			@include('zADMIN.PAGE._lego.edit.seo.canonical', ['Var' => $user, 'nameModel' => 'Post'])
		@endslot
	@endcomponent --}}
 
 