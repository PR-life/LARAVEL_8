 // !!!!!! не проверял при переносе на этот проект (код твой, от 2022 02 28)
	console.log(isDB);
	let openRequest = indexedDB.open('All',1);

	openRequest.onupgradeneeded = function(e){
		console.log('Read_onupgradeneeded');
		let thisDB = e.target.result;
	};

	openRequest.onsuccess = function(e){
		console.log('Read_onsuccess');


		db = e.target.result;

		//Транзакции
		let transaction = db.transaction(['nameTable'], 'readonly');
		let store = transaction.objectStore('nameTable');

		let request = store.get('Name course'); // запись по ключу 'Name course'
		// let request = store.delete('Name course'); // меняем transaction на readwrite
		// let request = store.put(object, 'Name course'); // меняем transaction на readwrite


		request.onsuccess = function(e){
			console.dir(e.target.result);
		} 

		request.onerror = function(e){
			let err = e.target.error;
			console.log('Read_Error onsuccess:', err.name+': '+err.message);
		}
	};


	openRequest.onerror = function(e){
		let err = e.target.error;
		console.log('Read_Error onerror:', err.name+': '+err.message);
	};

