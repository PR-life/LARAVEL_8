

    
<script>


  let multiselect_block = document.querySelectorAll(".Select.-js");
  
      multiselect_block.forEach(parent => {
          let label = parent.querySelector("._field")
              select = parent.querySelector(".Select.-js select")
              text = label.innerHTML;
  
              // console.log(select.selectedOptions.length == 0)
  
              if(select.selectedOptions.length > 0) {
                label.innerHTML = ''
              }
  
              // wrap_select_items.querySelector("select").options[3].setAttribute('selected', true)
  
          select_1902(select.selectedOptions,label,text,select)
          // console.log(text)
  
          select.addEventListener("change", function(element) {
              let selectedOptions = this.selectedOptions;
              label.innerHTML = "";
              // console.log(999999999)
              select_1902(select.selectedOptions,label,text,select)
          })
      })
  
      
       
  
  
   
  
  
      function select_1902(selectedOptions,label,select,text) {
  
        for (let option of selectedOptions) {
            let elem = document.createElement("span");
            // button.type = "button";
            elem.className = "_item content-xs space-s round-s yesEvents";
            elem.textContent = option.text;
  
            elem.onclick = _ => {
              option.selected = false;
              elem.remove();
              if (!this.select.selectedOptions.length) label.innerHTML = this.text
            };
  
            label.append(elem);
        }
      }
  </script>
  