export function checkEventClick(start,active) {
	if(Math.abs(start - active) > 50 && active != 0) {
		return true
	}
}