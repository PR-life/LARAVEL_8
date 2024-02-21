function select_1902(Options,field,select,text = 'выбрать') {
      
    // console.log(555)
    // console.log(Options)
    // console.log(field)
    // console.log(select)
    // console.log(text)


    let nodeList = field.querySelectorAll('._item')
    let arr = [];

    // console.log(nodeList)


    for (let node of nodeList) {
        arr.push(node.getAttribute('data-var'));
    }
    // console.log(arr)


    for (let option of Options) {
        // console.log(option)

        let elem = document.createElement("span");

        elem.className = "_item content-xs space-s round-s yesEvents";
        elem.textContent = option.text;
        elem.dataset.var = option.className


        if(select.hasAttribute('multiple')) {
            if(!arr.includes(option.className)) {
                elem.onclick = _ => {
                    option.selected = false;
                    elem.remove();

     
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

                // console.log(elem)
            }

 
        }
    }
}