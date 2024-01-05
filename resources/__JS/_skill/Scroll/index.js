import { easeInOutCubic } from '../easing.js';
// import { delegate } from '../../_sherpa/delegate.js';

let links = document.querySelectorAll(".JsScroll a");
links.forEach(elem => elem.addEventListener("click", linkClick));

function linkClick(e) {
  smoothScroll(e);
}

function smoothScroll(e) {
	e.preventDefault();
	let targetId = e.currentTarget.getAttribute("href");
	let targetPosition = Math.trunc(document.querySelector(targetId).getBoundingClientRect().y);
		// let targetPosition = document.querySelector(targetId).offsetTop;
	let startPosition = window.pageYOffset;
	let distance = parseInt(startPosition) + parseInt(targetPosition) - (document.querySelector(targetId).getAttribute('corrector-JsScroll') ?? 0);
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


 