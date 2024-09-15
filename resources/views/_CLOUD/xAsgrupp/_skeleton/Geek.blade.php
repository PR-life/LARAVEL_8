@component('_wrap.Geek', ['class' => '-noJS / Family-OpenSans'])
<div class="Void Edge-leftM_PC edge-left">		

	@guest()
	<ul class="menu">
		<li><a href="">войти</a></li>
		<li><a href="">регистрация</a></li>
	</ul>
	 
	@endguest

	<div class="h b600">Обратная связь</div>
	<div class="paragraphX2"></div>
	<div class="void Contact">
		{{-- @include('zAsgrupp._lego.contact.Geek') --}}
		<div class="Edge-right_PC edge-right">
			<a href="" class="Btn cC round">только спросить</a>
		</div>
	</div>
</div>
@endcomponent