"use strict";
import { listNext } from '../_sherpa/listNext.js';
import { listPrev } from '../_sherpa/listPrev.js';

let trigger = true;
const Slider = document.getElementById('Slider');

let type = (Slider.hasAttribute('type')) ? Slider.getAttribute('type') : 0, // 0 - flash; 1- roll
	current = (Slider.hasAttribute('current')) ? Number(Slider.getAttribute('current')) - 1 : 0, // 0 - flash; 1- roll
	Track = Slider.querySelector('.Track'),
	Dot = Slider.querySelector('.slider-dot'),
	dots = Slider.querySelectorAll(".dot"),
	items = Track.querySelectorAll(".item");


let innerCountActive = Slider.querySelector('.slider-nav').querySelector(".x1"),
	innerCountSum = Slider.querySelector('.slider-nav').querySelector(".x2"),
	btnLeft = Slider.querySelector('.slider-nav').querySelector(".left"),
	btnRight = Slider.querySelector('.slider-nav').querySelector(".right");


	
	btnLeft.addEventListener('click', () => sliderClick('prev'))
	btnRight.addEventListener('click', () => sliderClick('next'))

	if(Dot) {
		Dot.addEventListener('click', function(e){
			if(e.target.hasAttribute("data-stopSlider")) {return}
			// console.log('dot: ' + e.target.dataset.item)
			sliderCSS('dot',Number(e.target.dataset.item) - 1)
		});
	}



	


constructor(current, items.length)


//

function sliderClick(param) {
	sliderCSS(param)
}


function sliderCSS(param, paramDot = null) {
	// console.log(paramDot)
	sherpa();
	sliderkCase(param, paramDot)
	sliderMove()
	sync(current);
};

 
function sliderkCase(param, itemDot) {
	switch (param) {
		case 'next':
			current = listNext(current,items.length);
			sliderDot();
			break;
		case 'prev':
			current = listPrev(current,items.length);
			sliderDot();
			break;
		case 'dot':
			if(itemDot == 0 || itemDot) {
				if(itemDot != current) {
					// console.log('current: ' + current)
					// console.log('itemDot: ' + itemDot)
					current = itemDot
				} else {
					trigger = false;
				}
			} else {
				trigger = false;
			}
			break;
		// case 'auto':
		// 	if(count != 0) {
		// 		items[count - 1].classList.remove('active');
		// 	} else {
		// 		items[items.length - 1].classList.remove('active');
		// 	}
		// 	break;
		// default:
		// 	alert( "Нет таких значений" );
	}
}

 

function sliderDot() {
	if(Dot) {
		Dot.querySelector('.Sherpa').dataset.item = current + 1
		Dot.querySelector('.Sherpa').click()
	}
}

function sliderMove() {
	if(trigger) {
		// console.log('sliderMove')
		
		// let slideWidth = (Slider.querySelector('.Track').dataset.step) ? Number(Slider.getAttribute('current')) - 1 : 0;
		let slideWidth = Slider.querySelector('.Track .item').clientWidth;


		Track.style.transform = `translateX(-${current * slideWidth}px)`;
	}
}

//
		function sherpa() {
			let x = Slider.dataset.current;
			current = --x
		}

function sync(param){
	// console.log('sync start')
	if(trigger) {
		// console.log('sync go')
		Slider.dataset.current = param + 1
		innerCountActive.innerText = param + 1 
	} else {
		// console.log('sync !trigger')
		trigger = !trigger;
	}
}


function constructor(param, param2){
	Slider.dataset.current = param + 1
	Slider.dataset.count = param2
	innerCountActive.innerText = param + 1 
	innerCountSum.innerText = param2
}




/*
 






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







function btnClickDot(i) {
	Sherpa(i);
}


//



	
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










/**/
