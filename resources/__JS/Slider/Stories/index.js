import { textSlider } from '../oop.js';


window.addEventListener('load',function(){
	try {
		new textSlider('stories_001')
		new textSlider('stories_002')
		new textSlider('quiz_001')
		new textSlider('foto_velkom')
		// new textSlider('stories_003')
		// new textSlider('stories_004')
	} catch (error) {
		console.error(error.message);
	}
})
