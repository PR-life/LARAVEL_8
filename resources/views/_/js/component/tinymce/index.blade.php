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
      content_css: "{{Request::root() . mix('/css/env/tinymce.css')}}",
      language: 'ru',
      height: parseInt(document.documentElement.clientHeight) * .8,

      relative_urls : false,
      document_base_url : '/',

      menubar: 'format',
      menu: {
        custom: { title: 'Custom Menu', items: 'undo redo myCustomMenuItem' }
      },

      plugins: 'code image lists link anchor charmap visualblocks code template',
      toolbar1: 'blocks styles bold italic bullist numlist blockquote template | link anchor | visualblocks | removeformat | code',
      toolbar2: 'span | image',
      link_context_toolbar: true,

      block_formats: 'paragraph=p; div=div; h1=h1; h2=h2; h3=h3; h4=h4',

      style_formats: [
        {title: 'h', selector: 'p, span, div', classes: 'h'},
        {title: 'content', selector: 'p, span, div', classes: 'content'},
        {title: 'content-s', selector: 'p, span, div', classes: 'content-s'},
        {title: 'content-m', selector: 'p, span, div', classes: 'content-m'},
        {title: 'Info', selector: 'p, span, div', classes: 'Info'},
        {title: '-space', selector: 'p, span, div', classes: '-space'},
        {title: '-bg', selector: 'p, span, div', classes: '-bg'},
        {title: '-ico', selector: 'p, span, div', classes: '-ico'},
        {title: 'ico-left', selector: 'p, span, div', classes: 'ico-left'},
        {title: 'ico-out', selector: 'p, span, div', classes: 'ico-out'},
        {title: 'ico-center', selector: 'p, span, div', classes: 'ico-center'},
        {title: '-lineHeight', selector: 'p, span, div', classes: '-lineHeight'},
        {title: 'slim', selector: 'p, span, div', classes: 'slim'},
        {title: 'b600', selector: 'p, span, div', classes: 'b600'},
        {title: 'block', selector: 'p, span, div', classes: 'block'},
        {title: 'Grey', selector: 'p, span, div', classes: 'Grey'},
        {title: '-S', selector: 'p, span, div', classes: '-S'},
        {title: '-M', selector: 'p, span, div', classes: '-M'},
        {title: 'vol-2', selector: 'p, span, div', classes: 'vol-2'},
      ],

      templates: [
        {
          title: "Citation",
          description: "",
          content: "<div class='Citation / face face-top face-padding / Max'><div class='_wrap / content / Void'><p>текст</p></div><div class='author / flex'><span class='_name b600 mr-2'>— ТОРНАДО</span> <span class='Grey / Ellipsis'>детективное агентство</span></div></div>",
        },
        {
          title: "Citation Js",
          description: "",
          content: "<div class='Citation / face face-top face-padding / Max' data-click data-css data-add='On'><div class='_wrap / content / Void / lineClamp -block var-3'><p>текст</p></div><div class='author / flex'><span class='_name b600 mr-2'>— ТОРНАДО</span> <span class='Grey / Ellipsis'>детективное агентство</span></div></div>",
        },
        {
          title: "IMG",
          description: "",
          content: "<figure><picture> <img src='/images-0/catalog/box.png' alt=''> </picture><figcaption class='-edge -b'>55555555</figcaption></figure>",
        },
        {
          title: "Details vol-dt",
          description: "",
          content: "<div class='Details -edge -line vol-dot vol-dt -shadow_PC -shadow_mbl'><details open><summary>555555555555</summary><div class='_edge / text void'><div class='h x-name'>555555</div><p>55555555555555</p></div></details></div>",
        },


        // {
        //   title: "Some title 2",
        //   description: "Some desc 2",
        //   url: "templates/development.html",
        // },
      ],

      setup: function (editor) {
        // Добавляем кнопку в тулбар
        editor.ui.registry.addButton('span', {
          text: 'span',
          onAction: function () {
            // Получаем выделенный текст
            var selectedText = editor.selection.getContent({format: 'text'});
            
            // Если текст выделен, оборачиваем его в span
            if (selectedText) {
              editor.selection.setContent('<span class="span">' + selectedText + '</span>');
            //   editor.selection.setContent('<span style="color: red;">' + selectedText + '</span>');
            } else {
              alert('Please select a word to wrap.');
            }
          }
        });
      },

      // Разрешаем все элементы с любыми атрибутами
      // valid_elements: '*[*]',  
      extended_valid_elements: 'i[*], summary[*], blockquote[*]',  // Разрешаем все атрибуты для i, summary, blockquote



    //   valid_elements: '*[*]',  // Разрешаем все элементы с любыми атрибутами
    //   extended_valid_elements: 'span[*]',  // Явно разрешаем все атрибуты для span

    //   // Дополнительно можно отключить автоматическое удаление пустых элементов
    //   protect: [
    //     /\<\/?(span)[^>]*>/g  // Защищаем пустые span от удаления
    //   ],



    });
 
</script>
 
@endpush


@push('js-bottom-solo') 
<script>
	tinymce.init({
		selector: '#tinymce_lite_1, #tinymce_lite_2, #tinymce_lite_3',
		content_css: "{{Request::root() . "/css/env/tinymce.css?4"}}",

		language: 'ru',
		height: parseInt(document.documentElement.clientHeight) * .4,

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
