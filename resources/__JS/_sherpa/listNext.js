export function listNext(current,count,stop = false){
	current++;

	if(!stop) {
		current >= count ? --current : '';
	} else if(current >= count) {
		current = 0;
	}
	return current;
}
