<div class="Article aura">

	<div class="_shell _name @error('name') Error @enderror / vol-Abs / net">
		<input id="inputName" type="text" name="name" value="{{$user->name ?? old('name')}}" placeholder=".">
		<label class="Abs" for="inputName">@svg('plus')Name</label>
		@error('name')
			<div class="Abs / Nameplate -rt">{{ $errors->first('name') }}</div>
		@enderror
	</div>

	<div class="paragraph"></div>

	
	<div class="_shell / vol-Abs label-insideInput / net">
		<input id="inputNickname" type="text" name="nickname" value="{{$user->nickname ?? old('nickname')}}" placeholder=".">
		<label class="Abs" for="inputNickname">@svg('plus')nickname</label>
	</div>
	<div class="_shell / vol-Abs label-insideInput / net">
		<input id="inputAvatar" type="text" name="avatar" value="{{$user->avatar ?? old('avatar')}}" placeholder=".">
		<label class="Abs" for="inputAvatar">@svg('plus')avatar</label>
	</div>

	<div class="paragraph"></div>
	<div class="_shell / vol-Abs label-insideInput / net">
		<input id="inputUserPar1" type="text" name="user_par_1" value="{{$user->user_par_1 ?? old('user_par_1')}}" placeholder=".">
		<label class="Abs" for="inputUserPar1">@svg('plus')user_par_1</label>
	</div>
	<div class="_shell / vol-Abs label-insideInput / net">
		<input id="inputUserPar2" type="text" name="user_par_2" value="{{$user->user_par_2 ?? old('user_par_2')}}" placeholder=".">
		<label class="Abs" for="inputUserPar2">@svg('plus')user_par_2</label>
	</div>
	<div class="_shell / vol-Abs label-insideInput / net">
		<input id="inputUserPar3" type="text" name="user_par_3" value="{{$user->user_par_3 ?? old('user_par_3')}}" placeholder=".">
		<label class="Abs" for="inputUserPar3">@svg('plus')user_par_3</label>
	</div>
</div>

 

