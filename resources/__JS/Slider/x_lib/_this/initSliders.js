import Slider from '../oop.js';

export function initializeSliders() {
    // Пример инициализации слайдера с конкретным селектором
    // new Slider('slider_ag_morda');

    const sliderClasses = ['jsSlider'];

    sliderClasses.forEach(sliderClass => {
        const elements = document.querySelectorAll(`.${sliderClass}`);
        elements.forEach(element => {
            // console.log(element.id)
            new Slider(element.id);
        });
    });

}