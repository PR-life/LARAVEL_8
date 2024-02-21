@extends('zADMIN._shema.edit')

@section('title')edit. Paper - {{$paper->name}} @endsection


@push('linkCss')
	@include('_.src.link.css.text.select')
@endpush

@push('linkJsAfter')
	{{-- @include('_.src.link.js.text.select') --}}
@endpush

@push('js-bottom-solo')
	{{-- <script>
		$('#js_tags').select2()
	</script> --}}

    @include('_/js/manager/select/index')
@endpush


@push('addBread')
<li>
    <span>
        <span class="content-xs">Контент</span>
    </span>
</li>
<li>
    <span>
        <span class="content-xs">Статьи</span>
    </span>
</li>
@endpush




@section('content')

<div class="I aura">


	@component('zADMIN.PAGE._wrap.form.edit', ['route' => route('admin.paper.update', $paper->id), 'css' => '-paper'])


		{{-- @include('zADMIN._brick.bar.v.edit', ['route' => route('admin.paper.index', [
			'shema' => request()->get('shema'),
			'tag_id' => request()->get('tag_id'),
			'page' => request()->get('page'),
			'category_id' => request()->get('category_id'),
			'tag_id' => request()->get('tag_id')
			])]) --}}



		@include('zADMIN._brick.bar.v.edit',['routeName' => 'admin.paper.index'])




		<div class="_shell / net">
			@include('zADMIN._bd.edit.min',['Var'=> $paper])
		</div>


<div class="Max -w5">
	@component('zADMIN.PAGE._wrap.select.categories.main', ['id' => 'categories','multiple' => true])
		@include('_._brick.select.categories.edit.main',['Categories' => $categories, 'Var' => $paper])
	@endcomponent
</div>
<div class="paragraph"></div>
<div class="flex / cross [ padding bottom S ]">
    <div class="Blog">
      @component('zADMIN.PAGE._wrap.select.items.index', ['id' => 'items', 'multiple' => true])
          @include('_._brick.select.items.edit.index',['Items' => $items, 'Var' => $paper])
      @endcomponent
    </div>
        
    <div class="Blog">
		@component('zADMIN.PAGE._wrap.select.tags.all')
			@include('_._brick.select.tags.edit.index',['Tags' => $tags,'Var' => $paper])
		@endcomponent
    </div>
</div>


 
<div class="hill"></div>


		@component('zADMIN.PAGE._wrap.Flaber.edit')

			@slot('flaber')
				@include('zADMIN.PAGE.Paper._lego.edit.sms')	
			@endslot

			<div class="paragraphX2"></div>
			@include('zADMIN.PAGE.Paper._lego.edit.body')

		@endcomponent



		{{-- @component('zADMIN.PAGE._wrap.Reg.edit')
			@slot('Sms')
				@include('zADMIN.PAGE.Category._lego.edit.sms')	
			@endslot
		@endcomponent --}}



		<div class="hill"></div>
		@include('zADMIN._lego.form.btn.edit.footer')

	@endcomponent 
</div>


@endsection