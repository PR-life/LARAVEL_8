<div id="Rearguard" class="Fix / -Black / space-m">

    <div class="content-s">
        --Aspect Ratio: <span id="aspect-ratio"></span>
    </div>
    <div class="content-s">
        --Coefficient: <span id="coefficient"></span>
    </div>

    <div class="content-s">
        --index: <span id="index-value"></span>
    </div>
    <div class="content-s">
        --indexW: <span id="indexW-value"></span>
    </div>
    <div class="content-s">
        --indexH: <span id="indexH-value"></span>
    </div>
    <div class="content-s">
        1 vmax: <span id="vmax-value"></span>
    </div>
    <div class="content-s">
        1 vmin: <span id="vmin-value"></span>
        <span class="content-min block">1% меньшего размера окна</span>
    </div>

</div>




<style>
#Rearguard {
    /* position: fixed; */
    right: 10px;
    bottom: 10px;
    background-color: rgba(0, 0, 0, 0.7);
    color: white;

    border-radius: 5px;
}
 
</style>



 

<script>
function updateCSSVariables() {
    const rootStyles = getComputedStyle(document.documentElement);

    // Создаем временный элемент для вычисления значений в пикселях
    const tempElement = document.createElement('div');
    document.body.appendChild(tempElement);

    tempElement.style.position = 'absolute';
    tempElement.style.visibility = 'hidden';

    // Устанавливаем значения из CSS переменных в качестве ширины и высоты временного элемента
    tempElement.style.width = rootStyles.getPropertyValue('--index').trim();
    tempElement.style.height = rootStyles.getPropertyValue('--indexW').trim();
    const indexValuePx = tempElement.offsetWidth + 'px';
    const indexWValuePx = tempElement.offsetHeight + 'px';

    // Устанавливаем значение --indexH для высоты временного элемента
    tempElement.style.height = rootStyles.getPropertyValue('--indexH').trim();
    const indexHValuePx = tempElement.offsetHeight + 'px';

    // Получаем значения для 1vmin и 1vmax
    const vminValuePx = Math.min(window.innerWidth, window.innerHeight) / 100 + 'px';
    const vmaxValuePx = Math.max(window.innerWidth, window.innerHeight) / 100 + 'px';

    // Вычисляем соотношение сторон экрана
    const aspectRatio = window.innerWidth / window.innerHeight;

    // Задаем условный коэффициент на основе соотношения сторон
    let coefficient;
    if (aspectRatio > 1.5) {
        coefficient = 1.5; // Широкий экран
    } else if (aspectRatio < 0.75) {
        coefficient = 0.75; // Узкий экран
    } else {
        coefficient = 1; // Среднее соотношение
    }

    // Используем коэффициент для каких-то вычислений или условий
    // Например, можно пересчитать значения с учетом этого коэффициента
    const adjustedIndexValuePx = (parseFloat(indexValuePx) * coefficient) + 'px';
    const adjustedIndexWValuePx = (parseFloat(indexWValuePx) * coefficient) + 'px';
    const adjustedIndexHValuePx = (parseFloat(indexHValuePx) * coefficient) + 'px';

    // Удаляем временный элемент
    document.body.removeChild(tempElement);

    // Отображаем значения
    document.getElementById('index-value').textContent = adjustedIndexValuePx;
    document.getElementById('indexW-value').textContent = adjustedIndexWValuePx;
    document.getElementById('indexH-value').textContent = adjustedIndexHValuePx;
    document.getElementById('vmin-value').textContent = vminValuePx;
    document.getElementById('vmax-value').textContent = vmaxValuePx;
    document.getElementById('aspect-ratio').textContent = aspectRatio.toFixed(2);
    document.getElementById('coefficient').textContent = coefficient;
}

// Обновление значений переменных каждые 100 миллисекунд
//setInterval(updateCSSVariables, 1500);

updateCSSVariables()

</script>







 