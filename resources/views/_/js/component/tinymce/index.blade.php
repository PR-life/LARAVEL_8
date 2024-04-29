@push('style')
.tox-tinymce svg {
	width:auto;
	height:auto;
}

.tox-collection__group svg {
	color:#000 !important;
}
@endpush




@push('js-bottom-solo') 

<script>
	// templates
	// https://www.tiny.cloud/blog/tinymce-templates/
// https://www.tiny.cloud/docs/configure/content-formatting/
// https://www.tiny.cloud/docs/tinymce/latest/customize-ui/
// https://www.tiny.cloud/docs/tinymce/latest/migration-from-5x/#summary

tinymce.init({
	selector: '#tinymce_1, #tinymce_2, #tinymce_3',
	content_css: "{{Request::root() . "/css/env/tinymce.css?4"}}",
	// content_css: "/css/env/tinymce.css",
	language: 'ru',
	height: parseInt(document.documentElement.clientHeight) * .8,

	relative_urls : false,
	// remove_script_host : true,
	document_base_url : '/',
	

	menubar: 'format',
	menu: {
		custom: { title: 'Custom Menu', items: 'undo redo myCustomMenuItem' }
	},



	plugins: 'image lists link anchor charmap visualblocks code template',
	toolbar: 'blocks styles template | bold italic bullist numlist | link anchor | visualblocks | removeformat code',
	// image charmap


	link_context_toolbar: true,


	block_formats: 'paragraph=p; div=div; h1=h1; h2=h2; h3=h3; h4=h4',

	style_formats: [

		// {title: 'SPAN', inline: 'span',styles: {} },
		{title: 'content', selector: 'p, span, div', classes: 'content'},
		{title: 'content-s', selector: 'p, span, div', classes: 'content-s'},
		{title: 'content-m', selector: 'p, span, div', classes: 'content-m'},
		{title: 'Info', selector: 'p, span, div', classes: 'Info'},
		{title: '-space', selector: 'p, span, div', classes: '-space'},
		{title: '-bg', selector: 'p, span, div', classes: '-bg'},
		{title: 'b600', selector: 'p, span, div', classes: 'b600'},
		// {title: 'Bold text', inline: 'b'},
		// {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
		// {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
		// {title: 'Example 1', inline: 'span', classes: 'example1'},
		// {title: 'Example 2', inline: 'span', classes: 'example2'},
		// {title: 'Table styles'},
		// {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
	],

	templates: [
		{
		title: "Citation",
		description: "",
		content: "<div class='Citation / face face-top face-padding / Max'><div class='_wrap / content / Void'><p>текст</p></div><div class='author / flex'><span class='_name b600 mr-2'>— ТОРНАДО</span> <span class='Grey / Ellipsis'>детективное агентство</span></div></div>",
		},
		{
		title: "Some title 2",
		description: "Some desc 2",
		url: "templates/development.html",
		},
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
		content_css: "{{Request::root() . "/css/env/tinymce.css?4"}}",

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
