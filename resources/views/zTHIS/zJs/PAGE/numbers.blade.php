@extends('zTHIS.zJs._shema.INDEX')

@push('js-bottom-link')
	<script src="/lib/js/anime.js"></script>
	<script src="/lib/js/countUp.js"></script>
@endpush

@push('js-bottom-solo')
{{-- Библиотека Anime --}}
<script>
	const DURATION_COUNT = 4000;

	let countOne = document.querySelector('.countOne');
	let animationCountOne = anime({
		targets: countOne,
		innerHTML: [0, 4586],
		easing: 'easeOutElastic(1, .8)',
		round: 1, // Will round the animated value to 1 decimal,
		duration: DURATION_COUNT,
	});
</script>



{{-- Библиотека countUp --}}
<script>
	window.addEventListener('DOMContentLoaded', () => {

	const count = new CountUp(
		'countTwo', // 1. задаём идентификатор элемента с числом
		0, // 2. задаём начальное число
		5000, // 3. задаём конечное число
		0, // 4. задаём количество цифр после запятой
		4 // 5. задаём продолжительность анимации в секундах
	);
	count.start() // запускаем настроенную анимацию

	})


	// Числа в тексте
	// Запуск в зоне видимости

	window.addEventListener('DOMContentLoaded', () => {

	const countNums = () => { // объявляем функцию, чтобы всё, что относится к анимированию чисел было в одном месте
	const numbersObserver = new IntersectionObserver((entries, observer) => { // создаём наблюдатель за элементами, в которых будем увеличивать значение числа
		entries.forEach(entry => { // для каждого наблюдаемого элемента
		if (entry.isIntersecting) { // проверяем, находится ли он в видимой области браузера
			const count = new CountUp( // настраиваем новую анимацию для числа
			entry.target.id, // 1. задаём идентификатор элемента с числом
			0, // 2. задаём начальное число
			entry.target.dataset.num, // 3. задаём конечное число (берем из data-атрибута)
			0, // 4. задаём количество цифр после запятой
			entry.target.dataset.duration || 4, // 5. задаём продолжительность анимации в секундах (если у элемента есть атрибут data-duration, то берём из него значение, иначе назначаем 4 секунды по-умолчанию)
			{ // указываем дополнительные параметры
				separator: ' ', // задаём разделитель групп разрядов (например для миллиона - 1 000 000)
				prefix: entry.target.dataset.prefix || '', // задаём префикс - любые символы перед числом (берем значение из data-prefix, если не указано - то задаем пустую строку по умолчанию)
				suffix: entry.target.dataset.suffix || '' // задаём суффикс - любые символы после числа (берем значение из data-suffix, если не указано - то задаем пустую строку по умолчанию)
			}
			);
			count.start(() => { // запускаем настроенную анимацию и по окончании анимации...
			entry.target.parentElement.classList.add('bg') // ...добавляем активный класс родительскому элементу
			})
			observer.unobserve(entry.target); // отключаем наблюдение за элементом
		}
		})
	});
	document.querySelectorAll('.jsNumbers .item span').forEach(num => { // ищем элементы за которыми будем наблюдать, и для каждого...
		numbersObserver.observe(num) // ...запускаем наблюдение
	})
	}
	countNums() // запускаем объявленную функцию

	})



</script>

@endpush


@push('milk')
 
@endpush



@section('content')

<div class="Space -v">

    <div class="Pente aura [ margin top ]">
        <h4>Разделитель для цены</h4>
        <div id="divide" class="h2">_</div>
        <script>
            // Разделитель: zSolo/Price/divide.js 
    
            if (document.getElementById('divide')) {
                document.getElementById('divide').innerHTML = soloDivide(30245, "");
            }
        
            function soloDivide(x, delimiter) {
                return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, delimiter || " ");
            }
        </script>
    </div>




    <div class="Pente aura / flex cross / margin top">
        <div>
            <h4>Самостоятельная функция</h4>
            <div id="out" class="h2">0</div>
        
            <script type="text/javascript">
        
                const time1611 = 4000;
                const step1611 = 1;
        
                outNum(100, "#out");
        
                function outNum(num, elem) {
                    let e = document.querySelector(elem);
                    n = 0;
                    let t = Math.round(time1611 / (num / step1611));
                    let interval = setInterval(() => {
                        n = n + step1611;
                        if (n == num) {
                            clearInterval(interval);
                        }
                        e.innerHTML = n;
                    }, t);
                }
            </script>
        
        </div>
        <div>
            <h4>Библиотека Anime</h4>
            <h2 id="countOne" class="countOne">-</h2>
        </div>
        <div>
            <h4>Библиотека countUp</h4>
            <h2 id="countTwo" class="countTwo">0</h2>
        </div>
    </div>
    


</div>

 
<div class="Pente aura [ margin top ]">
	<h4>Библиотека countUp</h4>

	<div class="text">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aliquam aliquid assumenda beatae commodi eaque id illo illum iste, magni maxime nihil optio perferendis praesentium, reprehenderit sapiente tempore vel voluptate. Ad asperiores, commodi culpa cupiditate dignissimos dolor dolorum ea facere incidunt laborum minima nemo, nostrum odit placeat quasi recusandae saepe? Alias dicta dolorum fugit iste quam recusandae tenetur! Aspernatur dignissimos doloremque ipsum magni molestias quasi quisquam quos sed sit tempora.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aliquam aliquid assumenda beatae commodi eaque id illo illum iste, magni maxime nihil optio perferendis praesentium, reprehenderit sapiente tempore vel voluptate. Ad asperiores, commodi culpa cupiditate dignissimos dolor dolorum ea facere incidunt laborum minima nemo, nostrum odit placeat quasi recusandae saepe? Alias dicta dolorum fugit iste quam recusandae tenetur! Aspernatur dignissimos doloremque ipsum magni molestias quasi quisquam quos sed sit tempora.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aliquam aliquid assumenda beatae commodi eaque id illo illum iste, magni maxime nihil optio perferendis praesentium, reprehenderit sapiente tempore vel voluptate. Ad asperiores, commodi culpa cupiditate dignissimos dolor dolorum ea facere incidunt laborum minima nemo, nostrum odit placeat quasi recusandae saepe? Alias dicta dolorum fugit iste quam recusandae tenetur! Aspernatur dignissimos doloremque ipsum magni molestias quasi quisquam quos sed sit tempora.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aliquam aliquid assumenda beatae commodi eaque id illo illum iste, magni maxime nihil optio perferendis praesentium, reprehenderit sapiente tempore vel voluptate. Ad asperiores, commodi culpa cupiditate dignissimos dolor dolorum ea facere incidunt laborum minima nemo, nostrum odit placeat quasi recusandae saepe? Alias dicta dolorum fugit iste quam recusandae tenetur! Aspernatur dignissimos doloremque ipsum magni molestias quasi quisquam quos sed sit tempora.</p>
	</div>
	<div class="text / jsNumbers">
		<h2>Numbers</h2>
 
		<div class="item">
			<span id="num1" class="content" data-num="35001" data-prefix="$" data-duration="10">0</span>
		</div>
		<div class="item">
			<span id="num2" class="content" data-num="27" data-suffix="%">0</span>
		</div>
		<div class="item">
			<span id="num3" class="content" data-num="124" data-suffix="+" data-duration="6">0</span>
		</div>
		<div class="item">
			<span id="num4" class="content" data-num="5799" data-duration="8">0</span>
		</div>
	</div>
	<div class="text">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aliquam aliquid assumenda beatae commodi eaque id illo illum iste, magni maxime nihil optio perferendis praesentium, reprehenderit sapiente tempore vel voluptate. Ad asperiores, commodi culpa cupiditate dignissimos dolor dolorum ea facere incidunt laborum minima nemo, nostrum odit placeat quasi recusandae saepe? Alias dicta dolorum fugit iste quam recusandae tenetur! Aspernatur dignissimos doloremque ipsum magni molestias quasi quisquam quos sed sit tempora.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aliquam aliquid assumenda beatae commodi eaque id illo illum iste, magni maxime nihil optio perferendis praesentium, reprehenderit sapiente tempore vel voluptate. Ad asperiores, commodi culpa cupiditate dignissimos dolor dolorum ea facere incidunt laborum minima nemo, nostrum odit placeat quasi recusandae saepe? Alias dicta dolorum fugit iste quam recusandae tenetur! Aspernatur dignissimos doloremque ipsum magni molestias quasi quisquam quos sed sit tempora.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aliquam aliquid assumenda beatae commodi eaque id illo illum iste, magni maxime nihil optio perferendis praesentium, reprehenderit sapiente tempore vel voluptate. Ad asperiores, commodi culpa cupiditate dignissimos dolor dolorum ea facere incidunt laborum minima nemo, nostrum odit placeat quasi recusandae saepe? Alias dicta dolorum fugit iste quam recusandae tenetur! Aspernatur dignissimos doloremque ipsum magni molestias quasi quisquam quos sed sit tempora.</p>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, aliquam aliquid assumenda beatae commodi eaque id illo illum iste, magni maxime nihil optio perferendis praesentium, reprehenderit sapiente tempore vel voluptate. Ad asperiores, commodi culpa cupiditate dignissimos dolor dolorum ea facere incidunt laborum minima nemo, nostrum odit placeat quasi recusandae saepe? Alias dicta dolorum fugit iste quam recusandae tenetur! Aspernatur dignissimos doloremque ipsum magni molestias quasi quisquam quos sed sit tempora.</p>
	</div>
</div>
 



@endsection