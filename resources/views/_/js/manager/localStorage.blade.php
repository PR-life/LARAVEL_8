let x09081525 = document.querySelectorAll("[check-localstorage]")
// let x09081525 = document.querySelectorAll("[localstorage-check]")
let x02051653 = document.querySelectorAll("[localstorage-id]")
let x10051101 = document.querySelectorAll("[localstorage-picking]")
let x19072257 = document.querySelectorAll("[localstorage-controlCss]")



// console.log(x09081525)

x09081525.forEach( item => {
	let arr = JSON.parse(localStorage.getItem(item.getAttribute("check-localStorage")))
		check = item.getAttribute('data-check'),
		param = item.getAttribute('param');

	console.log(item)
	console.log(arr)
	console.log(check)
	console.log(param)
 

	if(arr != null && arr.includes(check)) {
		if(param) {
			// console.log(param)
			item.classList.add(param);
		} else {
			// console.log(check)
			item.classList.add(check);
		}
	}



	// if(item.hasAttribute('data-check')) {

	// 	let x = item.getAttribute('data-check');
	// for (let i in arr){

	// 	item.classList.toggle(x);
	// }


	// } else {
		// for (let i in arr){
		// 	console.log(arr[i])
		// 	item.classList.toggle(arr[i]);
		// }
	// }

  
 })


 






//  x09081525.forEach( item => {
// 	let arr = JSON.parse(localStorage.getItem(item.getAttribute("check-localstorage")))


// 	// console.log(arr)
 
// 	if(item.hasAttribute('data-check')) {

// 		let x = item.getAttribute('data-check');
// 		let param = item.getAttribute('param');
		
 
// 		// console.log(param)
// 		// console.log(arr.includes(x))
// 		// console.log(item)

// 		if(arr.includes(x)) {
// 			item.classList.add(param ?? x);
// 		}

// 		// console.log(item)

// 	}

//  })


















x02051653.forEach( item => {
   let arr = JSON.parse(localStorage.getItem(item.id))


	// console.log(arr)
	// console.log(check)
	// console.log(param)
	// console.log(item)

//    console.log(item.getAttribute("localStorage-id") == 'active')

	if(item.getAttribute("localStorage-id") == 'switch') {

		item.setAttribute("data-last", localStorage.getItem(item.id));
	}

	else {
		//    console.log(localStorage.getItem(item.id) == [])
		if(item.hasAttribute("check-localstorage") && arr != null && arr.length > 0) {
			// console.log(item)
			item.classList.toggle(item.getAttribute("check-localstorage"));
		} else {
			// console.log(arr)
			// console.log(arr != null && arr.length > 0)
			for (let i in arr){
				item.classList.toggle(arr[i]);
			}
		}
	}
 
})


x10051101.forEach( item => {
	let arr = item.getAttribute("localstorage-picking").split(' ');
	// console.log(item)
	// console.log(arr)
	for (let i in arr){
		// console.log(arr[i])
		let data = JSON.parse(localStorage.getItem(arr[i])) ?? '0'
		// console.log(data.length > 0)
		if(data.length > 0) {
			item.classList.add(data[0])
		}
	}
})


x19072257.forEach( item => {

	let css;
	let localStorageData = localStorage.getItem(item.getAttribute("param-id")) == null ? '1' : JSON.parse(localStorage.getItem(item.getAttribute("param-id")))

	// console.log(item)
	// console.log(localStorageData)

	// ff = document.getElementById(item.getAttribute("param-id")).querySelector('[data-item="2"]').getAttribute("package");
	// ff = document.getElementById(item.getAttribute("param-id")).querySelectorAll('[data-item="2"]').getAttribute("package");
	// console.log(ff)

	// console.log(document.getElementById(item.getAttribute("param-id")).querySelector("[data-item='2']").getAttribute("package"))

	if(item.hasAttribute("findCssInHtml")) {

		console.log(111);

		// console.log('[data-item=\'' + localStorageData + '\']')
		// console.log(document.getElementById(item.getAttribute("param-id")).querySelector('[data-item=\'' + localStorageData + '\']').getAttribute("package"))

		// console.log(document.getElementById(item.getAttribute("param-id")).querySelector("").getAttribute("package"))
		css = document.getElementById(item.getAttribute("param-id")).querySelector('[data-item=\'' + localStorageData + '\']').getAttribute("package")

		


		let arr = css.split(' ');

 
		if(arr[0] == '') {
			return
		}
		for (let i in arr){
			item.classList.add(arr[i]);
		}
	} 

	if(item.hasAttribute("addcss")) {
		// console.log(222);

		css = item.getAttribute("addcss") + localStorageData
		item.classList.add(css)

		// console.log(css);
		// console.log(item);

		
	} 
	




	 

	// console.log(localStorageData)
	// console.log(param)

	
})