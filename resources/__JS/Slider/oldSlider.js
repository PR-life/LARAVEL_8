"use strict";

// import { cssSwitch } from './_skill/cssSwitch.js';

+function(){
window.sherpaSlider = {
	let: "",

	go: function() {Sherpa(getSherpa())},
	update: function() {Sherpa(this.let)}


};
}()


const Slider = document.getElementById('Slider');

let type = (Slider.dataset.type) ? Slider.dataset.type : '0', // 0 - flash; 1- roll
	Track = Slider.querySelector('.Track'),
	Dot = Slider.querySelector('._dot'),
	dots = Slider.querySelectorAll(".dot"),
	items = Track.querySelectorAll(".item");

	if(!Slider.dataset.count) {
		Slider.dataset.count = 0;
	}


	if(type == '1') sliderCSS();

	let style = Track.style.transform,
		transform = (Slider.dataset.type == 1) ? +style.match(trfRegExp)[0] : 'null';



let timeSetInterval = 4000,
	trfRegExp = /[-0-9.]+(?=px)/,
	// slideWidth = Slider.querySelector('._shell').clientWidth,
	slideWidth = Slider.getAttribute('data-w-item'),
	posThreshold = slideWidth * .2;

	console.log(slideWidth)

	// slideWidth = slideWidth * .33;


let innerCountActive = Slider.querySelector('._nav').querySelector("._content").querySelector("._l"),
	innerCountSum = Slider.querySelector('._nav').querySelector("._content").querySelector("._r"),
	btnLeft = Slider.querySelector('._nav').querySelector('._btn._l'),
	btnRight = Slider.querySelector('._nav').querySelector('._btn._r');


	btnLeft.addEventListener('click', () => SliderClick('prev'))
	btnRight.addEventListener('click', () => SliderClick('next'))
	Dot.addEventListener('click', function(e){
		if(e.target && e.target.matches('div.dot')) {
			SliderClick('dot', Number(e.target.dataset.item) - 1)
		}
	});


let hover;   
	Slider.addEventListener('mousemove', () => hover = 1);
	Slider.addEventListener('mouseout', () => hover = 0);
	Slider.addEventListener('touchstart', () => hover = 0);
	Slider.addEventListener('touchend', () => hover = 1);

	setInterval(() => Slider.dataset.auto && !hover && SliderAuto(getSherpa()), timeSetInterval);



// console.log(slideWidth);


Morda(getSherpa());


function SliderClick(param, item) {

	let count = getSherpa();


	switch (param) {
		case 'next':
			items[count].classList.remove('active');
			count = btnClickNext(count);
			break;
		case 'prev':
			items[count].classList.remove('active');
			count = btnClickPrev(count);
			break;
		case 'dot':
			items[count].classList.remove('active');
			count = item;
			break;
		case 'auto':
			if(count != 0) {
				items[count - 1].classList.remove('active');
			} else {
				items[items.length - 1].classList.remove('active');
			}
			break;
		// default:
		// 	alert( "Нет таких значений" );
	}


	items[count].classList.add('active');
	if(type == '1') Track.style.transform = `translate3d(${-slideWidth * count}px, 0px, 0px)`;

	Morda(count);
	Sherpa(count);
}



function SliderAuto(i){

	if(i < items.length - 1) {
		i++;
	} else {
		i = 0;
	}

	Sherpa(i);
	SliderClick('auto')
}

function btnClickNext(i) {
	i++;
	if(i >= items.length ) {
		i = 0;
	}
	return i;
}

function btnClickPrev(i) {
	i--;
	if(i < 0) {
		i = items.length - 1;
	}
	return i;
}

function btnClickDot(i) {
	Sherpa(i);
}


//

function getSherpa() {
	return Number(Slider.dataset.count);
}
	
function Sherpa(i) {
	Slider.dataset.count = i;
	Morda(i);
	slidersCSSDots(i);
	//
	sherpaSlider.let ='';
}

/////////

function slidersCSSDots(count) {
	for (let i = 0; i < dots.length; i++) {
		if(count == i) {
			dots[i].classList.add('active');
		} else {
			dots[i].classList.remove('active');
		}
	}
}


// cssSwitch(param, item, css){
// 	for (let i = 0; i < param.children.length; i++) {
// 		param.children[i].classList.remove(css);
// 	}
// 	param.children[item - 1].classList.add(css);
// }





function sliderCSS() {
	let count = getSherpa();

	slideWidth = Slider.querySelector('._shell').clientWidth,
	posThreshold = slideWidth * .2;


	Track.style.transform = `translate3d(-${count * slideWidth}px, 0px, 0px)`;
	Track.style.transition = 'transform .5s';
};


function Morda(i){
	innerCountActive.innerText = i + 1;
	innerCountSum.innerText = items.length;
}
