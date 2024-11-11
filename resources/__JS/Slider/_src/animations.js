import { easeInOutQuad } from '../../_skill/easeFunctions.js';

export function animateMove(targetPosition) {
    const startPosition = this.currentTranslateX;
    const distance = targetPosition - startPosition;
    const duration = 500; // Продолжительность анимации в миллисекундах
    let startTime = null;

    // console.log('animateMove')

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

export function move(index) {
    // console.log('move')
    const targetPosition = -index * this.itemWidth;
    this.animateMove(targetPosition);
}
