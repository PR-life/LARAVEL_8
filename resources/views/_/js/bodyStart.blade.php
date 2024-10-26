body.classList.remove('noneJs')

	@include('_.js.const.WH')
	@include('_.js.const.lacalStorage')


 

if(document.documentElement.clientWidth / document.documentElement.clientHeight >= 1) {
	body.classList.add('AR_h')
} else {
	body.classList.add('AR_v')
}

if (isTouchDevice()) {
	document.body.classList.add('JStouch');
}

{{-- function isTouchDevice() {
	return 'ontouchstart' in window || navigator.maxTouchPoints > 0 || navigator.msMaxTouchPoints > 0;
} --}}

function isTouchDevice() {
    return window.matchMedia("(pointer: coarse)").matches || navigator.maxTouchPoints > 1 || navigator.msMaxTouchPoints > 0;
}