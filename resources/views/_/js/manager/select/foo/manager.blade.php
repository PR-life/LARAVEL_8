function select_1902(Options,field,select,text = 'выбрать') {
      
    // console.log(555)
    // console.log(Options)
    // console.log(field)
    // console.log(select)
    // console.log(text)


    //выбираем Активные 
    let nodeList = field.querySelectorAll('._item')
    let arr = [];

    // console.log(nodeList)


    //созадем массив ID из активных
    for(let node of nodeList) {
        arr.push(node.getAttribute('data-value'));
    }
    // console.log(arr)


    //теперь работаем с массивом тега SELECT, только выбранные
    for (let option of Options) {
        // console.log(option)


        // делаем болванку для текущего OPTION
        let elem = document.createElement("span");
        elem.className = "_item block content-xs space-s round-s yesEvents";
        elem.textContent = option.text;
        elem.dataset.value = option.value


        if(select.hasAttribute('multiple')) {
            // console.log(!arr.includes(option.value))

            if(!arr.includes(option.value)) {

                elem.onclick = _ => {
                    option.selected = false;
                    elem.remove();

                    // console.log(select.selectedOptions)

                    
     
                    // let x = elem.getAttribute('data-var').replace(/\D/g, "")
                    // console.log(x)
                    // field.closest('.Select').querySelector(`[data-value="${x}"]`).classList.remove('selected')



                    if (!select.selectedOptions.length) field.innerHTML = text
                };
                field.append(elem);
            }
        } else {

            // console.log(select.selectedIndex)

            if(select.selectedIndex == 0) {
                field.innerHTML = text
             } else {
                 elem.onclick = _ => {
                     option.selected = false;
                     elem.remove();
        
                     select.selectedIndex = -1
                     field.innerHTML = text
                 };
        
                 field.innerHTML = '';
                 field.append(elem);
        
                //  console.log(elem)
             }
 
        }
    }
}


