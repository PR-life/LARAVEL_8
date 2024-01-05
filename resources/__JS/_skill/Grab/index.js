document.addEventListener('DOMContentLoaded', function () {
    const ele = document.getElementById('Grab');
    ele.style.cursor = 'grab';
    let pos = { top: 0, left: 0, x: 0, y: 0 };
    const mouseDownHandler = function (e) {
		// console.log(1)
        ele.style.cursor = 'grabbing';
        ele.style.userSelect = 'none';
        pos = {
            left: ele.scrollLeft,
            top: ele.scrollTop,
            // Get the current mouse position
            x: e.clientX,
            y: e.clientY,
        };
        document.addEventListener('mousemove', mouseMoveHandler);
        document.addEventListener('mouseup', mouseUpHandler);
    };
    const mouseMoveHandler = function (e) {
		// console.log(ele)
		// ele.classList.add('dragging');
        // How far the mouse has been moved
        const dx = e.clientX - pos.x;
        const dy = e.clientY - pos.y;
        // Scroll the element
        ele.scrollTop = pos.top - dy;
        ele.scrollLeft = pos.left - dx;
    };
    const mouseUpHandler = function () {
		// console.log(3)
		// ele.classList.remove('dragging');
        ele.style.cursor = 'grab';
        // ele.style.removeProperty('user-select');
        // ele.classlist.add('user-select');
        document.removeEventListener('mousemove', mouseMoveHandler);
        document.removeEventListener('mouseup', mouseUpHandler);
    };
    // Attach the handler
    ele.addEventListener('mousedown', mouseDownHandler);
});