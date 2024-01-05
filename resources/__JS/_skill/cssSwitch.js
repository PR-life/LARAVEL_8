export function cssSwitch(param, item, css = 'active',time = 0){


	item = Number(item);
	--item;
	time = Number(time);

	// console.log(param)
	// console.log(item)
	// console.log(css)
	// console.log(time)
	
	// только снимаем CSS у активного Item
	if(
		param.getAttribute('data-switch') == 'off'
		&& Number(param.getAttribute('data-last')) == item + 1
		&& param.children[item].classList.contains(css)
	) {
		item = itemRemoveCss(param,item,css,time)
		return item;
	}
	switch (param.getAttribute('data-switch')) {
		case 'checkbox':
			itemsCleanerCss(param);
			itemToggleCss(param, item, css, time);		
			break;
		case 'timeline':
			timelineCss(param,item,css,time);	
			break;
		default:
			itemOn(param, item, css);	
	}

	if(param.getAttribute('data-switch_current')) {
		param.closest(param.dataset.switch_current).dataset.current = ++item
	}
	return item;
}



//
function timelineCss(param, item, css) {
	let i = 0;
	for (i; i <= item; i++) {
		param.children[i].classList.add(css);
	}
	for (i; i < param.children.length; i++) {
		itemRemoveCss(param, i, css)
	}
	// console.log('timelineCss');
}

function itemsCleanerCss(param, css = '/') {
	for (let i = 0; i < param.children.length; i++) {
		param.children[i].classList.remove(css,'prev','next');
	}
	// console.log('itemsCleanerCss');
}

function itemRemoveCss(param, item, css, time = 0) {
	setTimeout(() => { 
		param.children[item].classList.remove(css);
		// console.log('itemRemoveCss');
	}, time);
}

function itemToggleCss(param, item, css, time = 0) {
	setTimeout(() => { 
		param.children[item].classList.toggle(css);
		checkPrevNext(param, item);
		// console.log('itemToggleCss');
	}, time);
}

function checkPrevNext(param, item) {
	if(item >= 0 && item < param.children.length) {
		let prev = param.children[item - 1];
		let next = param.children[item + 1];
		if(prev) {
			prev.classList.add('prev');
		}
		if(next) {
			next.classList.add('next');
		}
	}
}

function itemOn(param, item, css, time = 0) {
	setTimeout(() => { 
		if(item >= 0 && item < param.children.length) {
			let node = param.children[item];
			if(!node.classList.contains(css)){
				itemsCleanerCss(param,css);
				node.classList.add(css);
				checkPrevNext(param, item);
				// console.log('itemOn');
			}
		}
	}, time);
}