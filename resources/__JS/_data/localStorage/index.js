import { isSet } from "lodash";

export class LocalStorageCss {
	constructor(dbPrefix = 'net'){
		this.body = 'body';
		dbPrefix != 'net' ? this.dbPrefix = dbPrefix + '@' : this.dbPrefix = '';

		localStorage.getItem('first') == null ? localStorage.setItem('first','yes') : '';
		// localStorage.getItem('first') == 'no' ? localStorage.setItem('first','yes') : '';
	}


    update(value,key = this.body) {

		// console.log(value)
		// console.log(key)

		localStorage.setItem(this.dbPrefix + key,value)
        // let data = this.get(key)

		// value = value.split(' ');
		// for (let i in value){
		// 	if(data.includes(value[i])) {
		// 		return
		// 	} else {
		// 		data.push(value[i])
		// 		localStorage.setItem(this.dbPrefix + key,JSON.stringify(data))
		// 	}
		// }

    }


    add(value,key = this.body) {

        let data = this.get(key)

		value = value.split(' ');
		for (let i in value){
			if(data.includes(value[i])) {
				return
			} else {
				data.push(value[i])
				localStorage.setItem(this.dbPrefix + key,JSON.stringify(data))
			}
		}

    }
	
    remove(value,key = this.body) {

        let data = this.get(key);
		let dataNew = [];
		let pushProduct = false;

		value = value.split(' ');

		// console.log(data)
		// console.log(value)
		// console.log(this.#checkValue(data,value[0]))

		// value = value.split(' ');

 		for (let i in data){

			// console.log(i)

			for(let j in value) {

				// console.log(data[i])
				// console.log(data[i] == value[j])

				if(data.includes(value[j])) {
					pushProduct = true;
				}

				if(data[i] == value[j]) {
					// return
				} else {
					dataNew.push(data[i]);
				}

				

				// console.log(data.includes(value[j]))

				// if(data.includes(value[j])) {				
				// 	console.log('есть такой')
				// 	pushProduct = true
				// } else {
				// 	console.log('нету')
				// 	dataNew.push(value[j]);
				// }

			}
		}

		// console.log(dataNew)

		// for (let i in value){

		if(pushProduct) {
			localStorage.setItem(this.dbPrefix + key,JSON.stringify(dataNew))
		}

		// 	// this.#checkValue(data,value[i])

		// 	// console.log(value)
		// 	// console.log(key)
		// 	// console.log(data.includes(value[i]))
		// 	// console.log(this.#checkValue(data,value[i]))
		// }

		// localStorage.removeItem(key,JSON.stringify(data))

    }


	toggle(value, key){
		let data = this.get(key);
		let pushProduct = false;

		value = value.split(' ');

		if(key == null)	{
			key = this.body;
		}


		// console.log(value)
		// console.log(data)
		// console.log(localStorage.getItem(key))


		// if(localStorage.getItem(key) == null) {
		// 	localStorage.setItem(key,JSON.stringify([value[0]]))
		// 	return
		// }

		for (let i in value){
			// console.log(value[i])
			if(!this.#checkValue(data,value[i])) {
				data.push(value[i])
				pushProduct = true
				// console.log(2)
			}
		}

		// console.log(data)
		localStorage.setItem(key,JSON.stringify(data))




		// return {
		// 	pushProduct,
		// 	data
		// 	// ниже полная запись
		// 		// pushProduct: pushProduct,
		// 		// products: products
		// }
	}

	get(param = this.body){
		const data = localStorage.getItem(param);

		if(data !== null){
			return JSON.parse(data)
		}

		return []
	}



	controlFirst() {
		localStorage.getItem('first') == 'yes' ? localStorage.setItem('first','no') : '';
	}

	#checkValue(data,value) {
		const index = data.indexOf(value)

		if(index === -1) {
			return false
		} else {
			data.splice(index,1)
			return true
		}
	}
	#checkFirst() {
		if(localStorage.getItem('first') == 'yes') {
			return true
		}
		return false
	}
}

// const localStorageCss = new LocalStorageCss()
 


//window.addEventListener('storage', lclUl, false);
// window.addEventListener('storage', () => {
// 	console.log('сработка на других открытых вкладках сайт в браузере, проще говоря, сихранизируем данные в раззных вкладках при изменении');
// 	lclUl();
// });

//
/*
class LocalStorageDB
{
   
    // префик БД для отделения ее от остальных
    constructor(dbPrefix) {
        this.dbPrefix = dbPrefix + '@';
    }

    save(key, value) {

        let _value = JSON.stringify(value);

        localStorage.setItem(this.dbPrefix + key, _value);

        return true;
    }


    fetch(key) {
        let data = localStorage.getItem(this.dbPrefix + key);

        if(data === null)
            return false;

        let _data = false;

        try {

            _data = JSON.parse(data);

        } catch (e) {
            console.error(e);
        }

        return _data;
    }

   
    // удаляем значение по ключу
    delete(key) {
        localStorage.removeItem(this.dbPrefix + key);
    }

    // количество строк данных в БД
    rowsCount() {
        return localStorage.length;
    }

   
    // полностью очищаем БД для данного префикса
    drop() {

        const rowsCount = this.rowsCount();

        for( let i=0; i < rowsCount; i++ ) {

            let key = localStorage.key(i);

            if( key.startsWith(this.dbPrefix) )
                this.delete(key);
        }
    }

   
    // очищаем все данные для домена
    dropAll() {
        localStorage.clear();
    }

}

// const db = new LocalStorageDB('MyRusakov');

// db.save('url','https://myrusakov.ru');

// console.log(db.fetch('url'))

// db.drop()

/**/