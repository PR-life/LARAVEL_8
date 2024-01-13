import { listNext } from '../_sherpa/listNext.js';
import { listPrev } from '../_sherpa/listPrev.js';
import { cssSwitch } from '../_skill/cssSwitch.js';

export default class Slider {
	constructor(selector){
		this.rootElem = document.getElementById(selector)
		this.Track = this.rootElem.querySelector('.Track')
		this.items = this.Track.querySelectorAll(".item")
		this.count = this.items.length
		this.sherpa = this.rootElem.querySelector('.sherpaSlider')
		this.carousel = this.Track.dataset.carousel ?? false;
		this.trigger = true;


		let btnLeft = this.rootElem.querySelector('._btn.left')
		let btnRight = this.rootElem.querySelector('._btn.right')
		let observer = new MutationObserver(
			() => {
				this.Go(this.rootElem.dataset.current - 1)
			}
		);

		// console.log(this.items)
		 
		observer.observe(this.rootElem, {attributes:true});
		this.sherpa.addEventListener('click', () => this.sliderClick())
		btnLeft.addEventListener('click', () => this.sliderClick('next'))
		btnRight.addEventListener('click', () => this.sliderClick('prev'))
		this.dataUpdate(0)

	}


	Go(x){
		// console.log(this.items[x])
		this.move(x)
		cssSwitch(this.Track,this.items[x].getAttribute('data-item'))

		// cssSwitch(
		// 	c,
		// 	t.getAttribute('data-item'),
		// 	t.getAttribute('data-switch') != null ? t.getAttribute('data-switch') : 'active',
		// 	t.getAttribute('data-time') ? t.getAttribute('data-time') : '0'
		// );
		// export function cssSwitch(param, item, css = 'active',time = 0){

	}


	sliderClick(param){
		// console.log(this.sherpa)
		// console.log(this.trigger)
		// console.log(this.count)
		// console.log(param)
		// console.log(this.getCurrent())
		// console.log(2222)
		// this.move(this.direction(param))
		// console.log(this.carousel)
		this.dataUpdate(this.direction(param))
		this.sliderDotUpdate()
		
	}

	direction(param){
		// console.log(param)
		let arr = {
			prev: listNext(this.getCurrent() - 1,this.count,this.carousel),
			next: listPrev(this.getCurrent() - 1,this.count,this.carousel),
		}
		return arr[param];
	}


	getCurrent(){return this.rootElem.dataset.current ?? 1}
	move(x) {this.Track.style.transform = `translateX(-${x * this.Track.querySelector('.item').clientWidth}px)`;}
	dataUpdate(x){this.rootElem.dataset.current = ++x}
	sliderDotUpdate(){
		if(this.rootElem.querySelector('.slider-dot')){
			this.rootElem.querySelector('.slider-dot .Sherpa').dataset.item = this.rootElem.dataset.current
			this.rootElem.querySelector('.slider-dot .Sherpa').click()
		}
	}

}

export class textSlider extends Slider{

	constructor(selector){
		super(selector)		
		this.innerCountActive = this.rootElem.querySelector('.slider-nav .x1')
		let innerCountSum = this.rootElem.querySelector('.slider-nav .x2')

		innerCountSum.innerText = this.items.length
	}

	Go(x){
		this.move(x)
		this.innerCountActive.innerText = ++x
	}

}


 