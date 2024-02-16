@push('style')

	.tox-tinymce svg {
		width:auto;
		height:auto;
	}

	.tox-collection__group svg {
		color:#000 !important;
	}
	{{-- #tinymce_lite_1 ~ .tox {max-height:300px !important}
	#tinymce_lite_2 ~ .tox {max-height:300px !important}
	#tinymce_lite_3 ~ .tox {max-height:300px !important}
	tox-tbtn__select-chevron --}}
@endpush




@push('js-bottom-solo') 

<script>

// https://www.tiny.cloud/docs/configure/content-formatting/
// https://www.tiny.cloud/docs/tinymce/latest/customize-ui/
// https://www.tiny.cloud/docs/tinymce/latest/migration-from-5x/#summary

tinymce.init({
	selector: '#tinymce_1, #tinymce_2, #tinymce_3',
	content_css: "/css/env/tinymce.css?4",
	// content_css: "/css/env/tinymce.css",
	language: 'ru',
	height: parseInt(document.documentElement.clientHeight) * .65,
	
	plugins: 'image lists link anchor charmap visualblocks code',
	toolbar: 'blocks styles | bold italic bullist numlist | link anchor image charmap | removeformat visualblocks | code',

	

	style_formats: [
		{title: 'Info -space', selector: 'p, span', classes: 'Info -space'},
		// {title: 'Bold text', inline: 'b'},
		// {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
		// {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
		// {title: 'Example 1', inline: 'span', classes: 'example1'},
		// {title: 'Example 2', inline: 'span', classes: 'example2'},
		// {title: 'Table styles'},
		// {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
	],



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
		// content_css: "document",

		language: 'ru',
		height: parseInt(document.documentElement.clientHeight) * .25,

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
