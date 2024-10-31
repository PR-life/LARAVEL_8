import { listNavigate } from '../_sherpa/listNavigate.js';
import { easeInOutQuad } from '../_skill/easeFunctions.js';
import { debounce } from '../_skill/debounce.js';

export default class Slider {
    constructor(selector) {
        this.rootElem = document.getElementById(selector);
        if (!this.rootElem) throw new Error(`Element with id ${selector} not found`);

        // Инициализация переменной для отслеживания текущей позиции
        this.currentTranslateX = 0;

        // Вызываем методы инициализации
        this.initializeElements();
        this.initializeEventListeners();
        this.setupMutationObserver();

        // Устанавливаем начальное состояние
        this.dataUpdate(0);
    }

    // Инициализация элементов
    initializeElements() {
        this.track = this.rootElem.querySelector('.Track');
        if (!this.track) throw new Error(`Track element not found in ${this.rootElem.id}`);

        this.items = this.track.querySelectorAll(".item");
        if (this.items.length === 0) throw new Error(`No items found in the track of ${this.rootElem.id}`);

        this.count = this.items.length;

        this.itemWidth = this.items[0].clientWidth; // Кэшируем ширину элемента

		// console.log('this.itemWidth')
		// console.log(this.itemWidth)

        this.sherpa = this.rootElem.querySelector('.sherpaSlider');
        if (!this.sherpa) throw new Error(`Sherpa element not found in ${this.rootElem.id}`);

        this.carousel = this.track.dataset.carousel === 'true';
        this.trigger = true;

        this.btnLeft = this.rootElem.querySelector('._btn.left');
        this.btnRight = this.rootElem.querySelector('._btn.right');

        this.indicators = this.rootElem.querySelectorAll('.slider-dot'); // Находим индикаторы

        // Добавляем плавную анимацию
        this.track.style.transition = 'transform 0.5s ease-in-out';
    }

    updateVisibleItems() {
        const windowWidth = window.innerWidth;

        // Проверка наличия CSS-классов для количества видимых элементов
        if (this.rootElem.classList.contains('visible-1')) {
            this.visibleItems = 1;
        } else if (this.rootElem.classList.contains('visible-2')) {
            this.visibleItems = 2;
        } else if (this.rootElem.classList.contains('visible-3')) {
            this.visibleItems = 3;
        } else if (this.rootElem.classList.contains('visible-4')) {
            this.visibleItems = 4;
        } else {
            // Если класс не задан, используем стандартные настройки в зависимости от ширины окна
            if (windowWidth < 768) {
                this.visibleItems = 2;
            } else if (windowWidth < 1200) {
                this.visibleItems = 2;
            } else {
                this.visibleItems = 4;
            }
        }

		// console.log('this.visibleItems')
		// console.log(this.visibleItems)
        this.itemWidth = this.track.clientWidth / this.visibleItems; // Обновляем ширину элемента
        this.Go(this.getCurrent() - 1); // Обновляем текущий индекс для правильного отображения
    }

    initializeEventListeners() {
        this.updateVisibleItems(); // Первоначальное обновление количества отображаемых элементов
        if (this.sherpa) {
            this.sherpa.addEventListener('click', () => {
                this.restartAutoplay();
                this.sliderClick();
            });
        }
        if (this.btnLeft) {
            this.btnLeft.addEventListener('click', () => {
                this.restartAutoplay();
                this.handleSliderClick('prev');
            });
        }
        if (this.btnRight) {
            this.btnRight.addEventListener('click', () => {
                this.restartAutoplay();
                this.handleSliderClick('next');
            });
        }

        // Добавляем обработчик события resize с использованием дебаунса
        window.addEventListener('resize', debounce(() => {
            this.updateItemWidth();
            this.updateVisibleItems(); // Вызываем обновление количества отображаемых элементов
            this.restartAutoplay();
        }, 200));

        // Добавляем паузу при наведении на слайдер
        this.rootElem.addEventListener('mouseenter', () => {
            this.stopAutoplay();
        });

        this.rootElem.addEventListener('mouseleave', () => {
            this.restartAutoplay();
        });

        // Добавляем обработчик события visibilitychange для автоплея
        document.addEventListener('visibilitychange', () => {
            if (document.hidden) {
                this.stopAutoplay();
            } else {
                this.restartAutoplay();
            }
        });

        // Запуск автоплея
        this.startAutoplay();
    }

    // Метод для обновления ширины элемента
    updateItemWidth() {
        if (!this.items || this.items.length === 0) return;
        this.updateVisibleItems(); // Обновляем количество отображаемых элементов
        this.itemWidth = this.items[0].clientWidth;
    }

    // Настройка MutationObserver
    setupMutationObserver() {
        let observer = new MutationObserver(() => {
            this.Go(this.rootElem.dataset.current - 1);
        });
        observer.observe(this.rootElem, { attributes: true });
    }

    // Движение слайдера к заданному индексу
    Go(index) {
        if (index < 0 || index >= this.count) return;
        this.move(index);

        // Обновляем активный класс
        this.items.forEach((item, i) => {
            this.toggleActiveClass(item, 'active', i === index);
        });

        // Обновляем активный класс индикаторов
        this.indicators.forEach((indicator, i) => {
            this.toggleActiveClass(indicator, 'active', i === index);
        });

        // Разрешаем взаимодействие после завершения движения
        this.trigger = true;
    }

    // Метод для плавного движения слайдера
    animateMove(targetPosition) {
        const startPosition = this.currentTranslateX; // Используем текущую позицию вместо offsetLeft
        const distance = targetPosition - startPosition;
        const duration = 250; // Продолжительность анимации в миллисекундах
        let startTime = null;

        const animate = (currentTime) => {
            if (!startTime) startTime = currentTime;
            const timeElapsed = currentTime - startTime;
            const run = easeInOutQuad(timeElapsed, startPosition, distance, duration);
            this.track.style.transform = `translateX(${run}px)`;

            if (timeElapsed < duration) {
                requestAnimationFrame(animate);
            } else {
                // После завершения анимации устанавливаем точное значение
                this.currentTranslateX = targetPosition;
                this.track.style.transform = `translateX(${targetPosition}px)`;
            }
        };

        requestAnimationFrame(animate);
    }

    // Универсальная функция для управления классами активности
    toggleActiveClass(element, className, add = true) {
        if (!element) return;
        if (add) {
            element.classList.add(className);
        } else {
            element.classList.remove(className);
        }
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
        this.updateSliderDot();
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

    // Движение слайдера
    move(index) {
        const targetPosition = -index * this.itemWidth;
		// console.log('targetPosition')
		// console.log(targetPosition)
        this.animateMove(targetPosition);
    }

    // Обновление данных
    dataUpdate(index) {
        this.rootElem.dataset.current = index + 1;
    }

    // Обновление индикаторов
    updateSliderDot() {
        this.indicators.forEach((indicator, i) => {
            this.toggleActiveClass(indicator, 'active', i === this.getCurrent() - 1);
        });
    }

    // Автоплей
    startAutoplay() {
        this.autoplayInterval = setInterval(() => {
            this.handleSliderClick('next');
        }, 3000); // Интервал автоплея в миллисекундах
    }

    stopAutoplay() {
        if (this.autoplayInterval) {
            clearInterval(this.autoplayInterval);
            this.autoplayInterval = null;
        }
    }

    restartAutoplay() {
        this.stopAutoplay();
        if (this.autoplayTimeout) {
            clearTimeout(this.autoplayTimeout);
        }
        this.autoplayTimeout = setTimeout(() => {
            this.startAutoplay();
        }, 8000); // Задержка перед возобновлением автоплея в миллисекундах
    }
}
