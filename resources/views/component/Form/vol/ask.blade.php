<?
	$errorBag = $nameRequest ?? 'newAsk';
?>
@component('component.Form._wrap.index',['css' => $css])
	@slot('id', $id ?? 'Ask')
	@slot('route', route('sms.ask'))

	{!!$hidden ?? ''!!}

	<div class="{{$css_wrap ?? 'space'}}">
		{!!$slot ?? ''!!}
		<div class="_shell @error('ask',$errorBag) Error Anime vol-shake_hor @enderror">

			@error('ask',$errorBag)
				<div class="_anime / Abs / Nameplate -rt / familySamolet / _anime">{{$errors->$errorBag->first('ask')}}</div>
			@enderror

			<textarea id="textarea_{{$id ?? 'Ask'}}" class="{{$textarea_css ?? 'round space'}}" name="ask" maxlength="850" rows="12" placeholder="{{$placeholder ?? __('/_const/form.text')}}...">{{old('ask')}}</textarea>
		</div>
	</div>

	<div class="_footer / space round-s">
		<button class="Btn {{$cssBtn ?? 'cC -S slim / round-s'}}">
			<span class="_x flex">
				<svg class="Ico -S / mr-2" viewBox="0 0 24 24" fill="currentColor"><path d="M5.57 20.292a.87.87 0 001.295.757l14.741-8.292a.87.87 0 000-1.515L6.866 2.95a.87.87 0 00-1.296.758v2.464l5.157 1.516a.65.65 0 11-.367 1.248L3.85 7.02a.76.76 0 00-.91 1.028l1.403 3.301h8.832a.65.65 0 110 1.3H4.343L2.94 15.951a.76.76 0 00.89 1.034l6.53-1.92a.65.65 0 01.367 1.247L5.57 17.828v2.464z"></path></svg>
				<span class="content-s">
					{{__('/_const/form.send')}}
				</span>
			</span>
			<span class="none">{{__('/_const/form.errorSend')}}</span>
		</button>
	</div>
@endcomponent


@if ($errors->$errorBag->any())
<script>
	document.addEventListener("DOMContentLoaded", () => {
		// console.log(parseInt(body.style.getPropertyValue('--h'), 10))
		const element = document.getElementById('form_{{$id ?? 'Ask'}}').querySelector('.Error')
		const topPos = element.getBoundingClientRect().top - parseInt(body.style.getPropertyValue('--h'), 10) * .15
		// console.log(element)
		window.scrollTo({
			top: topPos,
			behavior: 'smooth'
		})
	});
</script>
@endif

{{-- 
@if (session('UpdateController'))
@push('Milk')
	@component('_.component.Message', ['class' => 'On noEvents'])
		@slot('cssSms')
		-blue -bottom Success
		@endslot
		@slot('heading')
			Отправлено!
		@endslot
		<div class="content Grey">
			<p>Отвечаем на вопросы:<sup>*</sup></p>
			<div class="paragraph-s"></div>
			<p>- рабочие дни, <span class="b600">08:00–19:00</span><br></p>
			<p>- суббота, <span class="b600">08:00–18:00</span></p>
			<div class="paragraph"></div>
			<div class="content-s">*по московскому времени</div>
		</div>
	@endcomponent
@endpush
@endif --}}