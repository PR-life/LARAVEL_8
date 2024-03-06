@extends('zADMIN._shema.edit')

@section('title')edit: Task @endsection
 
 

@prepend('addBread')
    <li><a class="content-xs" href="{{route('admin.oogway.morda')}}">Oogway</a></li>
    <li><a class="content-xs" href="{{route('admin.oogway.task.index')}}">Task</a></li>
    <li><span class="content-xs">edit</span></li>
@endprepend
 
 
 
@section('content')

<div class="hill-s"></div>

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.edit', ['route' => route('admin.oogway.task.update', $task->id), 'css' => '-task'])

		{{-- @include('zADMIN._brick.bar.v.edit', ['route' => route('admin.oogway.task.index')]) --}}
		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.oogway.task.index'])


		<div class="_shell">
			@include('zADMIN._bd.edit.task',['Var'=> $task])
		</div>


		
		@component('zADMIN.PAGE._wrap.Flaber.edit')

			@slot('flaber')
				@include('zADMIN.OOGWAY.PAGE.Task._lego.edit.sms')
			@endslot

			{{-- @component('zADMIN.PAGE._wrap.tollsFirst')
				<div class="flex / menu -tile -S x-09081236 / cross-xs">
					@include('zADMIN.PAGE._brick.form.go_mod_talk', ['Var' => $sms->go_mod_talk])
					@include('zADMIN.PAGE._brick.form.go_page_sms', ['Var' => $sms->published])
				</div>
			@endcomponent --}}
			<div class="paragraphX2"></div>

			@include('zADMIN.OOGWAY.PAGE.Task._lego.edit.body')





			{{-- @include('zADMIN.PAGE.Sms.lego.edit.body')	 --}}

		@endcomponent



		{{-- @component('zADMIN.PAGE._wrap.Reg.edit')
			@slot('Sms')
				@include('zADMIN.PAGE.Sms.lego.edit.sms')	
			@endslot


			
 


		@endcomponent --}}



		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>

 


@endsection
