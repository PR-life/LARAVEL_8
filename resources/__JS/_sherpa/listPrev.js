export function listPrev(current,count,stop = false){
	current--;

	if(!stop) {
		current < 0 ? ++current : '';
	} else {
		current < 0 ? current = --count : '';
	}
	return current;
}

