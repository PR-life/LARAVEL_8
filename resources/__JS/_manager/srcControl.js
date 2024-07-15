export function srcControl(param) {

	let status = param.getAttribute('data-fix'),
		arr = param.querySelectorAll('[data-link]')

	
	// console.log('wtf ?? srcControl');
	// console.log(param.hasAttribute('data-done'));
	// console.log(param);
	// console.log(status);
	// console.log(arr);

	if(!param.hasAttribute('data-done')) {

		for (let element of arr) {
			element.src = element.getAttribute('data-link');
			if(element.tagName == 'IFRAME') {
				element.setAttribute('data-link', 'load');
			} else {
				console.log(element);
				// element.onload = function() {
				// 	try {
				// 		element.setAttribute('data-link', 'done');
				// 	} catch(e) {
				// 	console.log(e);
				// 	}
				// }
				param.querySelector('video').load();
				param.querySelector('video').play();
			}

		};
		param.setAttribute('data-done','video')

		return
	} else {

		 

		switch (status) {
			case 'on':
			case 'On':
				for (let element of arr) {
					// console.log(1);
					if(element.tagName == 'IFRAME') {
						iframeYoutubeVideo(element,'pauseVideo'); //playVideo pauseVideo stopVideo
					}
					if(element.tagName == 'SOURCE') {
						param.querySelector('video').pause();
					}
				}
			  break;
			case '':
				for (let element of arr) {
					// console.log(2);
					if(element.tagName == 'IFRAME') {
						iframeYoutubeVideo(element,'playVideo');
					}
					if(element.tagName == 'SOURCE') {
						param.querySelector('video').play();
					}
				}
			  break;
			default:
			  alert('11111111111');
		  }
	}
}


function iframeYoutubeVideo(param, status) {
	param.contentWindow.postMessage('{"event":"command","func":"' + status + '","args":""}', '*');
}
