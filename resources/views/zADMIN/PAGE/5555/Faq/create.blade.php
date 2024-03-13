@extends('zADMIN._shema.edit')

@section('title')новый Faq @endsection


@push('bee')
    <div class="Bee / -Grey">
        <div class="space-left / hill-m / flex cI">
            <div class="flex cI">
                <div class="Ico -S / mr-2">
                    @svg('barMenu_editorial')
                </div>
                <div class="h2 -lineHeight / b100 noEvents">Новый Faq</div>
            </div>        
        </div>
    </div>
@endpush

@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.create', ['route' => route('admin.faq.store'), 'css' => '-faq'])

		@include('zADMIN._brick.bar.v.create', ['route' => route('admin.faq.index')])

 
		@include('zADMIN.PAGE.Faq.lego.create.body')	
 


		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.create.footer')

	@endcomponent 
</div>


@endsection