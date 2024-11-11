import { listNavigate } from '../_sherpa/listNavigate.js';
import { easeInOutQuad } from '../_skill/easeFunctions.js';
// import { debounce } from '../_skill/debounce.js';
//
import { initializeElements } from './_src/initializeElements.js';
import { initializeEventListeners } from './_src/initializeEventListeners.js';
import { setupMutationObserver } from './_src/setupMutationObserver.js';
//
import { animateMove, move } from './_src/animations.js';
import { startAutoplay, stopAutoplay, restartAutoplay } from './_src/autoplay.js';
import { toggleActiveClass, updateSliderDot, updateVisibleItems } from './_src/utils.js';

export default class Slider {
    constructor(selector) {
        this.rootElem = document.getElementById(selector);
        if (!this.rootElem) throw new Error(`Element with id ${selector} not found`);

        // Инициализация переменной для отслеживания текущей позиции
        this.currentTranslateX = 0;

        // Вызываем методы инициализации
        initializeElements.call(this);
        initializeEventListeners.call(this);
        setupMutationObserver.call(this);

        // Присваивание импортированных функций как методов экземпляра класса
        // this.animateMove = animateMove;
        // this.move = move;
        // this.startAutoplay = startAutoplay;
        // this.stopAutoplay = stopAutoplay;
        // this.restartAutoplay = restartAutoplay;

        // Устанавливаем начальное состояние
        this.dataUpdate(0);

        // Добавляем обработчики клика для индикаторов
        if (this.indicators) {
            // console.log(this.indicators)
            this.indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', () => {
                    this.handleIndicatorClick(index);
                });
            });
        }
    }
    
    updateVisibleItems() {
        const { visibleItems, itemWidth } = updateVisibleItems(this.rootElem, this.track, this.visibleItems, this.itemWidth);
        this.visibleItems = visibleItems;
        this.itemWidth = itemWidth;

        // console.log('visibleItems / itemWidth')
        // console.log( this.visibleItems)
        // console.log(this.itemWidth)

        this.Go(this.getCurrent() - 1); // Обновляем текущий индекс для правильного отображения
    }

    // Метод для обновления ширины элемента
    updateItemWidth() {
        if (!this.items || this.items.length === 0) return;
        this.updateVisibleItems(); // Обновляем количество отображаемых элементов
        this.itemWidth = this.items[0].clientWidth;

        // console.log('updateItemWidth')
        // console.log(this.itemWidth)
    }

    // Движение слайдера к заданному индексу
    Go(index) {
        // Проверка, что элемент видим и itemWidth не равен 0
        const isVisible = this.rootElem.getBoundingClientRect().width > 0;
        let attempts = 0;
        const maxAttempts = 10;

        // console.log(this.itemWidth)

        while (this.itemWidth === 0 && attempts < maxAttempts) {
            if (isVisible) {
                this.updateItemWidth();
                // console.log('updateItemWidth')
            }
            attempts++;
        }
 

        if (attempts === maxAttempts) {
            console.warn("Не удалось установить ширину элемента, возможно элемент скрыт.");
            return;
        }
    
        // Продолжаем движение только если индекс допустим
        if (index < 0 || index >= this.count) return;
        this.move(index);
    
        // Обновляем активный класс для элементов и индикаторов
        this.items.forEach((item, i) => {
            this.toggleActiveClass(item, 'active', i === index);
        });
    
        this.indicators.forEach((indicator, i) => {
            this.toggleActiveClass(indicator, 'active', i === index);
        });
    
        // Разрешаем взаимодействие после завершения движения
        this.trigger = true;
    }

    // Обработка клика по слайдеру с блокировкой
    handleSliderClick(param) {
        if (!this.trigger) return; // Блокируем повторное нажатие, пока выполняется анимация
        this.trigger = false; // Блокируем дальнейшие клики

        const direction = this.getDirection(param);
        if (direction === undefined) {
            this.trigger = true; // Если направление не определено, разблокируем клики
            return;
        }

        this.dataUpdate(direction);

        // Обновление индикаторов
        updateSliderDot(this.indicators, this.getCurrent.bind(this));
    }


    // Обработка клика по индикатору
    handleIndicatorClick(index) {
        // console.log('handleIndicatorClick')
        if (!this.trigger) return; // Блокируем повторное нажатие, пока выполняется анимация
        this.trigger = false; // Блокируем дальнейшие клики

        this.dataUpdate(index);
        // this.move(index);
        updateSliderDot(this.indicators, this.getCurrent.bind(this));
        this.trigger = true;
    }


    // Определение направления
    getDirection(param) {
        return listNavigate(this.getCurrent() - 1, this.count, this.carousel, param);
    }

    // Получение текущего индекса
    getCurrent() {
        const currentIndex = parseInt(this.rootElem.dataset.current);
        return isNaN(currentIndex) ? 1 : currentIndex;
    }


    // Обновление данных
    dataUpdate(index) {
        this.rootElem.dataset.current = index + 1;
    }

    // Универсальная функция для управления классами активности
    toggleActiveClass(element, className, add = true) {
        toggleActiveClass(element, className, add);
    }

    // Метод для плавного движения слайдера
    animateMove = animateMove;

    // Движение слайдера
    move = move;

    // Автоплей
    startAutoplay = startAutoplay;
    stopAutoplay = stopAutoplay;
    restartAutoplay = restartAutoplay;
 
}
