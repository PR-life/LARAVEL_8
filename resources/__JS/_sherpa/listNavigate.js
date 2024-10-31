export function listNavigate(current, count, stop = false, direction = 'next') {
    if (typeof current !== 'number' || typeof count !== 'number' || typeof stop !== 'boolean') {
        throw new Error('Invalid input types');
    }
    if (current < 0 || current >= count) {
        throw new Error('Current index out of bounds');
    }

    current = direction === 'next' ? current + 1 : current - 1;

    if (!stop) {
        if (current >= count) current = count - 1;
        if (current < 0) current = 0;
    } else {
        if (current >= count) current = 0;
        if (current < 0) current = count - 1;
    }

    return current;
}
