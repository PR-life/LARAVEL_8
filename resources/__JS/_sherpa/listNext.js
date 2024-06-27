export function listNext(current, count, stop = false) {
    if (typeof current !== 'number' || typeof count !== 'number' || typeof stop !== 'boolean') {
        throw new Error('Invalid input types');
    }
    if (current < 0 || current >= count) {
        throw new Error('Current index out of bounds');
    }
    
    current++;

    if (!stop) {
        if (current >= count) {
            current = count - 1;
        }
    } else {
        if (current >= count) {
            current = 0;
        }
    }

    return current;
}
