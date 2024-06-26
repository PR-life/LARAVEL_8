@extends('zADMIN._schema.edit')

@section('title')edit. User - {{$user->name}} @endsection


@push('addBread')
<li>
    <span>
        <span class="content-xs">Офис</span>
    </span>
</li>
<li>
    <a href="{{route('admin.user.index')}}">
        <span class="content-xs">Пользователи</span>
	</a>
</li>
@endpush




@section('content')

<div class="I aura">


	@component('zADMIN._wrap.form.edit', ['route' => route('admin.user.update', $user->id), 'css' => '-user'])


		{{-- @include('zADMIN._brick.bar.v.edit', ['route' => route('admin.post.index', ['shema' => request()->get('shema')])]) --}}
		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.user.index'])


		<div class="_shell / net">
			@include('zADMIN._bd.edit.min',['Var'=> $user])
		</div>

		<div class="bg-relationships / space">
			<div class="_shell / flex cross Min -h -M">
				<div class="flex cross">
					<div class="flex dC">
						<span class="content-xs Grey -c50">Роль</span>
						<div class="paragraph-s"></div>
						<select class="Min -w3" name="role">
							@foreach($roles as $id => $role)
							<option value="{{$id}}" {{$id == $user->role ? ' selected' : ''}}>
								{{$role}}
							</option>
							@endforeach
						</select>
						@error('role')
							<div class="content danger">{{$message}}</div>
						@enderror
					</div>
				</div>
			</div>
		</div>


		@component('_wrap.Flaber.admin.edit')

			@slot('flaber')
				@include('zADMIN.PAGE.User.lego.edit.sms')	
			@endslot

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.User.lego.edit.body')

		@endcomponent



		{{-- @component('zADMIN.PAGE._wrap.Reg.edit')
			@slot('Sms')
				@include('zADMIN.PAGE.Category.lego.edit.sms')	
			@endslot
		@endcomponent --}}



		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection


{{-- 

		<form class="Form -admin -shadow -user / Bar -left / index" method="POST" action="{{ route('admin.user.update', $user->id) }}" enctype="multipart/form-data">
			@csrf
			@method('PATCH')

			@include('_ADMIN.el.bar.v.edit')

			<div class="_shell">
				@include('_ADMIN.Bd.edit.min',['Var'=> $user])
			</div>
			
			<div class="_shell / flex cross Min -h -M">
				<div class="flex cross">
					<div class="flex dC">
						<label>Роль</label>
						<div class="paragraph-s"></div>
						<select class="Min -w3" name="role">
							@foreach($roles as $id => $role)
							<option value="{{$id}}" {{$id == $user->role ? ' selected' : ''}}>
								{{$role}}
							</option>
							@endforeach
						</select>
						@error('role')
							<div class="content danger">{{$message}}</div>
						@enderror
					</div>
				</div>
			</div>
			<div class="_shell -label">
				<input id="name" class="-an" type="text" name="name" value="{{$user->name}}" placeholder='.'>
				<label class="Abs Grey" for="name">Name</label>
				@error('name')
					<div class="Abs / Nameplate -rt">{{$message}}</div>
				@enderror
			</div>
			<div class="_shell -label">
				<input id="email" class="-an" type="text" name="email" value="{{$user->email}}" placeholder='.'>
				<label class="Abs Grey" for="email">Email</label>
				@error('email')
					<div class="Abs / Nameplate -rt">444444</div>
				@enderror
			</div>
 
		</form>	
  --}}