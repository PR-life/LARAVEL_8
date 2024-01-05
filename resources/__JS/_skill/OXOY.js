import { oX } from '../_sherpa/css/oXoY.js';
import { oY } from '../_sherpa/css/oXoY.js';
import { thisOXOY } from '../_sherpa/css/oXoY.js';
import { thisOXOYsolo } from '../_sherpa/css/oXoY.js';


oX(document.getElementById('Solar'))
oY(document.getElementById('Solar'))


let Solar = document.querySelectorAll(".Solar");
console.log(Solar)
// Solar.forEach(elem => elem.addEventListener("click", linkClick));

Solar.forEach(
	// item => console.log(item.getBoundingClientRect().y)
	item => thisOXOY(item)
	// thisOXOY(Solar)
);

// Solar.forEach(
// 	// item => console.log(item.getBoundingClientRect().y)
// 	item => thisOXOYsolo(item)
// 	// thisOXOY(Solar)
// );
