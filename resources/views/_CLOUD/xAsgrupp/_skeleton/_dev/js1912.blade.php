@push('linkJs')
<script src="https://hammerjs.github.io/dist/hammer.min.js"></script>
@endpush
@push('js-bottom-solo')

<script>
const container = document.querySelector('.Roll_PC'); // Внешний фиксированный контейнер
const track = container.querySelector('.Track'); // Двигающийся трек с изображениями
const images = track.querySelectorAll('img'); // Все изображения внутри трека
const thumbnailsContainer = document.querySelector('._thumbnails') || null; // Контейнер для миниатюр
const nextButton = document.querySelector('._btn.left'); // Кнопка для прокрутки вперёд
const prevButton = document.querySelector('._btn.right'); // Кнопка для прокрутки назад

let currentIndex = 0; // Текущий индекс активного изображения
let startX = 0; // Начальная точка касания
let deltaX = 0; // Изменение координаты X
let totalDeltaX = 0; // Суммарное изменение координаты X
let isSwiping = false;

// Генерация миниатюр автоматически
if (thumbnailsContainer) {
  images.forEach((img, index) => {
    const thumbnail = document.createElement('img');
    thumbnail.src = img.src;
    thumbnail.alt = img.alt || `Thumbnail ${index}`;
    thumbnail.dataset.index = index;
    thumbnail.classList.add('Max', '-w1', 'pointer');

    thumbnailsContainer.appendChild(thumbnail);
  });
}

const thumbnails = thumbnailsContainer ? thumbnailsContainer.querySelectorAll('img') : []; // Миниатюры после генерации

// Функция для получения смещения до текущего слайда
const getOffset = (index) => {
  let offset = 0;
  for (let i = 0; i < index; i++) {
    offset += images[i].clientWidth; // Суммируем ширины предыдущих слайдов
  }
  return offset;
};

// Обновление активного слайда и миниатюры
const updateActiveSlide = (index) => {
  currentIndex = index;

  // Перемещение трека
  const offset = -getOffset(currentIndex);
  track.style.transition = 'transform 0.3s ease';
  track.style.transform = `translateX(${offset}px)`;

  // Обновление класса для активной миниатюры
  thumbnails.forEach((thumb, i) => {
    thumb.classList.toggle('active', i === currentIndex);
  });
};

// Добавляем обработчики кликов на миниатюры
thumbnails.forEach((thumbnail) => {
  thumbnail.addEventListener('click', () => {
    const index = parseInt(thumbnail.getAttribute('data-index'), 10);
    updateActiveSlide(index);
  });
});

// Обработчик кнопки "Next"
nextButton.addEventListener('click', () => {
  if (currentIndex < images.length - 1) {
    updateActiveSlide(currentIndex + 1);
  }
});

// Обработчик кнопки "Prev"
prevButton.addEventListener('click', () => {
  if (currentIndex > 0) {
    updateActiveSlide(currentIndex - 1);
  }
});

// Инициализация активной миниатюры
updateActiveSlide(0); // Устанавливаем первую миниатюру активной

// Слушатели событий свайпа
const hammer = new Hammer(container); // Слушатель на Roll_PC

// Отключение перетаскивания изображений
track.addEventListener('dragstart', (e) => {
  e.preventDefault();
});

// Начало свайпа
hammer.on('panstart', (e) => {
  isSwiping = true;
  startX = e.center.x;
  totalDeltaX = 0; // Сбрасываем суммарное смещение
  track.style.transition = 'none'; // Отключаем анимацию
});

// Движение пальца
hammer.on('panmove', (e) => {
  if (!isSwiping) return;

  deltaX = e.center.x - startX; // Рассчитываем сдвиг
  totalDeltaX += deltaX; // Увеличиваем суммарное смещение
  startX = e.center.x; // Обновляем startX для плавного отслеживания

  const offset = -getOffset(currentIndex) + totalDeltaX;

  // Сдвигаем трек внутри Roll_PC
  track.style.transform = `translateX(${offset}px)`;
});

// Конец свайпа
hammer.on('panend', (e) => {
  isSwiping = false;

  // Рассчитываем количество слайдов, которые нужно перелистнуть
  const slideWidth = images[currentIndex].clientWidth;
  const slidesToMove = Math.round(totalDeltaX / slideWidth);

  const newIndex = Math.min(
    Math.max(currentIndex - slidesToMove, 0),
    images.length - 1
  );

  updateActiveSlide(newIndex); // Универсальный вызов для синхронизации

  totalDeltaX = 0; // Сбрасываем суммарное смещение
});








    
    
    
    
    
    
    
    
    
    
    
    
    
    // const swiperElement = document.querySelector('.swiper-slider');
    // const slides = swiperElement.querySelectorAll('.swiper-slide');
    
    // let currentIndex = 0; // Текущий индекс слайда
    // let startX = 0; // Начальная позиция касания
    // let deltaX = 0; // Текущий сдвиг
    // let isSwiping = false;
    
    // // Инициализация Hammer.js
    // const hammer = new Hammer(swiperElement);
    
    // // Начало свайпа
    // hammer.on('panstart', (e) => {
    //   isSwiping = true;
    //   startX = e.center.x;
    //   slides.forEach(slide => slide.style.transition = 'none'); // Отключаем анимацию
    // });
    
    // // Движение пальца
    // hammer.on('panmove', (e) => {
    //   if (!isSwiping) return;
      
    //   deltaX = e.center.x - startX; // Рассчитываем сдвиг
    //   const offset = -currentIndex * swiperElement.clientWidth + deltaX;
    
    //   // Сдвигаем слайды
    //   slides.forEach((slide) => {
    //     slide.style.transform = `translateX(${offset}px)`;
    //   });
    // });
    
    // // Конец свайпа
    // hammer.on('panend', () => {
    //   isSwiping = false;
    
    //   // Проверяем направление свайпа
    //   if (deltaX < -50 && currentIndex < slides.length - 1) {
    //     currentIndex++; // Свайп влево
    //   } else if (deltaX > 50 && currentIndex > 0) {
    //     currentIndex--; // Свайп вправо
    //   }
    
    //   // Возвращаем слайды на новую позицию
    //   const offset = -currentIndex * swiperElement.clientWidth;
    //   slides.forEach(slide => {
    //     slide.style.transition = 'transform 0.3s ease'; // Включаем анимацию
    //     slide.style.transform = `translateX(${offset}px)`;
    //   });
    
    //   deltaX = 0; // Сбрасываем сдвиг
    // });
    
    
    
    
    
    
    
    // const swiperElement = document.querySelector('.swiper-slider');
    
    // // Инициализация Hammer.js
    // const hammer = new Hammer(swiperElement);
    
    // // Обработка свайпов
    // hammer.on('swipeleft', () => {
    //   console.log('Swipe left');
    //   // Выполнить команду для переключения слайда вперёд
    // });
    
    // hammer.on('swiperight', () => {
    //   console.log('Swipe right');
    //   // Выполнить команду для переключения слайда назад
    // });
    
    
    
    
    
    
    
    
    // const swiper = new Swiper(".swiper-slider", {
    //   centeredSlides: true,
    //   speed: 800,
    //   slidesPerView: 1,
    //   grabCursor: true,
    //   loop: true,
    //   autoplay: {
    //     delay: 3000,
    //     disableOnInteraction: false
    //   },
    //   pagination: {
    //     el: ".swiper-pagination",
    //     type: "progressbar",
    //   }
    // });
    
    </script>

@endpush