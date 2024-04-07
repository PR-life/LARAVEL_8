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
    
    
    const csswrap = ['wrap_dropdown','relative','round','-White','White','-bg'];
    const cssDropDown = ['_dropdown','space-xs'];
    const cssBtn = ['_btn', 'content', 'highlight', 'slctn'];
    


    let observerSelect = new MutationObserver(mutationRecords => {
        console.log(mutationRecords); // console.log(изменения)
      });

 
    
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


    Options.forEach(function(item, index) {
        // if ( index == 0) { return; }
        let li = document.createElement('li');
        li.classList.add('_item')
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


    // ul.closest('.Select').querySelector('._field').addEventListener("change", function(element) {
    //     // let selectedOptions = this.selectedOptions;
    //     // field.innerHTML = "";
    //     console.log(999999999)
    //     // select_1902(select.selectedOptions,field,text,select)
    // })


      // наблюдать за всем, кроме атрибутов
      observerSelect.observe(ul.closest('.Select').querySelector('._field'), {
        childList: true, // наблюдать за непосредственными детьми
        subtree: true, // и более глубокими потомками
        characterDataOldValue: true // передавать старое значение в колбэк
      });
 
 
      
 
 

    ul.addEventListener('click', function() {
        let ul = event.currentTarget;
        let li = event.target;
        let select = ul.closest('.Select').querySelector('select')
        let field = ul.closest('.Select').querySelector('._field')


        // console.log(li)

        
        // select.options[1].setAttribute('selected', true)


    

        // console.log(Number(li.getAttribute("data-loop")) + 1)

        // console.log(li.getAttribute("data-loop"))
        // console.log(select.selectedOptions)

        // select_1902(select.selectedOptions,label,text,select)


        // select_1902(select.selectedOptions,label,text,select)
        
        // multiple

        // console.log(select.hasAttribute('multiple'))

        if(select.hasAttribute('multiple')) {

            li.classList.toggle('selected')
            select.options[Number(li.getAttribute("data-loop"))].setAttribute('selected', true);
            select_1902(select.selectedOptions,field,select)
        } else {
            // console.log(select.selectedIndex)
            select.selectedIndex = li.getAttribute("data-loop")
            select_1902(select.selectedOptions,field,select)

            parent.querySelector('.js-close').click()
        }



    })
}
