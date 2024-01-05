@extends('zJJ._shema.aside')
@section('title', 'Deep ')
@push('css-body', '-deep ')


@push('aside_10111826')
    @include('zJJ.menu.deep.index')
@endpush




@section('content')


<div class="I aura [ margin top ]">
	@component('_wrap.Fluid.index', ['css' => 'x-0211','cssBadge' => '-uppercase -bold -blue'])
		<div class="Font -void -voidS / center-text">
			<div class="_h / fluid-h">Design collaboration made easy</div>
			<div class="_void / content">Evrybo makes it super easy to invite your teammates and clients <br>to leave comments directly on your designs.</div>
		</div>
	@endcomponent
</div>

<style>
	.x-0211 {
		--c-Fluid: #fff;
		--c-Fluid-text: #788ca0;
		background-color: #0e0e12;
	}
</style>



<div class="I aura [ margin top ]">
	@component('_wrap.Fluid.index')
		<div class="Font -void --voidS / center-text">
			<div class="_h / fluid-h / familyCanela">Public Relations</div>
			<div class="_void / content">Создаем личное пространтство в виртуальной среде</div>
			<div class="_void inline">
				<div class="Btn cC / round-s" style="background-color: #0569ff; color:#fff">Request Demo</div>
			</div>
		</div>
	@endcomponent
</div>

<div class="I aura [ margin top ]">
	@component('_wrap.Fluid.index', ['cssBadge' => '-uppercase -bold -green'])
	<div class="Font -void -voidS / center-text">
		<div class="_h / fluid-h">Design collaboration made easy</div>
		<div class="_void / content">Evrybo makes it super easy to invite your teammates and clients <br>to leave comments directly on your designs.</div>
	</div>
	@endcomponent
</div>


@endsection