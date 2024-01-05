
<div class="menu -fix flex bC index">

    <div class="_ico -home / OnOff {!! request()->routeIs('sinnergems.morda') ? 'on' : 'off' !!}">
		<a href="{-{route('sinnergems.morda')}}" class="W-100 H-100 / flex dC cC cI">
			<span class="flex dC cI">
				<span class="Ico -S flex / _Close">@svg('home')</span>				
				<span class="content-s / _Open">Главная</span>
				<span class="_dot flex / Ico -S / _Open"></span>
			</span>
		</a>
	</div>
	
    <div class="_ico -catalog / OnOff {!! request()->routeIs('sinnergems.catalog.index') ? 'on' : 'off' !!}">
		<a href="{-{route('sinnergems.catalog.index')}}" class="W-100 H-100 / flex dC cC cI">
			<span class="flex dC cI">
				<span class="Ico -S flex / _Close">@svg('catalog')</span>				
				<span class="content-s / _Open">Каталог</span>
				<span class="_dot flex / Ico -S / _Open"></span>
			</span>
		</a>
	</div>


	<div class="_ico -burger / flex cI cC" data-click data-localstorage="firstNo">
		<label for="inputMenuMain" class="flex cC cI">
			<span class="Hamburger -minus">
            	<span class="_inner"></span>
          	</span>	
		</label>
	</div>
	{{-- <div class="_ico -burger" data-click data-localstorage="firstNo">
		<label for="inputMenuMain" class="flex cC cI">
			<span class="Hamburger -minus">
            	<span class="_inner"></span>
          	</span>	
		</label>
	</div> --}}

    <div class="_ico -favorite / OnOff {!! request()->routeIs('sinnergems.favorite.index') ? 'on' : 'off' !!}">
		<a href="{-{route('sinnergems.favorite.index')}}" class="W-100 H-100 / flex dC cC cI">
			<span class="flex dC cI">
				<span class="Ico -S flex / _Close">@svg('favorite')</span>				
				<span class="content-s / _Open">Закладки</span>
				<span class="_dot flex / Ico -S / _Open"></span>
			</span>
		</a>
	</div>

	<div class="_ico -room / OnOff {!! request()->routeIs('sinnergems.room.index') ? 'on' : 'off' !!}">
		<a href="{-{route('sinnergems.room.index')}}" class="W-100 H-100 / flex dC cC cI">
			<span class="flex dC cI">
				<span class="Ico -S flex / _Close">@svg('room')</span>				
				<span class="content-s / _Open">Кабинет</span>
				<span class="_dot flex / Ico -S / _Open"></span>
			</span>
		</a>
	</div>


	<div class="Abs _bg _indexMin"></div>
</div>

