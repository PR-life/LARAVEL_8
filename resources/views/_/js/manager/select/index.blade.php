<script>

// https://sky.pro/wiki/html/rabota-s-multiple-select-v-java-script-poluchenie-znacheniy/?ysclid=lsrrwlw620706622185

// https://www.youtube.com/watch?v=tmnyPy0c3aA
// https://codepen.io/Yuri_Simonov/pen/zYLOLdQ?editors=0010


    let multiselect_block = document.querySelectorAll(".Select.-js");
    
    multiselect_block.forEach(parent => {

        let select = parent.querySelector(".Select.-js select")
            field = parent.querySelector("._field")
            text = field.innerHTML;
    
    
        if(select.selectedOptions.length > 0) {
            field.innerHTML = ''
        }
    
    
        selectToUl(parent)
        
        select_1902(select.selectedOptions,field,select,text)
        
        // select.addEventListener("change", function(element) {
        //     // let selectedOptions = this.selectedOptions;
        //     // field.innerHTML = "";
        //     console.log(999999999)
        //     // select_1902(select.selectedOptions,field,text,select)
        // })
    
    
        // select.options[2].setAttribute('selected', true)
    
    })


    add_manager('wrap_select_items')
    
    
    // multiselect_block.forEach(function(item, index) {
    //     // console.log(index);
    // })
    
    
@include('_/js/manager/select/foo/selectToUl')
@include('_/js/manager/select/foo/select_1902')
@include('_/js/manager/select/foo/add_manager')
</script>