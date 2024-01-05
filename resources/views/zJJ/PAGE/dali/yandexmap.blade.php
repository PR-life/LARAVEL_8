@extends('zJJ._shema.aside')
@section('title', 'HTML ')
@push('css-body', '-html ')


@push('aside_10111826')
    @include('zJJ.menu.dali.index')
@endpush




@section('content')
<div class="paragraphX2"></div>
 
{{-- @component('_._wrap.vol-1') --}}
<script src="https://api-maps.yandex.ru/2.1/?lang=ru-RU"></script>
<script data="//api-maps.yandex.ru/2.0/?load=package.standard,package.geoObjects&lang=ru-RU"></script>
 <script>ymaps.ready(init);

function init() {
  var myMap = new ymaps.Map("map", {
      center: [53.904928, 47.867328],
      zoom: 4
    });

      myMap.controls
      // Кнопка изменения масштаба.
      .add('zoomControl', { left: 5, top: 5 });



    // Создаем метку с помощью вспомогательного класса.
    myPlacemarkMos = new ymaps.Placemark([55.751979, 37.617499], {
      hintContent: 'Москва',
      balloonContentHeader: "Москва",
      balloonContentBody: "улица Малая Ордынка, 13Ас6<br><span>Ежедневно, 10:00–19:00</span><br><a href=\"/contact/msk\">подробнее</a>",
      balloonContentFooter: "Детективное агентство"
    });
  

    myPlacemarkSpb = new ymaps.Placemark([59.919607, 30.318406], {
      hintContent: 'Санкт-Петербург',
      balloonContentHeader: "Санкт-Петербург",
      balloonContentBody: "Московский проспект, 22<br><span>Ежедневно, 10:00–19:00</span><br><a href=\"/contact/sankt-peterburg\">подробнее</a>",
      balloonContentFooter: "Детективное агентство"
    });


    myPlacemarkVolgograd = new ymaps.Placemark([48.703589, 44.513597], {
      hintContent: 'Волгоград',
      balloonContentHeader: "Волгоград",
      balloonContentBody: "проспект имени В.И. Ленина, 2А<br><span>Ежедневно, 10:00–19:00</span><br><a href=\"/contact/volgograd\">подробнее</a>",
      balloonContentFooter: "Детективное агентство"
    });

    myPlacemarkVoronezh = new ymaps.Placemark([51.671439, 39.203243], {
      hintContent: 'Воронеж',
      balloonContentHeader: "Воронеж",
      balloonContentBody: "улица Комиссаржевской, 10<br><span>Ежедневно, 10:00–19:00</span><br><a href=\"/contact/voronezh\">подробнее</a>",
      balloonContentFooter: "Детективное агентство"
    });


    myPlacemarkEkaterinburg = new ymaps.Placemark([56.844412, 60.617085], {
      hintContent: 'Екатеринбург',
      balloonContentHeader: "Екатеринбург",
      balloonContentBody: "улица Мамина-Сибиряка, 101<br><span>Ежедневно, 10:00–19:00</span><br><a href=\"/contact/ekaterinburg\">подробнее</a>",
      balloonContentFooter: "Детективное агентство"
    });


    myPlacemarkKazan = new ymaps.Placemark([55.782694, 49.127794], {
      hintContent: 'Казань',
      balloonContentHeader: "Казань",
      balloonContentBody: "улица Островского, 79<br><span>Ежедневно, 10:00–19:00</span><br><a href=\"/contact/kazan\">подробнее</a>",
      balloonContentFooter: "Детективное агентство"
    });



    myPlacemarkKaluga = new ymaps.Placemark([54.516511, 36.259751], {
      hintContent: 'Калуга',
      balloonContentHeader: "Калуга",
      balloonContentBody: "улица Суворова, 121<br><span>Ежедневно, 10:00–19:00</span><br><a href=\"/contact/kaluga\">подробнее</a>",
      balloonContentFooter: "Детективное агентство"
    });


    myPlacemarkKrasnodar = new ymaps.Placemark([45.036623, 38.996388], {
      hintContent: 'Краснодар',
      balloonContentHeader: "Краснодар",
      balloonContentBody: "Северная улица, 490<br><span>Ежедневно, 10:00–19:00</span><br><a href=\"/contact/krasnodar\">подробнее</a>",
      balloonContentFooter: "Детективное агентство"
    });


    myPlacemarkRostovnadonu = new ymaps.Placemark([47.226980, 39.705041], {
      hintContent: 'Ростов-на-Дону',
      balloonContentHeader: "Ростов-на-Дону",
      balloonContentBody: "Будённовский проспект, 60<br><span>Ежедневно, 10:00–19:00</span><br><a href=\"/contact/rostov-na-donu\">подробнее</a>",
      balloonContentFooter: "Детективное агентство"
    });


    myPlacemarkSamara = new ymaps.Placemark([53.222385, 50.202314], {
      hintContent: 'Самара',
      balloonContentHeader: "Самара",
      balloonContentBody: "улица Советской Армии, 181Ак1<br><span>Ежедневно, 10:00–19:00</span><br><a href=\"/contact/samara\">подробнее</a>",
      balloonContentFooter: "Детективное агентство"
    });


    myPlacemarkUfa = new ymaps.Placemark([54.727729, 55.943402], {
      hintContent: 'Уфа',
      balloonContentHeader: "Уфа",
      balloonContentBody: "Коммунистическая улица, 45/3<br><span>Ежедневно, 10:00–19:00</span><br><a href=\"/contact/ufa\">подробнее</a>",
      balloonContentFooter: "Детективное агентство"
    });





  // Добавляем все метки на карту.
  myMap.geoObjects
    .add(myPlacemarkMos)
    .add(myPlacemarkSpb)
    .add(myPlacemarkVolgograd)
    .add(myPlacemarkVoronezh)
    .add(myPlacemarkEkaterinburg)
    .add(myPlacemarkKazan)
    .add(myPlacemarkKaluga)
    .add(myPlacemarkKrasnodar)
    .add(myPlacemarkRostovnadonu)
    .add(myPlacemarkSamara)
    .add(myPlacemarkUfa);
}
</script>


<div class="I aura / Edge / Void">
<style type="text/css">


#map {
    filter: grayscale(100%) invert(80%);
}

#map {min-height: 500px;}


</style>


<div class="Map W-100">
    <div id="map"></div>
</div>

</div>
@endsection