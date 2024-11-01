export function toggleActiveClass(element, className, add = true) {
    if (!element) return;
    element.classList.toggle(className, add);
}

export function updateSliderDot(indicators, getCurrent) {
    indicators.forEach((indicator, i) => {
        toggleActiveClass(indicator, 'active', i === getCurrent() - 1);
    });
}

export function updateVisibleItems(rootElem, track, visibleItems, itemWidth) {
    const windowWidth = window.innerWidth;
    const visibleClasses = {
        'visible-1': 1,
        'visible-2': 2,
        'visible-3': 3,
        'visible-4': 4,
    };

    visibleItems = Object.keys(visibleClasses).reduce((acc, className) => {
        return rootElem.classList.contains(className) ? visibleClasses[className] : acc;
    }, windowWidth < 768 ? 2 : windowWidth < 1200 ? 2 : 4);

    itemWidth = track.clientWidth / visibleItems;
    return { visibleItems, itemWidth };
}
