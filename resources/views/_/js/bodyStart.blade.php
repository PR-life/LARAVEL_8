body.classList.remove('noneJs')

	@include('_.js.const.WH')
	@include('_.js.const.lacalStorage')

if(is_touch_enabled()) {
	body.classList.add('JStouch')
}

if(document.documentElement.clientWidth / document.documentElement.clientHeight >= 1) {
	body.classList.add('AR_h')
} else {
	body.classList.add('AR_v')
}
function is_touch_enabled() {
	return	( 'ontouchstart' in window ) || 
			( navigator.maxTouchPoints > 0 ) || 
			( navigator.msMaxTouchPoints > 0 );
}
			
	 