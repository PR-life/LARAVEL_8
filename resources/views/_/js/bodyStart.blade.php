body.classList.remove('noneJs')

	@include('_.js.const.WH')
	@include('_.js.const.lacalStorage')

if(is_touch_enabled()) {
	body.classList.add('JStouch')
}
	
function is_touch_enabled() {
	return	( 'ontouchstart' in window ) || 
			( navigator.maxTouchPoints > 0 ) || 
			( navigator.msMaxTouchPoints > 0 );
}
			
	 