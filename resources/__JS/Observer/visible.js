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
		if (entry.isIntersecting){
			if(entry.target.classList.contains('Visible')) {
				entry.target.classList.remove('visibleOff')
				entry.target.classList.add('visibleOn')
				if(entry.target.hasAttribute('visible-click')) {
					setTimeout(() => entry.target.click(), 200);
				}
				if(!entry.target.hasAttribute('visible-loop')) {
					entry.target.classList.remove('Visible')
				}
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