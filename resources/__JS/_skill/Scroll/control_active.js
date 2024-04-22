let threshold = window.innerHeight / 2;
let activeItems = document.querySelectorAll(".JsScroll.js_param-active a");
//
let scrollDelay = 50;
let scrollTimeout;

window.addEventListener('scroll', function(){
	clearTimeout(scrollTimeout)
	scrollTimeout = setTimeout(onScroll, scrollDelay)
});

function onScroll(){

	for(let i = activeItems.length - 1; i >= 0; i--) {
		let a = activeItems[i]
		let div = document.querySelector(a.hash)

		 

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