@component('_wrap.Geek', ['class' => '-noJS / Family-OpenSans'])
<div class="Void Edge-leftM_PC edge-left">		

	@guest()
	<ul class="menu">
		<li><a href="{{route('login')}}">войти</a></li>
		<li><a href="{{route('register')}}">регистрация</a></li>
	</ul>
	 
	@endguest

	<div class="h b600">Обратная связь</div>
	<div class="paragraphX2"></div>
	<div class="void Contact">
		{{-- @include('zAsgrupp._lego.contact.Geek') --}}
		<div class="Edge-right_PC edge-right">
			<span class="Btn cC round" @include('xAsgrupp._brick.btn._js.ask.index')>только спросить</span>
		</div>
	</div>
</div>
@endcomponent