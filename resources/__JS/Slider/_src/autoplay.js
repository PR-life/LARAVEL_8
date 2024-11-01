export function startAutoplay() {
    if (this.rootElem && this.rootElem.dataset.autoplay === 'true') {
        const delay = parseInt(this.rootElem.dataset.autoplayDelay) || 3000;
        this.autoplayInterval = setInterval(() => {
            this.handleSliderClick('next');
        }, delay);
    }
}

export function stopAutoplay() {
    if (this.autoplayInterval) {
        clearInterval(this.autoplayInterval);
        this.autoplayInterval = null;
    }
}

export function restartAutoplay() {
    this.stopAutoplay();
    if (this.autoplayTimeout) {
        clearTimeout(this.autoplayTimeout);
    }
    this.autoplayTimeout = setTimeout(() => {
        this.startAutoplay();
    }, 8000);
}
