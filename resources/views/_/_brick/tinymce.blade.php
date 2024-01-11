@push('style')
	.tox-tinymce svg {width:auto;height:auto}
	#tinymce_lite_1 ~ .tox {max-height:300px !important}
	#tinymce_lite_2 ~ .tox {max-height:300px !important}
	#tinymce_lite_3 ~ .tox {max-height:300px !important}
@endpush


{{-- https://www.tiny.cloud/docs/configure/content-formatting/ --}}
{{-- https://www.tiny.cloud/docs/tinymce/latest/customize-ui/ --}}

@push('js-bottom') 
	tinymce.init({
		selector: '#tinymce_lite_1, #tinymce_lite_2, #tinymce_lite_3',
		language: 'ru',
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
@endpush



@push('js-bottom') 
tinymce.init({
	selector: '#tinymce_1, #tinymce_2, #tinymce_3',
	height:700,
	{{-- skin: 'borderless', --}}
	{{-- skin: 'bootstrap',
	icons: 'bootstrap', --}}
	plugins: 'image lists link anchor charmap visualblocks code',
	toolbar: 'blocks | bold italic bullist numlist | link anchor image charmap | removeformat visualblocks | code',
	{{-- menubar: false, --}}


	

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
		
	{{-- content_css: '/css-0/tinymce.css' --}}


	{{-- formats: {
		removeformat: [
		  // Configures `clear formatting` to remove specified elements regardless of its attributes
		  { selector: 'b,strong,em,i,font,u,strike,s', remove: 'all' },
	
		  // Configures `clear formatting` to remove the class red from spans and if the element then becomes empty i.e has no attributes it gets removed
		  { selector: 'span', classes: 'red', remove: 'empty' },
	
		  // Configures `clear formatting` to remove the class green from spans and if the element then becomes empty it's left intact
		  { selector: 'span', classes: 'green', remove: 'none' }
		]
	  } --}}

	  content_style: '#tinymce img {max-width:100%}'

  });
@endpush

@push('js-bottom5555') 
tinymce.init({
	selector: '#summernote',
	language: 'ru',
	browser_spellcheck: true,
	contextmenu: false,
	{{-- menu: {
		HTML: { title: 'HTML', items: 'code' },
		edit: { title: 'Edit', items: 'selectall' }
	},
	menubar: 'HTML edit'  // adds happy to the menu bar --}}
    plugins: [
      'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
      'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
      'media', 'table', 'emoticons', 'template', 'help'
    ],
    toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
      'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
      'forecolor backcolor emoticons | help',
    menu: {
      HTML: { title: 'HTML', items: 'code visualaid | searchreplace | emoticons' }
    },
    menubar: 'HTML file edit view insert format tools table help',




	formats: {
		aligncenter: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img,audio,video', classes: 'center-text' },
		{{-- alignleft: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img,audio,video', classes: 'left' }, --}}
		{{-- alignright: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img,audio,video', classes: 'right' }, --}}
		{{-- alignjustify: { selector: 'p,h1,h2,h3,h4,h5,h6,td,th,div,ul,ol,li,table,img,audio,video', classes: 'full' }, --}}
		{{-- bold: { inline: 'span', 'classes': 'bold' }, --}}
		{{-- italic: { inline: 'span', 'classes': 'italic' }, --}}
		{{-- underline: { inline: 'span', 'classes': 'underline', exact: true }, --}}
		{{-- strikethrough: { inline: 'del' }, --}}
		{{-- forecolor: { inline: 'span', classes: 'forecolor', styles: { color: '%value' } }, --}}
		{{-- hilitecolor: { inline: 'span', classes: 'hilitecolor', styles: { backgroundColor: '%value' } }, --}}
		{{-- custom_format: { block: 'h1', attributes: { title: 'Header' }, styles: { color: 'red' } } --}}
	  },








	{{-- content_style: '', --}}
    {{-- content_css: '/css-0/tinymce.css' --}}
});
@endpush