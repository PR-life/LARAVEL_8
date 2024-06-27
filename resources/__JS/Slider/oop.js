import { listNext } from '../_sherpa/listNext.js';
import { listPrev } from '../_sherpa/listPrev.js';
import { cssSwitch } from '../_skill/cssSwitch.js';

export default class Slider {

	constructor(selector){
        this.rootElem = document.getElementById(selector);
        if (!this.rootElem) throw new Error(`Element with id ${selector} not found`);

        this.Track = this.rootElem.querySelector('.Track');
        if (!this.Track) throw new Error(`Track element not found in ${selector}`);

        this.items = this.Track.querySelectorAll(".item");
        if (this.items.length === 0) throw new Error(`No items found in the track of ${selector}`);

        this.count = this.items.length;

        this.sherpa = this.rootElem.querySelector('.sherpaSlider');
        if (!this.sherpa) throw new Error(`Sherpa element not found in ${selector}`);

        this.carousel = this.Track.dataset.carousel === 'true';
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
		//Здесь всё в порядке, но можно добавить проверку индекса x на допустимый диапазон.
		if (x < 0 || x >= this.count) return;
		this.move(x);
		cssSwitch(this.Track, this.items[x].getAttribute('data-item'));
	}


	sliderClick(param){
		const direction = this.direction(param);
		if (direction === undefined) return;
		this.dataUpdate(direction);
		this.sliderDotUpdate();
	}
	

	direction(param){
		const arr = {
			prev: listNext(this.getCurrent() - 1,this.count,this.carousel),
			next: listPrev(this.getCurrent() - 1,this.count,this.carousel),
		};
		return arr[param];
	}

	
	getCurrent(){
		return parseInt(this.rootElem.dataset.current) || 1;
	}
	
	move(x){
		this.Track.style.transform = `translateX(-${x * this.Track.querySelector('.item').clientWidth}px)`;
	}
	
	dataUpdate(x){
		this.rootElem.dataset.current = x + 1;
	}
	sliderDotUpdate(){
		const sliderDot = this.rootElem.querySelector('.slider-dot .Sherpa');
		if (sliderDot){
			sliderDot.dataset.item = this.rootElem.dataset.current;
			sliderDot.click();
		}
	}

}

export class textSlider extends Slider{
	// constructor(selector){
	// 	super(selector);
	// 	this.innerCountActive = this.rootElem.querySelector('.slider-nav .x1');
	// 	if (!this.innerCountActive) throw new Error(`Element .slider-nav .x1 not found in ${selector}`);
	// 	let innerCountSum = this.rootElem.querySelector('.slider-nav .x2');
	// 	if (!innerCountSum) throw new Error(`Element .slider-nav .x2 not found in ${selector}`);
	// 	innerCountSum.innerText = this.items.length;
	// }

    constructor(selector) {
        super(selector);
        this.innerCountActive = this.rootElem.querySelector('.slider-nav .x1');
        let innerCountSum = this.rootElem.querySelector('.slider-nav .x2');

        // Проверяем, существуют ли элементы перед выполнением операций
        if (this.innerCountActive) {
            this.innerCountActive.innerText = this.items.length;
        }

        if (innerCountSum) {
            innerCountSum.innerText = this.items.length;
        }
    }
    // Go(x){
    //     super.Go(x);
    //     this.innerCountActive.innerText = x + 1;
    // }

	Go(x) {
        this.move(x);
        
        // Проверяем, существует ли элемент перед выполнением операций
        if (this.innerCountActive) {
            this.innerCountActive.innerText = ++x;
        }
    }
}
 