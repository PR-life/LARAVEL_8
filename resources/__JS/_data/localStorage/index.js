export class LocalStorageCss {
    constructor(dbPrefix = 'net') {
        this.body = 'body';
        this.dbPrefix = dbPrefix !== 'net' ? `${dbPrefix}@` : '';

        if (!localStorage.getItem('first')) {
            localStorage.setItem('first', 'yes');
        }
    }

    update(value, key = this.body) {
        localStorage.setItem(this.dbPrefix + key, value);
    }

    add(value, key = this.body) {
        this._addOrRemove(value, key, 'add');
    }

    remove(value, key = this.body) {
        this._addOrRemove(value, key, 'remove');
    }

    toggle(value, key = this.body) {
        const data = this.get(key);
        value.split(' ').forEach(item => {
            const index = data.indexOf(item);
            if (index === -1) {
                data.push(item);
            } else {
                data.splice(index, 1);
            }
        });
        localStorage.setItem(this.dbPrefix + key, JSON.stringify(data));
    }

    get(key = this.body) {
        const data = localStorage.getItem(this.dbPrefix + key);
        return data ? JSON.parse(data) : [];
    }

    controlFirst() {
        localStorage.setItem('first', this.#checkFirst() ? 'no' : 'yes');
    }

    syncStorage(callback) {
        window.addEventListener('storage', callback);
    }

    #checkFirst() {
        return localStorage.getItem('first') === 'yes';
    }

    _addOrRemove(value, key, action) {
        const data = this.get(key);
        value.split(' ').forEach(item => {
            const index = data.indexOf(item);
            if (action === 'add' && index === -1) {
                data.push(item);
            } else if (action === 'remove' && index !== -1) {
                data.splice(index, 1);
            }
        });
        localStorage.setItem(this.dbPrefix + key, JSON.stringify(data));
    }
}
