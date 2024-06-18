@extends('_schema.Vol.auth.index')


@section('content')


{{-- namespace App\Http\Controllers\Auth\RegisterController; --}}

<div class="Blog aura">
	<div class="h1">{{ __('Register') }}</div>
	<div class="padding top S"></div>
	<form class="Form" method="POST" action="{{ route('register') }}">
	    @csrf

	    <div class="_shell">
	        <label for="email">{{ __('Name') }}</label>
			<div class="paragraph-s"></div>
	        <input id="name" type="text" class="@error('email') Error @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
	        @error('name')
	            <div class="content Error" role="alert">
	                {{ $message }}
	            </div>
	         @enderror
	    </div>


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
	        <input id="password" type="password" class="@error('password') Error @enderror" name="password" required autocomplete="new-password">
	        @error('password')
	            <div class="content Error" role="alert">
	                {{ $message }}
	            </div>
	         @enderror
	    </div>

	    {{-- <div class="_shell">
	        <label for="password-confirm">{{ __('Confirm Password') }}</label>
			<div class="paragraph-s"></div>
	        <input id="password-confirm" type="password" name="password_confirm" required autocomplete="new-password">
	    </div> --}}

	    <div class="_shell">
	        <button type="submit" class="Btn cC">
	            {{ __('register') }}
	        </button>
	    </div>
	</form>
</div>

 <div class="margin top L"></div>
@endsection
