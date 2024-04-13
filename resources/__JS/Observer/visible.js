const options = {
	root: null,
	rootMargin: '-100px',
	threshold: 0.0,
}
//
// document.addEventListener('DOMContentLoaded', function(){
let arr = document.querySelectorAll('.Visible');
let observer = new IntersectionObserver(callback, options)


arr.forEach( arr => observer.observe(arr))

function callback(entries,observer) {
	entries.forEach(entry => {

		// isIntersecting — булево значение. true если есть пересечение элемента и наблюдаемой области.
		// intersectionRatio — доля пересечения от 0 до 1. Если элемент полностью в наблюдаемой области, то значение будет 1, а если наполовину, то — 0.5.
		// target — сам наблюдаемый элемент для дальнейших манипуляций. Например, для добавления классов.
	
		// console.log(arr);

		// if (intersectionRatio === 1) {
		// 	console.log('Элемент полностью в области наблюдения')
		//   }


		if (entry.isIntersecting){

			if(entry.target.classList.contains('Visible') ) {

				entry.target.classList.remove('visibleOff')
				entry.target.classList.add('visibleOn')
				if(entry.target.hasAttribute('visible-click')) {
					setTimeout(() => entry.target.click(), 200);
				}
				if(!entry.target.hasAttribute('visible-loop')) {
					entry.target.classList.remove('Visible')
				}

			}

			if(entry.target.hasAttribute('visible-node')) {
				// console.log(111)
				let div;

				if(entry.target.getAttribute('visible-node')) {
					div = document.getElementById(entry.target.getAttribute('visible-node'))
				} else {
					div = entry.target;
				}

				// console.log(div)


				div.classList.add(entry.target.getAttribute('visible-param'))
				entry.target.removeAttribute('visible-node')
			}
		} else {
			if(entry.target.classList.contains('Visible')) {
				entry.target.classList.remove('visibleOn')
				entry.target.classList.add('visibleOff')
			}
		}
	})
}


// })


// другая форма записи
/*
new IntersectionObserver((entries,observer) => {
	entries.foreach(
		entry => {
			if(entry.isIntersecting){
				console.log('isIntersecting')
			}
		}
	)
}, {threshold: 1})
*/