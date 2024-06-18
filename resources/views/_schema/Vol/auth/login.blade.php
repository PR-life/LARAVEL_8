@extends('_schema.Vol.auth.INDEX')


@section('content')
<div class="Space -v">
<div class="Blog aura">
	<div class="Wings">
		<div class="_win -t / Font">
			<div class="_h -vw">{{ __('Login') }}</div>
		</div>
	</div>
	<div class="paragraph"></div>
	<form class="Form" method="POST" action="{{ route('login') }}">
	    @csrf
	    <div class="_shell">
	        <label for="email">{{ __('Email Address') }}</label>
			<div class="paragraph-s"></div>
	        <input id="email" type="email" class="@error('email') Error @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
	        @error('email')
				<div class="content-s / Error -text">
	                {{ $message }}
	            </div>
	         @enderror
	    </div>
	    <div class="_shell">
	        <label for="password">{{ __('Password') }}</label>
			<div class="paragraph-s"></div>
	        <input id="password" type="password" class="@error('password') Error @enderror" name="password" required autocomplete="current-password">
	        @error('password')
	            <div class="content-s / Error -text">
	                {{ $message }}
	            </div>
	         @enderror
	    </div>
		{{-- <div class="_shell">
	    
			<div class="flex cI">
				<input id="remember" class="checkbox" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
				<label for="remember">{{ __('Remember Me') }}</label>
			</div>
		</div> --}}
	    <div class="_shell">
	        <button type="submit" class="Btn cC">
	            {{ __('login') }}
	        </button>
			{{-- <div class="paragraph-s"></div>
	        @if (Route::has('password.request'))
	            <a class="content" href="{{ route('password.request') }}">
	                 {{ __('Forgot Your Password?') }}
	            </a>
	        @endif --}}
	    </div>
	</form>
</div>
</div>

 <div class="margin top L"></div>
@endsection
