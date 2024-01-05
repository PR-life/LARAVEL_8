@extends('zJJ._shema.aside')
@section('title', 'Deep ')
@push('css-body', '-deep ')


@push('aside_10111826')
    @include('zJJ.menu.deep.index')
@endpush




@section('content')


<div class="I aura [ margin top ]">
	<div class="flex / Roll_mbl -edge -space -scrollbar / cross">


		@component('_wrap.Teaser.vol-comment')
			@slot('author', 'author')
			@slot('author_bottom_text', 'author_bottom_text')
			<div class="content">Teaser: vol-comment</div>
		@endcomponent

		@component('_wrap.Teaser.vol-comment')
			@slot('author', 'Мария Бажина')
			@slot('author_bottom_text', 'владелица IM-Club, Москва')
			<div class="content">Я работаю семь дней в неделю, почти без выходных, поэтому для меня главное достоинство Рекламной подписки — простота в привлечении клиентов. Подключила  и сразу увидела звонки и посещения на сайте.</div>
		@endcomponent

 
	</div>
</div>
	

<div class="I aura [ margin top ]">
	<div class="flex / Roll_mbl -edge -space -scrollbar / cross">


		@component('_wrap.Teaser.vol-direct')
			@slot('link', 'link')
			@slot('textTag', 'textTag')
			@slot('textBanner', 'textBanner')

			<div class="hMin b600">Teaser: vol-direct</div>
		@endcomponent	
		@component('_wrap.Teaser.vol-direct')
			@slot('link', '5555')
			@slot('textTag', 'О методе')
			@slot('textBanner', 'Про <br>Биорезонанс')

			<div class="hMin b600">Принцип работы диагностики организма. Какие приборы используют для биорезонансной терапии</div>
		@endcomponent

 
	</div>
</div>
	



<div class="I aura [ margin top ]">



	<div class="flex / Roll_mbl -edge -space -scrollbar / cross space bg-2">

		@component('_wrap.Teaser.vol-slide')
			@slot('text_back', 'text_back')
			<div class="h -lineHeight">Teaser</div>
			<div class="Max -h / hidden">
				<div class="content space-right">vol-slide</div>
			</div>
		@endcomponent



		@component('_wrap.Teaser.vol-slide')
			@slot('text_back', 'ePrivacy Regulation vs GDPR 4 Key Differences')
			<div class="hMin -lineHeight / b600">Data Subject Access Requests: Do's and Donts in Handling GDPR DSARs</div>
			<div class="Max -h -hS / hidden">
				<div class="content space-right">Data Subject Access Requests (DSARs) are one of the less-talked-about GDPR. Data Subject Access Requests (DSARs) are one of the less-talked-about GDPR.Data Subject Access Requests (DSARs) are one of the less-talked-about GDPR.Data Subject Access Requests (DSARs) are one of the less-talked-about GDPR.Data Subject Access Requests (DSARs) are one of the less-talked-about GDPR.Data Subject Access Requests (DSARs) are one of the less-talked-about GDPR.Data Subject Access Requests (DSARs) are one of the less-talked-about GDPR.Data Subject Access Requests (DSARs) are one of the less-talked-about GDPR.Data Subject Access Requests (DSARs) are one of the less-talked-about GDPR.</div>
			</div>
		@endcomponent

	</div>



<div class="HWin"></div>


@endsection