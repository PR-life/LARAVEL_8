export function cssSwitch(param, item, css = 'active',time = 0){


	item = Number(item);

	if(param.getAttribute('data-switch') == 'pure' && param.getAttribute('data-last') == (item)) {
		param.children[--item].classList.remove(css);
		return -1;
	}	


	--item;
	time = Number(time);

	// console.log(param)
	// console.log(item)
	// console.log(css)
	// console.log(checkbox)
	// console.log(time)
	



	if(
		param.getAttribute('data-switch') == 'off'  &&  
		Number(param.getAttribute('data-last')) == item + 1 &&
		param.children[item].classList.contains(css)
	) {
		setTimeout(() => { 
			param.children[item].classList.remove(css);
		}, time);
		return item;
	}	


	if(item < 0) {
		for (let i = 0; i < param.children.length; i++) {
			param.children[i].classList.remove(css,'prev','next');
		}
		return item;
	}	
	

	
	if(param.getAttribute('data-switch') != 'checkbox' ) {
		for (let i = 0; i < param.children.length; i++) {
			param.children[i].classList.remove(css,'prev','next');
		}
	}	


	if(item >= 0 && item < param.children.length) {
		
		if(param.getAttribute('data-switch') != 'checkbox' ) {
			if(param.children[item - 1]) {
				param.children[item - 1].classList.add('prev');
			}
			if(param.children[item + 1]) {
				param.children[item + 1].classList.add('next');
			}
		}

		setTimeout(() => { 
			param.children[item].classList.toggle(css);
		}, time);

	}

	return item;
}
