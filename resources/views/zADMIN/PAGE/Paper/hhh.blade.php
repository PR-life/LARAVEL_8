
        {{-- <div class="margin top / -White">
          <div class="mg-custom-select">
            <div class="_btn h highlight slctn / mg-custom-select__button" data-click data-node='parent' data-css data-toggle='opened'>Poland</div>
            <div class="_dropdown">
              <label class="_search__label">
                Search term: 
                <input class="_search" type="text" placeholder="Start typing here...">
              </label>
              <ul class="_list">
                <li class="_item" data-value="Australia">Australia</li>
                <li class="_item" data-value="Brazil">Brazil</li>
                <li class="_item" data-value="Germany">Germany</li>
                <li class="_item" data-value="Poland">Poland</li>
              </ul>
            </div>
          </div>
        </div> --}}
 



<script>
    //custom select dropdown
    let parents = Array.from(document.querySelectorAll('.Select.-js'));
    
    parents.forEach(function(item, index) {
      let parent = item;
      let _select = parent.querySelector('select')
      let customSelect = document.createElement('div');
      let invoker = document.createElement('div');
      let dropdown = document.createElement('div');
      var list = document.createElement('ul');
    
      let withSearch = parent.classList.contains('vol-withSearch');
    
    
      const cssWrap = ['wrap_dropdown','relative','round','-White','White','-bg'];
      const cssDropDown = ['_dropdown','space'];
      const cssBtn = ['_btn', 'content', 'highlight', 'slctn'];
    
    
    
      let values = [];
      
    
     
    
     //случай мульти-режима
     if (_select.multiple) {
       //перебираем массив опций
       for (var i = 0; i < _select.options.length; i ++) {
         //если опция выбрана - добавим её в массив
         if (_select.options[i].selected) 
            values.push(_select.options[i].value);
       }
     //случай одиночного выбора в select
     } else
       values.push(_select.value);
      
     //выведем результат в консоль
    //  console.log(values);
    
    
    
    
      // получаем все выбранные значения из select с multiple
      let x_selected = Array.from(_select.options)
        .filter(option => option.selected)
        .map(option => option.value);
    
        // console.log(x_selected);
    
    
    
    
    
    
    
    
    
      invoker.textContent = '444'
      // invoker.textContent = _select.options[_select.selectedIndex].text
      invoker.classList.add(...cssBtn);
      invoker.dataset.click =''
      invoker.dataset.node ='parent'
      invoker.dataset.css =''
      invoker.dataset.toggle ='opened'
    
    
      customSelect.classList.add(...cssWrap);
        // customSelect.appendChild(invoker);
    



        

        dropdown.classList.add(...cssDropDown);
    
    
      if(withSearch) {
        var searchInput = document.createElement('input');
    
        searchInput.classList.add('_search');
        searchInput.setAttribute('type', 'text');
        searchInput.setAttribute('placeholder', 'Start typing here...')
    
        // var searchInputLabel = document.createElement('label');
        // searchInputLabel.classList.add('_search__label');
        // searchInputLabel.textContent = "Search term: ";
        // dropdown.appendChild(searchInputLabel);
    
        dropdown.appendChild(searchInput);
      }
    
    
    
       
      list.classList.add('_list');
      var selectOption = Array.from(parent.querySelectorAll('option'));
      selectOption.forEach(function(item, index) {
        if ( index == 0) {
          return;
        }
        var customSelect__item = document.createElement('li');
        customSelect__item.classList.add('_item')
        customSelect__item.dataset.value = item.value;
        customSelect__item.textContent = item.text;
        list.appendChild(customSelect__item);
      })
    
    
    
    
      dropdown.appendChild(list);
      customSelect.appendChild(dropdown);
      parent.appendChild(customSelect);
      // parent.childNodes[1].style.display = 'none';
      
      var duration = parseFloat(window.getComputedStyle(dropdown, null).getPropertyValue('transition-duration')) * 1000;
      var customSelect__items =  Array.from(list.querySelectorAll('li'));
    
    
    
    
    // console.log(invoker)
    // console.log(dropdown)
    // console.log(searchInputLabel)
    // console.log(searchInput)
    // console.log(list)
    
    // console.log(duration)
    // console.log(customSelect__items)
    
    
    if(withSearch) {
        searchInput.addEventListener('keyup', function() {
          var inputVal = this.value;
          var pattern = new RegExp(inputVal, 'i');
          customSelect__items.forEach(function(item, index) {
            if (!item.textContent.match(pattern)) {
              item.classList.add('none');
            } else {
              item.classList.remove('none');
            }  
          })
        })
      }
    
    
      customSelect__items.forEach(function(item, index) {
        item.addEventListener('click', function() {
          var selectedOption = parent.childNodes[1].options[parent.childNodes[1].selectedIndex];
          dropdown.classList.toggle('opened');
          parent.childNodes[1].value = this.dataset.value;
    
          selectedOption.removeAttribute('selected');
          parent.childNodes[1].options[index + 1].setAttribute('selected', true);
    
          var selectChangeEvent = document.createEvent("HTMLEvents");
          selectChangeEvent.initEvent('change', false, true);
          parent.childNodes[1].dispatchEvent(selectChangeEvent);
    
          invoker.textContent = this.textContent;
          setTimeout(function() {
            if(withSearch) {
              searchInput.value = '';
            }
            customSelect__items.forEach(function(item, index) {
              item.classList.remove('hidden');
            })      
          }, duration)
        })
      })
    
    
    
    
    
    })
    </script>