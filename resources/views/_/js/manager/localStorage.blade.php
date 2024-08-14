// самостоятельный тег [check-localstorage='filter_tags_1' data-check='active' param='Block']
let x09081525 = document.querySelectorAll("[check-localstorage]")
let x02051653 = document.querySelectorAll("[localstorage-id]")
let x10051101 = document.querySelectorAll("[localstorage-picking]")
let x19072257 = document.querySelectorAll("[localstorage-controlCss]")


// [check-localstorage]
x09081525.forEach(item => {
    const storageKey = item.getAttribute("check-localStorage");
    const arr = getLocalStorageData(storageKey);
    const check = item.getAttribute('data-check');
    const param = item.getAttribute('param');
    const paramDef = item.getAttribute('paramDef');
    const className = param || check;  // Приоритет на param, если он существует

	// console.log(arr);
    if (arr && arr.includes(check)) {
        const shouldAddClass = !item.hasAttribute('localstorage-reverse');
        toggleClass(item, className, shouldAddClass);
    } else if(paramDef) {
		toggleClass(item, paramDef, true);
	}
});




// x09081525.forEach( item => {
// 	let arr = JSON.parse(localStorage.getItem(item.getAttribute("check-localStorage")))
// 		check = item.getAttribute('data-check'),
// 		param = item.getAttribute('param');

// 		// console.log(item)
// 		// console.log(arr)
// 		// console.log(check)
// 		// console.log(param)
 

// 	if(arr != null && arr.includes(check)) {


// 		if(item.hasAttribute('localstorage-reverse')) {
// 			if(param) {
// 				// console.log(param)
// 				item.classList.remove(param);
// 			} else {
// 				// console.log(check)
// 				item.classList.remove(check);
// 			}
// 		} else {
// 			if(param) {
// 				// console.log(param)
// 				item.classList.add(param);
// 			} else {
// 				// console.log(check)
// 				item.classList.add(check);
// 			}
// 		}

// 	}
// })




// [localstorage-id]
x02051653.forEach(item => {
    // Определяем ключ для localStorage: используем либо атрибут, либо ID элемента
    const storageKey = item.getAttribute("localStorage-id") || item.id;
    const arr = getLocalStorageData(storageKey);

    // Если атрибут "localStorage-id" равен 'switch', сохраняем предыдущее значение в "data-last"
    if (item.getAttribute("localStorage-id") === 'switch') {
        item.setAttribute("data-last", localStorage.getItem(item.id));
    } else {
        // Проверка наличия атрибута "check-localstorage" и того, что массив не пустой
        if (item.hasAttribute("check-localstorage") && arr && arr.length > 0) {
            toggleClasses(item, item.getAttribute("check-localstorage"));
        } else {
            toggleClasses(item, arr);
        }
    }
});



// x02051653.forEach( item => {

//    let arr = JSON.parse(localStorage.getItem(item.getAttribute("localStorage-id") ?? item.id))

// 	// console.log(arr)
// 	// console.log(check)
// 	// console.log(param)
// 	// console.log(item)

// //    console.log(item.getAttribute("localStorage-id") == 'active')

// 	if(item.getAttribute("localStorage-id") == 'switch') {
// 		item.setAttribute("data-last", localStorage.getItem(item.id));
// 	}
// 	else {
// 		//    console.log(localStorage.getItem(item.id) == [])
// 		if(item.hasAttribute("check-localstorage") && arr != null && arr.length > 0) {
// 			console.log(1)
// 			// console.log(item)
// 			item.classList.toggle(item.getAttribute("check-localstorage"));
// 		} else {
// 			// console.log(arr)
// 			// console.log(arr != null && arr.length > 0)
// 			for (let i in arr){
// 				item.classList.toggle(arr[i]);
// 			}
// 		}
// 	}
 
// })


x10051101.forEach( item => {
	let arr = item.getAttribute("localstorage-picking").split(' ');
	//  console.log(item)
	//  console.log(arr)
	for (let i in arr){
		//  console.log(arr[i])
		let data = JSON.parse(localStorage.getItem(arr[i])) ?? ''
		// console.log(data)
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


// Функция для безопасного получения и парсинга данных из localStorage
function getLocalStorageData(key) {
    try {
        const data = localStorage.getItem(key);
        return data ? JSON.parse(data) : null;
    } catch (error) {
        console.error(`Ошибка при парсинге данных из localStorage по ключу "${key}":`, error);
        return null;
    }
}

// Функция для изменения классов в зависимости от условий
function toggleClass(item, className, shouldAdd) {
    if (shouldAdd) {
		// console.log('add');
        item.classList.add(className);
    } else {
		// console.log('remove');
        item.classList.remove(className);
    }
}

// Функция для переключения классов на основе массива
function toggleClasses(item, classes) {
    if (Array.isArray(classes)) {
        classes.forEach(className => {
            item.classList.toggle(className);
        });
    } else if (classes) {
        item.classList.toggle(classes);
    }
}