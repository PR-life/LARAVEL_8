const options = {
	root: null,
	rootMargin: '0px',
	threshold: 0.0,
}

//

// alert(111)

// document.addEventListener('DOMContentLoaded', function(){

let hr = document.querySelectorAll('hr')
let observer = new IntersectionObserver(callback, options)

// alert(hr)


hr.forEach( hr => observer.observe(hr))


//
function callback(entries,observer) {
	entries.forEach(entry => {
		
		if(entry.target.nodeName == 'HR') {
			let x = entry.target.dataset.css
			
			if (entry.isIntersecting){
				document.getElementById("body").classList.add(x)
			} else {
				document.getElementById("body").classList.remove(x)
			}
			return
		}
	})
}
//

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