import { debounce } from '../../_skill/debounce.js';

export function setupMutationObserver() {
    let observer = new MutationObserver(debounce(() => {
        this.Go(this.rootElem.dataset.current - 1);
    }, 200));
    observer.observe(this.rootElem, { attributes: true, attributeFilter: ['data-current'] });
}
