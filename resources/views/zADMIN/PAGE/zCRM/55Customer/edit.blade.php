@extends('zADMIN._schema.edit')

@section('title')edit. Customer - {{$face->name}} @endsection


@push('addBread')
	<li>
		<a href="{{route('admin.crm.customer.index')}}">
			<span class="content-xs">Клиенты</span>
		</a>
	</li>
	<li>
		<span>
			<span class="content-xs">Профиль</span>
		</span>
	</li>
@endpush




@section('content')
 
<div class="I aura / relative">
	@component('zADMIN._wrap.form.edit', ['route' => route('admin.crm.customer.update', $face->id), 'css' => '-customer'])
		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.crm.customer.index'])

		<div class="_shell / net">
			@include('zADMIN._bd.edit.face',['Var'=> $face])
		</div>
 
		{{-- @include('zADMIN/PAGE/Customer/_lego/edit/lego/Relationships') --}}
		{{-- <div class="paragraph"></div> --}}
 

		@component('_wrap.__.edit.customerFS')
			@slot('_rTop')
				<div id="Ruler" class="Abs -lt / noEvents Selection _indexMin">
					<div class="hill-s"></div>
				</div>
				@include('zFS.ruler')
			@endslot
			@slot('_r')
				{{-- https://rubashkin.su/muzhskie-rubashki/ --}}
				{{-- https://ecco.ru/catalog/500164/02178/ --}}
				<div class="hill"></div>
				<div class="void-s space-07031346">
					@include('zADMIN.PAGE.zCRM.Customer.lego.edit.right')
					<div class="flex cC cI [ margin top ]">
						<div class="content-s Grey -c30 / relative">

							<div class="Abs -left">
								<svg class="Ico Grey -c30 / mr-2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M12 3.75C16.6094 3.75 18.8475 5.35211 19.9796 7.06909C21.15 8.84417 21.25 10.9034 21.25 12C21.25 13.0966 21.15 15.1558 19.9796 16.9309C18.8475 18.6479 16.6094 20.25 12 20.25C7.39062 20.25 5.15246 18.6479 4.02038 16.9309C2.85 15.1558 2.75 13.0966 2.75 12C2.75 10.9034 2.85 8.84417 4.02038 7.06909C5.15246 5.35211 7.39062 3.75 12 3.75Z" stroke="currentColor" stroke-width="1.5"></path><rect x="7.63794" y="10.2881" width="6" height="2" rx="1" transform="rotate(20.6821 7.63794 10.2881)" fill="currentColor"></rect><rect x="17.2881" y="9.13257" width="7.5" height="2" rx="1" transform="rotate(135.369 17.2881 9.13257)" fill="currentColor"></rect>
									<path opacity=".1" fill-rule="evenodd" clip-rule="evenodd" d="M22 12C22 9.75 21.6154 3 12 3C2.38461 3 2 9.75 2 12C2 14.25 2.38461 21 12 21C21.6154 21 22 14.25 22 12Z" fill="#000"></path>
									<g class="x-10111458">
										<rect x="7.63794" y="10.2881" width="6" height="2" rx="1" transform="rotate(20.6821 7.63794 10.2881)" fill="currentColor"></rect>
										<rect x="17.2881" y="9.13257" width="7.5" height="2" rx="1" transform="rotate(135.369 17.2881 9.13257)" fill="currentColor"></rect>
									</g>
								</svg>
							</div>

							последние обновление
						</div>
					</div>
					<div class="content / center-text">3 месяца назад</div>
				</div>
				<div class="hill"></div>
			@endslot
			
			<div class="Abs -all / _bg _indexMin"></div>
			<div class="relative">
				@include('zADMIN.PAGE.zCRM.Customer.lego.edit.body')
			</div>
		@endcomponent

		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection