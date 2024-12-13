import { throttle } from './_skill/throttle.js';
import { cssSwitch } from './_skill/cssSwitch.js';
import { switchNode } from './_skill/switchNode.js';
import { srcControl } from './_manager/srcControl.js';
import { controlForm } from './_manager/controlForm.js';
//
import { checkEventClick } from './_check/eventClick.js';
import { checkUpDown } from './_check/UpDown.js';
import { actScroll } from './_check/actScroll.js';
//
import {LocalStorageCss} from './_data/localStorage/index.js';

const LocalStorageCss1 = new LocalStorageCss()

let startX = 0;
let isScrolling = false;
let icssVarh = parseInt(document.documentElement.clientHeight);
let icssVarw = document.body.clientWidth;

	/**
	* Creates the list item HTML and returns as a string 
	*/

let cssVarh = throttle(function() {
	if ((icssVarh + 100) < document.documentElement.clientHeight || (icssVarh - 100) > document.documentElement.clientHeight) {
		body.style.setProperty('--h', parseInt(document.documentElement.clientHeight)+'px');
		icssVarh = parseInt(document.documentElement.clientHeight);
	};

	if (icssVarw != document.body.clientWidth) {
		body.style.setProperty('--w', document.body.clientWidth+'px');
		icssVarw = document.documentElement.clientWidth;
	};

	if(document.documentElement.clientWidth / document.documentElement.clientHeight >= 1) {
		body.classList.add('AR_h')
		body.classList.remove('AR_v')
	} else {
		body.classList.add('AR_v')
		body.classList.remove('AR_h')
	}



	document.body.style.setProperty('--AR', (document.documentElement.clientWidth / document.documentElement.clientHeight).toFixed(1));
}, 300);


// let adapt = throttle(function() {
// 	let click = document.querySelectorAll('[data-adaptClick]')
// 	click.forEach( item => item.click())
// }, 300);



window.addEventListener('scroll', throttleScroll, false);
window.addEventListener('resize', cssVarh, false);
// window.addEventListener('resize', adapt, false);

// document.addEventListener('DOMContentLoaded', function(){
const listenerClick = document.querySelectorAll("[data-click]");

for(let i=0; i<listenerClick.length; i++) {
	listenerClick[i].addEventListener("mousedown", fooListenerMousedown);
	listenerClick[i].addEventListener("click", fooListenerClick);
}

	
const stopClick = document.querySelectorAll("[data-stopClick]");
for(let i=0; i<stopClick.length; i++) {
	stopClick[i].addEventListener("click", function(event) {
			event.stopPropagation();
		}
	);
}
// })




//
function throttleScroll(e) {
   if (isScrolling == false) {
      window.requestAnimationFrame(function() {
         scrolling(e);
         isScrolling = false;
        });
    }
    isScrolling = true;
};


function scrolling(e) {
	actScroll();
	checkUpDown();
}


//
function fooListenerMousedown(e) {
	startX = e.clientX;
}

function fooListenerClick(param) {

	// мой Оец ацу где ты был


	// console.log(param)
	// console.log(startX);
	// console.log(param.clientX);
	// console.log(checkEventClick(startX,param.clientX));
	// console.log(param);
	// console.log(startX);
	// console.log(param.clientX);
	// console.log(Math.abs(startX - param.clientX) > 50);

	if(checkEventClick(startX,param.clientX)) {
		param.preventDefault();
		return
	}


	if(param.target.tagName == 'A') {
		return
	}


	// console.log(param.currentTarget);
	if(param.currentTarget.hasAttribute("data-mbl")) {
		if(document.body.clientWidth > 980) {
			return
		}
	}
	
	// console.log(param.target);
	// console.log(param.currentTarget);
	// console.log(param.target.nodeName);
	
	let t = param.target;
	let c = param.currentTarget;

	// console.log(t);
	// console.log(c);


	if(t.hasAttribute("data-stop")) {return}


	if(c.hasAttribute('data-switch')){
		let dataLast = cssSwitch(
			c,
			t.getAttribute('data-item'),
			t.getAttribute('data-switch') != null ? t.getAttribute('data-switch') : 'active',
			t.getAttribute('data-time') ? t.getAttribute('data-time') : '0'
		);
		if(dataLast >= 0) {
			c.setAttribute('data-last',++dataLast);
		} else {
			c.setAttribute('data-last','');
		}
	}

	
	if(c.hasAttribute('data-package')){
		let div = document.getElementById(c.getAttribute('data-package')),
			foo = t.getAttribute('data-packageFoo'),
			type = t.getAttribute('data-packageType');

		// console.log(div)
		// console.log(foo)
		// console.log(type)

		if(type == 'css') {
			switch (foo) {
				case 'toggle':
					cssToggle(div,t.getAttribute('package'))
					break;
				case 'add':
					div.classList.add(t.getAttribute('package'))	 
					break;
				case 'radio':
					div.classList = t.getAttribute('package');	
					break;
				case 'remove':
					div.classList.remove(t.getAttribute('package'))	 
					break;
				default:
					console.log('default data-package!!!')
				}
			
		}

	}

 

	if(c.hasAttribute('closest')){

		let div = c.closest(c.getAttribute('closest')),
			type = c.hasAttribute('data-css') ? 'css' : '',
			action = c.hasAttribute('data-toggle') ? 'toggle' : '';

		// console.log(c)
		// console.log(div)

		if(type == 'css') {
			switch (action) {
				case 'toggle':
					// cssToggle(div,t.getAttribute('package'))
					cssToggle(div,c.getAttribute('data-toggle'))
					// console.log(div)
					break;
				default:
					console.log('default data-package!!!')
				}
			
		}



		return
		 


	}



	

























	if(c.hasAttribute('data-css')){
		// console.log(c)
		if(c.hasAttribute('data-add') && c.getAttribute('data-add') != ''){
			cssAdd(
				switchNode(c),
				c.getAttribute('data-add')
			)
			if(!c.hasAttribute('data-loop')){
				c.setAttribute('data-add','')
			}
		}
	
		if(c.hasAttribute('data-radio')){
			cssRadio(c)
		}	

		if(c.hasAttribute('data-checkbox')){
			cssCheckbox(c)
		}	

		if(c.hasAttribute('data-toggle')){
			cssToggle(
				switchNode(c),
				c.getAttribute('data-toggle')
			) 
		}

		// if(c.hasAttribute('data-remove')){
		// 	cssRemove(c)
		// }

		if(c.hasAttribute('data-remove')){
			cssRemove(
				switchNode(c),
				c.getAttribute('data-remove')
			)
			if(!c.hasAttribute('data-loop')){
				c.setAttribute('data-remove','')
			}
		}


	}

	if(c.hasAttribute("data-veil")){
		Veil.setAttribute('data-goto', c.getAttribute('data-veil'))
	}

	if(c.hasAttribute('data-goto')){
		// console.log('data-goto');
		// console.log(p);
		cssGoto(c.getAttribute('data-goto'),c.getAttribute('data-foo'))
	}


	if(c.hasAttribute('data-src')){
		srcControl(c)
	}

	if(c.hasAttribute('control-form')){
		controlForm(c)
	}

    if(c.hasAttribute("data-fix")){
		// console.log(p);
		cssFix(c,t)
	}

    if(c.hasAttribute("data-pop")){
		// console.log(c)
		// console.log(t)
		preparePop(c,t)
	}



    if(c.hasAttribute("data-localStorage")){
		cssLocalStorage(c,t)

		if(c.getAttribute('data-localStorage') == 'firstNo') {
			LocalStorageCss1.controlFirst()
		}
	}

}

//
function cssLocalStorage(c,t) {
	// console.log(c.id)
	// console.log(c)
	let nameId;
	
	c.hasAttribute('localStorage-id') ? nameId = c.id : nameId = c.getAttribute("localStorage-name");
	
	// console.log(nameId)
	// console.log(c.getAttribute('package'))
	// console.log(t)


	if(c.getAttribute("localStorage-id") == 'switch') {
		// console.log(t.getAttribute("data-item"))
		LocalStorageCss1.update(t.getAttribute('data-item'), nameId)
	} else {
		if(t.getAttribute('package')) {
			LocalStorageCss1.toggle(t.getAttribute('package'), nameId)
		}
	
		if(c.hasAttribute('data-toggle')) {
			LocalStorageCss1.toggle(c.getAttribute('package') ?? c.getAttribute('data-toggle'), nameId)
		}

		if(c.hasAttribute('data-add')) {
			// console.log(nameId)
			LocalStorageCss1.add(c.getAttribute('package') ?? c.getAttribute('data-add'), nameId)
		}
		if(c.hasAttribute('data-remove')) {
			// console.log(nameId)
			LocalStorageCss1.remove(c.getAttribute('package') ?? c.getAttribute('data-remove'), nameId)
		}
	}


 
}


//
function cssGoto(dom, foo) {
	//  console.log(dom)
	if(foo == 'click') {
		// console.log(document.getElementById(dom))
		document.getElementById(dom).click()
	}

}

//

function cssRadio(param){
	let node = param.getAttribute('data-node');
	if(param.getAttribute('data-radio') != null && param.getAttribute('data-radio') != '') {
		let x = String(document.getElementById(node).classList);
		// console.log(typeof(x))
		// console.log(x)
			// console.log(x)
			// console.log(param.getAttribute('data-radio'))

		// if(param.getAttribute('data-radio') != x) {
			// document.getElementById(node).classList = '';
			// document.getElementById(node).classList.add(param.getAttribute('data-radio'));
			// console.log(x)
			// console.log(param.getAttribute('data-radio'))
		// }
		if(param.hasAttribute('data-radiooff')) {
			document.getElementById(node).classList = '';
		}


		if(param.getAttribute('data-radio') != x) {
			// if(param.getAttribute('data-radioOff')) {
				// }
			document.getElementById(node).classList = '';
			document.getElementById(node).classList.add(param.getAttribute('data-radio'));
		}
	}
}

//

function cssCheckbox(param){
	let node = param.getAttribute('data-node');
	if(param.getAttribute('data-checkbox') != null && param.getAttribute('data-checkbox') != '') {
		if(document.getElementById(node).classList.contains(param.getAttribute('data-checkbox'))) {
			document.getElementById(node).classList.remove(param.getAttribute('data-checkbox'))
		} else {
			document.getElementById(node).classList = '';
			document.getElementById(node).classList.add(param.getAttribute('data-checkbox'));
		}
	}


}


//




function cssToggle(param, css = null){
	let arr;
	
	// console.log(param)
	// console.log(css)
	// console.log(arr)

	if(css) {
		arr = css.split(' ');
	} else {
		arr = param.getAttribute("data-toggle").split(' ');
	}

	if(param) {
		for (let i in arr){
			param.classList.toggle(arr[i]);
		}
	}

}






function cssAdd(param, css = null){
	let arr;

	if(css) {
		arr = css.split(' ');
	} else {
		arr = param.getAttribute("data-add").split(' ');
	}

	if(arr[0] == '') {
		return
	}
	for (let i in arr){
		param.classList.add(arr[i]);
	}

	// console.log('add')
}







function cssRemove(param, css = null){
	let arr;

	if(css) {
		arr = css.split(' ');
	} else {
		arr = param.getAttribute("data-remove").split(' ');
	}

	if(arr[0] == '') {
		return
	}

	for (let i in arr){
		param.classList.remove(arr[i]);
	}

	// console.log('add')
}


/*
function cssGoto(dom, event) {
	// console.log(dom);
	// console.log(event);
	if(event == 'click') {
		// console.log('1');
		document.getElementById(dom).click()
		// document.getElementById(dom).fooListenerClick()
		document.getElementById(dom).style.opacity = '.5'
	}

}
/* */

function preparePop(param, target) {
	// console.log(param)
	// console.log(target)
	let pop = document.getElementById('Pop'),
		node = '',
		src,
		css;



	if(param.hasAttribute('popSrc')) {
		src = param.getAttribute('popSrc')
	}


	if(param.getAttribute('data-pop') == 'youtube' && src) {
		css = 'Article'
		node += '<div class="' + css + ' aura HWin Video">'
		node += '<div class="W-100 / relative yesEvents">'
		node += '<img class="W-100 Bg -gif" src="data:image/gif;base64,R0lGODlhEAAJAIAAAP///wAAACH5BAEAAAEALAAAAAAQAAkAAAIKjI+py+0Po5yUFQA7">';
		node += '<div class="Abs -all"><iframe src="' + src + '" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0"></iframe></div>'
		node += '</div>'
		node += '<div class="hill-m"></div>'
		node += '</div>'
	} else {
		let text = param.querySelector('[popText]').textContent
		node += '<div class="Blog aura HWin / flex cC cI_PC eI_mbl noEvents">'
		// node += '<div class="Blog aura HWin / flex cC cI noEvents">'
		node += '<div class="_pop / W-100 p / bg-pop space round relative yesEvents">'
		node += '<div class="text">'
		node += text
		node += '</div>'
		node += '</div>'
		node += '</div>'
	}




	// console.log(node)


	pop.querySelector('._fix').innerHTML = node;
	pop.click()
}

function cssFix(param, target){

 

	if(param.getAttribute('data-fix') == '') {


		if(document.getElementById("body").classList.contains('fix')) {
			// console.log(111)
			param.setAttribute('data-fix', 'solo')
			// param.classList.remove('off');
		} else {
			param.setAttribute('data-fix', 'on')
			param.classList.remove('off');
			document.getElementById("body").classList.add('fix')
		}

 



	}



	if(param.getAttribute('data-fix') == 'on') {

		if(target.hasAttribute("data-close")) {
			param.setAttribute('data-fix', '')
			param.classList.remove('on');
			
			// console.log(1);

			// if(param.hasAttribute('css-off')) {
			// 	param.classList.add('off');
			// }

			if(target.getAttribute('data-close') != 'this') {
				document.getElementById("body").classList.remove('fix')
			}

			if(param.hasAttribute('data-add')) {
				param.setAttribute('data-add', 'on')
			}

			if(param.hasAttribute('data-trash')) {
				trash(param)
			}
		}
	}



	if(param.getAttribute('data-fix') == 'solo') {

		if(target.hasAttribute("data-close")) {
			param.setAttribute('data-fix', '')
			param.classList.remove('on');
			
			// console.log(1);

			// if(param.hasAttribute('css-off')) {
			// 	param.classList.add('off');
			// }

			if(param.hasAttribute('data-add')) {
				param.setAttribute('data-add', 'on')
			}

			if(param.hasAttribute('data-trash')) {
				trash(param)
			}
		}
	}


}



//
function trash(node){
	node.querySelector('[data-trashThis]').innerHTML = ""
}