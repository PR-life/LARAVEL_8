@extends('zADMIN._schema.zPlura')

@section('title')данные профиля: {{$face->id}} @endsection

@push('js-bottom-link')
	@include('_.src.link.js.inputmask')
@endpush

@push('js-bottom-solo')
    <script>
        // Применяем маску к полю ввода
        Inputmask({
            mask: "+7 (999) 999-99-99",
            placeholder: "_",
            showMaskOnHover: false,
            showMaskOnFocus: true
        }).mask(document.getElementById('inputPhone'));
 
    </script>
    <script>
        // document.getElementById('inputPhone').addEventListener('input', function(event) {
        //     const input = event.target;
        //     let value = input.value;

        //     // Удаляем все символы, кроме цифр
        //     value = value.replace(/\D/g, '');

        //     // Если первая цифра 7, заменяем ее на +7
        //     if (value.startsWith('7')) {
        //         value = '+7' + value.slice(1);
        //     } else {
        //         value = '+7' + value;
        //     }

        //     // Форматируем значение
        //     value = value.replace(/(\+7)(\d{3})(\d{3})(\d{2})(\d{2})/, '$1 ($2) $3-$4-$5');

        //     // Обновляем значение поля ввода
        //     input.value = value;
        // });
    </script>
@endpush


@push('addBread')
	<li>
		<span>
			<span class="content-xs">Plura</span>
		</span>
	</li>
	<li>
		<span>
			<span class="content-xs">Face</span>
		</span>
	</li>
@endpush

@section('content')
<div class="flex gender-{{$face->gender}} / relative">

	<div class="Flaber / Plura -aside">
		<div class="_flaber">
			<div style="min-height: 102vh"></div>
			<div class="Wings">
				<div class="_win -t">
					<div class="HWin / -Black">
						@include('zADMIN.PAGE.zPlura.lego.face.aside')
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="W-100">
		<div class="paragraph"></div>
		<div class="Plura -edit HWin / space-m">
			@include('zADMIN.PAGE.zPlura.lego.face.content')	
			<div class="HWin"></div>
		</div>
	</div>
</div>


@endsection