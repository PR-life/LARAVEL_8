<script>
class ScrollLeft {
    constructor(selector){
        console.log(document.getElementById(selector))
        this.rootElem = document.getElementById(selector)
        this.Track = this.rootElem.querySelector('[data-scroll]')

        let btnLeft = this.rootElem.querySelector('._btn.left')
        let btnRight = this.rootElem.querySelector('._btn.right')

        btnLeft.addEventListener('click', () => this.scrollClick('left'))
        btnRight.addEventListener('click', () => this.scrollClick('right'))

    }

    scrollClick(param){
        let item = this.Track.querySelector(".item")
        let itemW = item.clientWidth + parseFloat(getComputedStyle(item).marginRight)

        if(param == 'left') {
            this.dataUpdate(this.Track, -itemW)
        }
        if(param == 'right') {
            this.dataUpdate(this.Track, itemW)
        }
    }

    dataUpdate(node, step) {
        node.scrollLeft += step
    }
}
</script>