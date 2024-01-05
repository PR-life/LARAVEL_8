"use strict";
import { listNext } from '../_sherpa/listNext.js';
import { listPrev } from '../_sherpa/listPrev.js';

let trigger = true;
const News = document.getElementById('News');

let current = (News.hasAttribute('current')) ? Number(News.getAttribute('current')) - 1 : 0, // 0 - flash; 1- roll
	Track = News.querySelector('.Track'),
	Dot = News.querySelector('.slider-dot'),
	dots = News.querySelectorAll(".dot"),
	items = Track.querySelectorAll(".item");


let innerCountActive = News.querySelector('.slider-nav').querySelector(".x1"),
	innerCountSum = News.querySelector('.slider-nav').querySelector(".x2"),
	btnLeft = News.querySelector('.slider-nav').querySelector(".left"),
	btnRight = News.querySelector('.slider-nav').querySelector(".right");


	
	btnLeft.addEventListener('click', () => sliderClick('prev'))
	btnRight.addEventListener('click', () => sliderClick('next'))

	if(Dot) {
		Dot.addEventListener('click', function(e){
			if(e.target.hasAttribute("data-stopNews")) {return}
			// console.log('dot: ' + e.target.dataset.item)
			sliderCSS('dot',Number(e.target.dataset.item) - 1)
		});
	}



	


constructor(current, items.length)


//
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
			current = listNext(current,items);
			sliderDot();
			break;
		case 'prev':
			current = listPrev(current,items);
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
	}
}

function sliderClick(param) {
	sliderCSS(param)
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
		
		// let slideWidth = (News.querySelector('.Track').dataset.step) ? Number(News.getAttribute('current')) - 1 : 0;
		let slideWidth = News.querySelector('.Track').clientWidth;


		Track.style.transform = `translateX(-${current * slideWidth}px)`;
	}
}


// function sliderNext() {
// 	current++;
// 	if(current >= items.length ) {
// 		current = 0;
// 	}
// 	return current;
// }

// function sliderPrev() {
// 	current--;
// 	if(current < 0) {
// 		current = items.length - 1;
// 	}
// 	return current;
// }
 


//
function sherpa() {
	let x = News.dataset.current;
	current = --x
}

function sync(param){
	// console.log('sync start')
	if(trigger) {
		// console.log('sync go')
		News.dataset.current = param + 1
		innerCountActive.innerText = param + 1 
	} else {
		// console.log('sync !trigger')
		trigger = !trigger;
	}
}


function constructor(param, param2){
	News.dataset.current = param + 1
	News.dataset.count = param2
	innerCountActive.innerText = param + 1 
	innerCountSum.innerText = param2
}




/*
 






	if(!News.dataset.count) {
		News.dataset.count = 0;
	}


	if(type == '1') sliderCSS();

	let style = Track.style.transform,
		transform = (News.dataset.type == 1) ? +style.match(trfRegExp)[0] : 'null';



let timeSetInterval = 4000,
	trfRegExp = /[-0-9.]+(?=px)/,
	// slideWidth = News.querySelector('._shell').clientWidth,
	slideWidth = News.getAttribute('data-w-item'),
	posThreshold = slideWidth * .2;

	console.log(slideWidth)

	// slideWidth = slideWidth * .33;



	

	


let hover;   
	News.addEventListener('mousemove', () => hover = 1);
	News.addEventListener('mouseout', () => hover = 0);
	News.addEventListener('touchstart', () => hover = 0);
	News.addEventListener('touchend', () => hover = 1);

	setInterval(() => News.dataset.auto && !hover && NewsAuto(getSherpa()), timeSetInterval);



// console.log(slideWidth);


Morda(getSherpa());


function NewsClick(param, item) {

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



function NewsAuto(i){

	if(i < items.length - 1) {
		i++;
	} else {
		i = 0;
	}

	Sherpa(i);
	NewsClick('auto')
}







function btnClickDot(i) {
	Sherpa(i);
}


//



	
function Sherpa(i) {
	News.dataset.count = i;
	Morda(i);
	slidersCSSDots(i);
	//
	sherpaNews.let ='';
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
