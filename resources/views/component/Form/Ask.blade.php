{{-- <div id="divFormAsk" class="I aura x-23061425 / -Black / relative index space-s round-m">

    <div class="Abs -all x-bg / _indexMin"></div>

    <div class="Article aura / relative">
        <div class="paragraph"></div>
        <div class="Font / space-s">
            <div class="_h">Только спросить</div>
        </div>
        <div class="paragraph"></div>
        <div class="x-bg2 / space round">
            @include('component.Form.vol.ask')
        </div>
        <div class="paragraphX2"></div>
    </div>
    
</div> --}}


<?
	$id_form_ask = $id_form_ask ?? null;
?>

<form id="{{$id_form_ask ?? 'form_ask'}}" class="{{$css ?? 'Form'}}" method="POST" action="{{route($route ?? 'sms.storeask')}}" enctype="multipart/form-data">
	@csrf
	@include('component.Form._brick.input.bd_min')
	@include('component.Form._brick.input.spam')
	
		<input type="hidden" name="label" value="ask">
		<input type="hidden" name="reachgoal_id" value="formAsk">
		{{-- <input type="hidden" name="param_1" value="только спросить"> --}}
		 
		<div class="{{$css_wrap ?? 'space'}}">
			{!!$slot ?? ''!!}
			<div class="_shell @error('sms','newAsk') Error Anime vol-shake_hor @enderror">
		
				@error('sms','newAsk')
					<div class="_anime / Abs / Nameplate -rt / familySamolet / _anime">{{$errors->newAsk->first('sms')}}</div>
				@enderror
		
				<textarea id="textarea_{{$id ?? 'Ask'}}" class="{{$textarea_css ?? 'round space'}}" name="sms" maxlength="850" rows="12" placeholder="{{$placeholder ?? 'Напишите ваш вопрос'}}...">{{old('sms')}}</textarea>
			</div>
		</div>
		<div class="_footer / space round-s">
			<button class="Btn cC -S slim / round-s">
				<span class="_x flex">
					<svg class="Ico -S / mr-2" viewBox="0 0 24 24" fill="currentColor"><path d="M5.57 20.292a.87.87 0 001.295.757l14.741-8.292a.87.87 0 000-1.515L6.866 2.95a.87.87 0 00-1.296.758v2.464l5.157 1.516a.65.65 0 11-.367 1.248L3.85 7.02a.76.76 0 00-.91 1.028l1.403 3.301h8.832a.65.65 0 110 1.3H4.343L2.94 15.951a.76.76 0 00.89 1.034l6.53-1.92a.65.65 0 01.367 1.247L5.57 17.828v2.464z"></path></svg>
					<span class="content-s">
						отправить
					</span>
				</span>
				<span class="none">Ошибка! Проверьте данные</span>
			</button>
		</div>
</form>

@if ($errors->newAsk->any())
@push('js-bottom-solo')
<script>
	const element = document.getElementById('form_ask')
	const topPos = element.getBoundingClientRect().top + window.pageYOffset - 80

	window.scrollTo({
		top: topPos,
		behavior: 'smooth'
	})
</script>
@endpush
@endif