export function oX(node){
	// console.log(node)
	const rect = node.getBoundingClientRect()

	node.addEventListener('mousemove', (e) => {
		window.requestAnimationFrame(function() {
			node.style.setProperty('--oX', e.clientX);
			// node.style.setProperty('--oX', e.clientX - Math.trunc(rect.left));
		});
	});
}


export function oY(node){
	// console.log(node)
	const rect = node.getBoundingClientRect()

	node.addEventListener('mousemove', (e) => {
		window.requestAnimationFrame(function() {
			// node.style.setProperty('--oY', e.clientY - Math.trunc(rect.top));
			node.style.setProperty('--oY', e.clientY);
		});
	});
}


export function thisOXOY(node){

	node.addEventListener('mouseover', (e) => {
		window.requestAnimationFrame(function() {
			// console.log(node)

			const rect = node.getBoundingClientRect()
			node.style.setProperty('--oXthis', Math.trunc(rect.x));
			node.style.setProperty('--oYthis', Math.trunc(rect.y));
		});
	});

	// console.log(node.getBoundingClientRect().y)
	// const rect = node.getBoundingClientRect()
	// node.style.setProperty('--oXthis', Math.trunc(rect.x));
	// node.style.setProperty('--oYthis', Math.trunc(rect.y));
}

export function thisOXOYsolo(node){

	const rect = node.getBoundingClientRect()
	node.style.setProperty('--oXthis', Math.trunc(rect.x));
	node.style.setProperty('--oYthis', Math.trunc(rect.y));

}


// function ox(e){
// 	console.log(node)
// 	e.style.setProperty('--oX', e.clientX - Math.trunc(rect.left));
// }


// function oy(e){
// 	Solar.style.setProperty('--oX', e.clientX - Math.trunc(rect.left));
// 	Solar.style.setProperty('--oY', e.clientY - Math.trunc(rect.top));
// }


 


