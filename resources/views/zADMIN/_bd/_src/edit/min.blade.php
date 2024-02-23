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