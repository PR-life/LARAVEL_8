import { textSlider } from '../oop.js';


window.addEventListener('load',function(){
	try {
		new textSlider('stories_001')
	} catch (error) {
		console.error(error.message);
	}
})
