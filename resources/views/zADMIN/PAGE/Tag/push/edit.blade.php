@push('linkCss')
	@include('_.src.link.css.text.select')
@endpush

@push('linkJsAfter')
	@include('_.src.link.js.text.select')
@endpush

@push('js-bottom-solo')
	<script>
		$('#js_categories').select2()
	</script>
@endpush