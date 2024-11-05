import { easeInOutCubic } from '../easeFunctions.js';
// import { delegate } from '../../_sherpa/delegate.js';

let links = document.querySelectorAll(".JsScroll.-link a");
links.forEach(elem => elem.addEventListener("click", linkClick));

function linkClick(e) {
  smoothScroll(e);
}

function smoothScroll(e) {
	e.preventDefault();

	if(e.currentTarget.hasAttribute("data-close")) {
		// param.setAttribute('data-fix', '')
		// param.classList.remove('on');
		
		e.currentTarget.closest('.FIX').click();

		console.log(e.currentTarget.closest('.FIX').querySelector('.Close').click());

		// if(param.hasAttribute('css-off')) {
		// 	param.classList.add('off');
		// }

		// if(param.hasAttribute('data-add')) {
		// 	param.setAttribute('data-add', 'on')
		// }

		// if(param.hasAttribute('data-trash')) {
		// 	trash(param)
		// }
	}





	let targetId = e.currentTarget.getAttribute("href");
	let targetPosition = Math.trunc(document.querySelector(targetId).getBoundingClientRect().y);
		// let targetPosition = document.querySelector(targetId).offsetTop;
	let startPosition = window.pageYOffset;
	let distance = parseInt(startPosition) + parseInt(targetPosition) - (document.querySelector(targetId).getAttribute('corrector-JsScroll') ?? 100);
	// let distance = targetPosition - startPosition;
	// let duration = 200;
	// let start = null;

	// console.log(document.querySelector(targetId).getAttribute('corrector-JsScroll'))
	// console.log(document.querySelector(targetId))

	// console.log('distance = startPosition - targetPosition')
	// console.log(distance + ' = ' +  startPosition + ' - ' + targetPosition)
	// console.log(startPosition)
	// console.log(targetPosition)
	// console.log(distance)

	// window.location.hash = targetId
	window.requestAnimationFrame(step);

	function step() {
		window.scrollTo(
			{
				top: distance,
				behavior: 'smooth'
			}
		)		
	}


	// function step(timestamp) {
	// 	if (!start) start = timestamp;
	// 	const progress = timestamp - start;
	// 	window.scrollTo( 0, easeInOutCubic(progress, startPosition, distance, duration) );
	// 	if (progress < duration) window.requestAnimationFrame(step);
	// }
}


// !!!!!!! перенос этот код в этом файл, см. в этой папке -  control_active.js
let threshold = window.innerHeight / 2;
let activeItems = document.querySelectorAll(".JsScroll.js_param-active a");
//
let scrollDelay = 50;
let scrollTimeout;

window.addEventListener('scroll', function(){
	clearTimeout(scrollTimeout)
	scrollTimeout = setTimeout(onScroll, scrollDelay)
});

// console.log(activeItems)

function onScroll(){

	for(let i = activeItems.length - 1; i >= 0; i--) {
		let a = activeItems[i]
		let div = document.querySelector(a.hash)

		// console.log(a)

		if(div.getBoundingClientRect().y < threshold) {
			setActiveCSS(activeItems,a)
			break
		}
	}

	function setActiveCSS(activeItems,a) {
		activeItems.forEach(item => item.classList.remove('active'))
		a.classList.add('active')
	}
}