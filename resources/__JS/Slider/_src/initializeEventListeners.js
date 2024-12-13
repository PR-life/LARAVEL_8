import { debounce } from '../../_skill/debounce.js';

export function initializeEventListeners() {
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

    // Добавляем обработчик события `animationend` для индикаторов
    if (this.indicators) {
        this.indicators.forEach((indicator) => {
            indicator.addEventListener('animationend', (event) => {
                if (event.animationName === 'TimeGradient' && indicator.classList.contains('active')) {
                    this.handleSliderClick('next'); // Переход на следующий слайд
                }
            });
        });
    }

    // Запуск автоплея
    this.startAutoplay();
}
