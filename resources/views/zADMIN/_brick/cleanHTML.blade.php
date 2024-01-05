
<div id='buttonRemove' class="Btn button_style">Remove Attributes</div>
<div id="newArea"></div>

<script>
    function cleanTinyMCEContent() {
        content = tinymce.activeEditor.getContent()
        cleanContent = content.replace(/\s\w+="[^"]*"/g,'')
        // console.log(cleanContent)
        let x_23051255 = document.getElementById('summernote')
        x_23051255.innerHTML = cleanContent
        // console.log(fvwfwe.innerHTML)
        tinymce.activeEditor.setContent(cleanContent);
    };

    var buttonPublish = document.getElementById(buttonRemove);
    buttonRemove.addEventListener('click', cleanTinyMCEContent, false);
</script>