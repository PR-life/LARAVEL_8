export function listPrev(current, count, stop = false) {
    if (typeof current !== 'number' || typeof count !== 'number' || typeof stop !== 'boolean') {
        throw new Error('Invalid input types');
    }
    if (current < 0 || current >= count) {
        throw new Error('Current index out of bounds');
    }

    current--;

    if (!stop) {
        if (current < 0) {
            current = 0;
        }
    } else {
        if (current < 0) {
            current = --count;
        }
    }

    return current;
}
