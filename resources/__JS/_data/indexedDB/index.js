window.addEventListener('load', function(){


	// этот код еще разьбери
		let isDB = false;
		let db;

		if('indexedDB' in window)
		isDB = true
	//


	let openRequest = indexedDB.open('All',1);

	openRequest.onupgradeneeded = function(e){
		console.log('onupgradeneeded');


		let thisDB = e.target.result;
		if(!thisDB.objectStoreNames.contains('kyutinenTable')){
			// thisDB.createObjectStore('kyutinenTable');
			thisDB.createObjectStore('kyutinenTable', {keyPath:'title'});
			// thisDB.createObjectStore('kyutinenTable', {autoIncrement:true});
		}
	};

	openRequest.onsuccess = function(e){
		console.log('onsuccess');


		db = e.target.result;

		console.log(db);

		//Транзакции
		let transaction = db.transaction(['kyutinenTable'], 'readwrite');
		let store = transaction.objectStore('kyutinenTable');
		let course = {
			title: 'Name course 2',
			lenghth: 24,
			description: 'about this course'
		};
		let request = store.add(course);
		// let request = store.add(course,'key2');
		request.onsuccess = function(e){console.log('add Ok')} 


		request.onerror = function(e){
			let err = e.target.error;
			console.log('Error onsuccess:', err.name+': '+err.message);
		}
	};


	openRequest.onerror = function(e){
		let err = e.target.error;
		console.log('Error onerror:', err.name+': '+err.message);
	};


}, false);
// // первый код с пояснениями


// let openRequest = indexedDB.open('courses',2);
// openRequest.onupgradeneeded = function(e){
// 	console.log('onupgradeneeded');
// 	let thisDB = e.target.result;
// 	if(!thisDB.objectStoreNames.contains('courses')){ // objectStoreNames - хранит список имен таблиц
// 		thisDB.createObjectStore('courses');
// 		// thisDB.createObjectStore('courses', {keyPath:'title'});
// 		// thisDB.createObjectStore('courses', {autoIncrement:true});
// 	}
// };
// openRequest.onsuccess = function(e){
// 	// console.log(e);
// 	db = e.target.result;
// 	//Транзакции
// 	let transaction = db.transaction(['courses'], 'readwrite'); // тип (readonly, readwrite)
// 	let store = transaction.objectStore('courses');
// 	let course = {
// 		title: 'Name course',
// 		lenghth: 24,
// 		description: 'about this course'
// 	};
// 	let request = store.add(course,'key'); // .add - Асинхронная операция
// 	request.onsuccess = function(e){console.log('add Ok')} // поэтому делаем так
// 	request.onerror = function(e){
// 		let err = e.target.error;
// 		console.log('Error11:', err.name+': '+err.message);
// 	}
// };
// openRequest.onerror = function(e){
// 	let err = e.target.error;
// 	console.log('Error22:', err.name+': '+err.message);
// };

