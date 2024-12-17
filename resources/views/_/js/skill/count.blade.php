<script>
    window.addEventListener('DOMContentLoaded', () => {
        const countNums = () => {
        const numbersObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
            if (entry.isIntersecting) { 
                const count = new CountUp(
                entry.target.id,
                0,
                entry.target.dataset.num,
                0,
                entry.target.dataset.duration || 4,
                {
                    prefix: entry.target.dataset.prefix || '',
                    suffix: entry.target .dataset.suffix || ' ₽ / мес',
                    separator: entry.target .dataset.separator || ' '
                }
                );
                count.start(() => {
                // entry.target.parentElement.classList.add('bg')
                })
                observer.unobserve(entry.target);
            }
            })
        });
        document.querySelectorAll('.jsNumbers .x-js').forEach(num => {
            numbersObserver.observe(num)
        })
        }
        countNums()
    })
</script>