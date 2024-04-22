let x20071126 = document.querySelectorAll("[data-check]")


x20071126.forEach( item => {

	if(item.getAttribute("data-check") == 'active') {
		arr = item.querySelectorAll("[data-item]")
		param = item.getAttribute("data-last")
	

		if(param == 'null') {
			param = 1;
		}


		arr.forEach( item => {
	
			if(item.getAttribute("data-item") == param) {
				item.classList.add('active')
			} else {
				item.classList.remove('active')
			}
		})
	}

})


