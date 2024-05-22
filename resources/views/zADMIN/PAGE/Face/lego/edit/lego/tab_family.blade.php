

<div class="_shell Note -lite / space">
    <div class="paragraph"></div>
    <div class="p">заметки о семейном положении</div>
    <div class="paragraphX2"></div>
	<textarea id="tinymce_fs_1" name="knot_1" placeholder='текст...'>{{$face->knot_1}}</textarea>
</div>

@push('js-bottom-solo') 
<script>
	tinymce.init({
		selector: '#tinymce_fs_1,#tinymce_fs_2',
		content_css: "{{Request::root() . "/css/env/tinymce.css?4"}}",

		language: 'ru',
		height: parseInt(document.documentElement.clientHeight) * .6,

		toolbar_location: 'bottom',
		statusbar: false,
		browser_spellcheck: true,
		contextmenu: false,
		menubar: false,
		branding: false,
		
		block_formats: 'paragraph=p; div=div; h1=h1; h2=h2; h3=h3; h4=h4',
		plugins: 'code visualblocks lists link anchor',

		toolbar: 'blocks | bold italic bullist numlist | link | removeformat visualblocks | code', 
		



		paste_auto_cleanup_on_paste : true,
		paste_postprocess : function(pl, o) {
			o.node.innerHTML = o.node.innerHTML.replace(/&nbsp;/ig, " ");
		},
	});
</script>
@endpush



{{-- <div class="space void net">
    <div class="Min -w5 / net">
        @include('zADMIN._wrap.select.name',['Var' => 'Супруг'])
        @component('zADMIN._wrap.select.face.index', ['id' => 'face'])
            @include('_._brick.select.face.edit.index',['Faces' => $faces, 'Var' => $face])
        @endcomponent
    </div>
    
    <div class="Min -w5">
        @include('zADMIN._wrap.select.name',['Var' => 'Дети'])
        @component('zADMIN._wrap.select.faces.all', ['id' => 'faces'])
            @include('_._brick.select.faces.edit.index',['Faces' => $faces, 'Var' => $face])
        @endcomponent
    </div>
</div> --}}

{{-- <div class="paragraphЧ2"></div> --}}
{{-- <div class="Min -w5">
    @include('zADMIN/PAGE/_wrap/select/name',['Var' => 'Дети'])
    @component('zADMIN._wrap.select.category.main', ['id' => 'categories'])
        @include('_._brick.select.categories.edit.index',['Categories' => $categories, 'Var' => $face])
    @endcomponent
</div> --}}