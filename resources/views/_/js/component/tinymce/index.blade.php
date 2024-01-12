@push('js-bottom-solo') 

<script>
tinymce.init({
	selector: '#tinymce_1, #tinymce_2, #tinymce_3',
	language: 'ru',
	height: parseInt(document.documentElement.clientHeight) * .65,
	


	plugins: 'image lists link anchor charmap visualblocks code',
	toolbar: 'blocks | bold italic bullist numlist | link anchor image charmap | removeformat visualblocks | code',





	
	setup: (editor) => {
	  editor.on('init', () => {
		editor.getContainer().style.transition='border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out';
	  });
	  editor.on('focus', () => {
		editor.getContainer().style.boxShadow='0 0 15px 5px rgba(255, 255, 255, .25)';
		editor.getContainer().style.borderColor='#000';
	  });
	  editor.on('blur', () => {
		editor.getContainer().style.boxShadow='';
		editor.getContainer().style.borderColor='';
	  });
	},
	
});
</script>
 
@endpush


@push('js-bottom-solo') 
<script>
	tinymce.init({
		selector: '#tinymce_lite_1, #tinymce_lite_2, #tinymce_lite_3',
		language: 'ru',
		height: parseInt(document.documentElement.clientHeight) * .25,

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
