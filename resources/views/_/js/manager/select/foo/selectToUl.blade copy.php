function selectToUl(parent) {

    parent.querySelector('select').classList.add('none');

    //   let invoker = document.createElement('div');
    let wrap = document.createElement('div')
        dropdown = document.createElement('div')
        ul = document.createElement('ul')
        values = [];
    
    let withSearch = parent.classList.contains('vol-withSearch')
        searchInput = '';

    var Options = Array.from(parent.querySelectorAll('option'));
    
    
    const csswrap = ['wrap_dropdown','relative','-White','White','-bg'];
    const cssDropDown = ['_dropdown'];
    const cssBtn = ['_btn', 'content', 'highlight', 'slctn'];
    
 
    wrap.classList.add(...csswrap);
    dropdown.classList.add(...cssDropDown);
    ul.classList.add('_ul');


    if(withSearch) {
        searchInput = document.createElement('input');
    
        searchInput.classList.add('_search');
        searchInput.classList.add('Goo');
        searchInput.classList.add('-t');
        searchInput.setAttribute('type', 'text');
        searchInput.setAttribute('placeholder', 'поиск...')
    
        // var searchInputLabel = document.createElement('label');
        // searchInputLabel.classList.add('_search__label');
        // searchInputLabel.textContent = "Search term: ";
        // dropdown.appendChild(searchInputLabel);
    
        dropdown.appendChild(searchInput);
    }

    //



    let observerSelect = new MutationObserver(mutationRecords => {

        mutationRecords.forEach(element => {

            if(element.removedNodes.length) {

                // console.log(element);

                let node = element.target.closest('.Select').querySelector('.wrap_dropdown');

                // console.log(element.removedNodes);
                
                element.removedNodes.forEach(el => {
                    
                    // console.log(el);
                    // console.log(el.nodeName == '#text');

                    
                    if(!(el.nodeName == '#text')) {
                        let itemId = el.getAttribute('data-value')
                        node.querySelector(`[data-value='${itemId}']`).classList.remove('selected')
                    }


                } )

                // let node = element.target.closest('.Select').querySelector('.wrap_dropdown');

                // let idOption = element.z.closest('.Select').querySelector('.wrap_dropdown');

                // console.log(node);
            }
   
            // let dropdown = element.target.closest('.Select').querySelector('.wrap_dropdown');
            // let arr = dropdown.querySelectorAll('._item');
            
            // arr.forEach(element => {
            //     element.classList.remove('None')
            // });

            // element.addedNodes.forEach(element => {
            //     console.log(2222)
            //     // console.log(element)
            //     // console.log(element.nodeName == '#text')

            //     if(!(element.nodeName == '#text')) {
            //         let itemId = element.getAttribute('data-var')
            //         console.log(3333)
            //         // console.log(itemId)
            //         if(itemId) {
            //             dropdown.querySelector(`[data-value='${itemId}']`).classList.add('None')
            //         }
            //     }
            // });

        });
      });



    //

    Options.forEach(function(item, index) {
        // if ( index == 0) { return; }
        let li = document.createElement('li');
        li.classList.add('_item')

 
        li.classList.add(item.getAttribute('schema-teaser') ?? '532523')
  


        li.dataset.loop = index;
        if(item.hasAttribute('selected')) {
            li.classList.add('selected')
        }
        li.dataset.value = item.value;
        li.textContent = item.text;
        ul.appendChild(li);
    })

    dropdown.appendChild(ul);
    wrap.appendChild(dropdown);
    parent.appendChild(wrap);

    let arrLi_search =  Array.from(ul.querySelectorAll('li'));
    if(withSearch) {
        searchInput.addEventListener('keyup', function() {
            let inputVal = this.value;
            let pattern = new RegExp(inputVal, 'i');
            arrLi_search.forEach(function(item, index) {
                if (!item.textContent.match(pattern)) {
                    item.classList.add('none');
                } else {
                    item.classList.remove('none');
                }  
            })
        })
    }



    ul.addEventListener('click', function() {
        let ul = event.currentTarget;
        let li = event.target;
        let select = ul.closest('.Select').querySelector('select')
        let field = ul.closest('.Select').querySelector('._field')

        if(select.hasAttribute('multiple')) {
            li.classList.toggle('selected')
            select.options[Number(li.getAttribute("data-loop"))].selected = true;
                                // !!!!!!!! 
                                //select.options[Number(li.getAttribute("data-loop"))].setAttribute('selected', true);
            // console.log('select.selectedOptions: ' + select.selectedOptions)
            select_1902(select.selectedOptions,field,select)
        } else {
            // console.log(select.selectedIndex)
            select.selectedIndex = li.getAttribute("data-loop")
            select_1902(select.selectedOptions,field,select)

            parent.querySelector('.js-close').click()
        }

    })

    // наблюдать за всем, кроме атрибутов
    observerSelect.observe(ul.closest('.Select').querySelector('._field'), {
        childList: true, // наблюдать за непосредственными детьми
        subtree: true, // и более глубокими потомками
        characterDataOldValue: true // передавать старое значение в колбэк
    })
}
