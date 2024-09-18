<div class="{{$css ?? ''}}">
 		
	<span class="content-xxxs / Ellipsis var-2 / Grey">
		@isset($slot)
			{!!$slot!!}
		@else
		Нажимая кнопку «Отправить», вы подтверждаете свое согласие на <a href="{{route('fz.agreement')}}">обработку персональных данных.</a>
		@endif
	</span>
</div>