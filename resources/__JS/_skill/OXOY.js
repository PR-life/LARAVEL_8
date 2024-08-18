import { oX } from '../_sherpa/css/oXoY.js';
import { oY } from '../_sherpa/css/oXoY.js';
import { thisOXOY } from '../_sherpa/css/oXoY.js';


// const solarElement = document.getElementById('Solar');
const solarElementXY = document.querySelectorAll(".SOLAR");

if (solarElementXY.length > 0) {
    // Проходимся по каждому элементу в коллекции и вызываем функции oX и oY
    solarElementXY.forEach(element => {
        const relativeToElement = element.getAttribute('data-relativeToElement') === 'true';

        oX(element, relativeToElement); 
        oY(element, relativeToElement);
    });
} else {
    console.warn("No elements with class 'SOLAR' found.");
}

// Получение всех элементов с классом 'Solar'
const solarElements = document.querySelectorAll(".Solar");

if (solarElements.length > 0) {
    solarElements.forEach(item => thisOXOY(item));
} else {
    // console.warn("No elements with class 'Solar' found.");
}