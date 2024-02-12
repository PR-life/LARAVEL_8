<div class="inline / {{$cssWrap ?? ''}}">
	<a class="Blog / flex dC / space-m round / {{$css ?? 'bg-2'}}" href="{{env('TG_LINK', 'https://t.me/prlifecom');}}" target="_blank">
	{{-- <a class="Blog / flex dC / space-m round / {{$css ?? 'bg-2'}}" href="{{__('_const/tornado.telegramLinkNews')}}" target="_blank"> --}}
		<div class="flex cI / cross-xxs">
			<div class="Ico -S/ round-s">
				@isset($svg)
					{!!$svg!!}
				@else
					@svg('telegramBg')
				@endisset
			</div>
			<div class="hMin / b600">{{$h1 ?? 'Подпишись на Telegram'}}</div>
		</div>
		<div class="paragraph-s"></div>
		<div class="paragraph-s"></div>
		<div>
			<div class="content">{!!$text ?? 'Акции, обзоры и другие новости компании'!!}</div>
		</div>
		@isset($btn)
		<div class="paragraph"></div>
		<div class="content flex cC">
			<span class="a">подписаться!</span>
		</div>
		@endisset
	</a>
</div>
{{-- <div class="inline">
	<a class="Blog / flex dC / bg-2 space round" href="https://t.me/detektivka" target="_blank">
		<div class="flex cI / cross-xxs">
			<div class="Ico -S/ round-s" style="background-color: #2aabee">
				@svg('telegram')
			</div>
			<div class="hMin">Подпишись на Telegram</div>
		</div>
		<div class="paragraph-s"></div>
		<div class="paragraph-s"></div>
		<div>
			<div class="content Grey">Консультации и инсайды. Честно и интересно. <br>Анализ текущих задач и примеры</div>
		</div>
	</a>
</div> --}}