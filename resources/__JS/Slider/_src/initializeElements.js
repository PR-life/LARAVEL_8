export function initializeElements() {
    this.track = this.rootElem.querySelector('.Track');
    if (!this.track) throw new Error(`Track element not found in ${this.rootElem.id}`);

    this.items = this.track.querySelectorAll(".item");
    if (this.items.length === 0) throw new Error(`No items found in the track of ${this.rootElem.id}`);

    this.count = this.items.length;
    this.itemWidth = this.items[0].clientWidth; // Кэшируем ширину элемента
    // console.log(this.itemWidth)

    this.sherpa = this.rootElem.querySelector('.sherpaSlider');
    if (!this.sherpa) throw new Error(`Sherpa element not found in ${this.rootElem.id}`);

    this.carousel = this.track.dataset.carousel === 'true';
    this.trigger = true;

    this.btnLeft = this.rootElem.querySelector('._btn.left');
    this.btnRight = this.rootElem.querySelector('._btn.right');

    this.indicators = this.rootElem.querySelectorAll('.slider-dot');

    // Добавляем плавную анимацию
    this.track.style.transition = 'transform 0.5s ease-in-out';
}
