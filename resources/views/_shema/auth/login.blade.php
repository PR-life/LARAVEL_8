@extends('_shema.auth.index')



@section('content')

<div class="Blog aura">
	<div class="h1">{{ __('Login') }}</div>
	<div class="padding top S"></div>
	<form class="Form" method="POST" action="{{ route('login') }}">
	    @csrf
	    <div class="_shell">
	        <label for="email">{{ __('Email Address') }}</label>
			<div class="paragraph-s"></div>
	        <input id="email" type="email" class="@error('email') Error @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
	        @error('email')
	            <div class="content Error" role="alert">
	                {{ $message }}
	            </div>
	         @enderror
	    </div>
	    <div class="_shell">
	        <label for="password">{{ __('Password') }}</label>
			<div class="paragraph-s"></div>
	        <input id="password" type="password" class="@error('password') Error @enderror" name="password" required autocomplete="current-password">
	        @error('password')
	            <div class="content Error" role="alert">
	                {{ $message }}
	            </div>
	         @enderror
	    </div>
		<div class="_shell">
	        <label for="remember">{{ __('Remember Me') }}</label>
			<div class="paragraph-s"></div>
			<div class="flex cI">
				<div class="Checkbox Vol-1">
					<div class="check button r">
						<input id="remember" class="checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
						<div class="knob"></div>
						<div class="bg"></div>
					</div>
				</div>
			</div>
		</div>
	    <div class="_shell">
	        <button type="submit" class="Btn cC">
	            {{ __('login') }}
	        </button>
			<div class="paragraph-s"></div>
	        @if (Route::has('password.request'))
	            <a class="content" href="{{ route('password.request') }}">
	                 {{ __('Forgot Your Password?') }}
	            </a>
	        @endif
	    </div>
	</form>
</div>

 <div class="margin top L"></div>
@endsection
