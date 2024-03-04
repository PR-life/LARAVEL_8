@extends('zADMIN._shema.edit')

@section('title')edit. Customer - {{$face->name}} @endsection

@include('zADMIN._bd._src.edit.min')


@push('addBread')
<li>
    <a href="{{route('admin.customer.index')}}">
        <span class="content-xs">Клиенты</span>
	</a>
</li>
{{-- <li>
    <span>
        <span class="content-xs">Статьи</span>
    </span>
</li> --}}
@endpush




@section('content')
 
<div class="I aura">
	@component('zADMIN.PAGE._wrap.form.edit', ['route' => route('admin.customer.update', $face->id), 'css' => '-customer'])
		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.customer.index'])

		<div class="_shell / net">
			@include('zADMIN._bd.edit.face',['Var'=> $face])
		</div>
 
		@include('zADMIN/PAGE/Customer/_lego/edit/lego/Relationships')
		<div class="paragraph"></div>
 


		<div class="Golden -left_60 / wrap-customer">
			<div class="_l">
				@include('zADMIN.PAGE.Customer._lego.edit.body')
			</div>
			<div class="_r / space">
				<div class="hill"></div>

				{{-- https://rubashkin.su/muzhskie-rubashki/ --}}
				{{-- https://ecco.ru/catalog/500164/02178/ --}}


				@component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms')
					@slot('id', 'size_1')
					@slot('name', 'Сорочка')
			
					<dl class="-dot Void / Form -XS / net">
						<dt class="content-xs Grey">Обхват шеи</dt>
						<dd><span class="content-xs"><input id="inputCategory_id" type="text" name="category_id" value="41-42" placeholder="..."></span></dd>
						<dt class="content-xs Grey">Обхват груди</dt>
						<dd><span class="content-xs"><input id="inputCategory_id" type="text" name="category_id" value="118" placeholder="..."></span></dd>
						<dt class="content-xs Grey">Обхват талии</dt>
						<dd><span class="content-xs"><input id="inputCategory_id" type="text" name="category_id" value="116" placeholder="..."></span></dd>
						<dt class="content-xs Grey">Длина по спине</dt>
						<dd><span class="content-xs"><input id="inputCategory_id" type="text" name="category_id" value="82" placeholder="..."></span></dd>
						<dt class="content-xs Grey">Длина рукавов</dt>
						<dd><span class="content-xs"><input id="inputCategory_id" type="text" name="category_id" value="64" placeholder="..."></span></dd>
					</dl>
			
				@endcomponent
				@component('zADMIN.PAGE._wrap.skill_open.tool_FlaberSms')
					@slot('id', 'size_2')
					@slot('name', 'Обувь')


					<ul class="sizes-list">
                        
                        
                        
                        <li title="Узнать о поступлении" class="item none show-ipopap" data-source="remote-load" data-param="500164/02178" data-content-id="notification-subscribe" data-size="39"><span class="not-stock">39<span class="tip">Узнать о поступлении</span></span></li>
                        
                        <li class="item" data-size="40">40</li>
                        
                        
                        
                        <li class="item" data-size="41">41</li>
                        
                        
                        
                        <li class="item" data-size="42">42</li>
                        
                        
                        
                        <li class="item" data-size="43">43</li>
                        
                        
                        
                        <li class="item" data-size="44">44</li>
                        
                        
                        
                        <li class="item" data-size="45">45</li>
                        
                        
                        
                        <li class="item" data-size="46">46</li>
                        
                        
                        
                        <li class="item" data-size="47">47</li>
                        
                        
                        
                        
                        
                        <li title="Узнать о поступлении" class="item none show-ipopap" data-source="remote-load" data-param="500164/02178" data-content-id="notification-subscribe" data-size="48"><span class="not-stock">48<span class="tip">Узнать о поступлении</span></span></li>
                        
                        
                        
                        <li title="Узнать о поступлении" class="item none show-ipopap" data-source="remote-load" data-param="500164/02178" data-content-id="notification-subscribe" data-size="49"><span class="not-stock">49<span class="tip">Узнать о поступлении</span></span></li>
                        
                        
                        
                        <li title="Узнать о поступлении" class="item none show-ipopap" data-source="remote-load" data-param="500164/02178" data-content-id="notification-subscribe" data-size="50"><span class="not-stock">50<span class="tip">Узнать о поступлении</span></span></li>
                        
                    </ul>



				@endcomponent


				
			</div>
		</div>


		{{-- @component('zADMIN.PAGE._wrap.Flaber.edit')
			@slot('flaber')
				@include('zADMIN.PAGE.Paper._lego.edit.sms')	
			@endslot --}}
			{{-- <div class="paragraphX2"></div> --}}
			{{-- @include('zADMIN.PAGE.Customer._lego.edit.body') --}}
		{{-- @endcomponent --}}



		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')
	@endcomponent 
</div>


@endsection