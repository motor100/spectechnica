@section('title', 'Главная')

@extends('layouts.main')

@section('content')

<div class="home">

  <!-- Главная секция -->
  <div class="main-slider">
    <!-- Слайд -->
    <div class="slide ">
      <!-- Фоновая картинка -->
        <img class="img_fon" src="img/image_12.png" alt="фон">
        <img class="img_car" src="img/main-slider-car1.png" alt="урал 4320">
        <img class="svg_vector" src="img/Vector_1.svg" alt="тень">
      <div class="title">
        <p>Aвтоцистерны</p>
      </div>
    </div>
    <!-- Пагинация -->
    <div class="slider-pagination">
      <div class="dot_active"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
      <div class="dot"></div>
    </div>
</div>
  
<!-- Секция каталога техники -->

<div class="container">
  <div class="catalog">
    <p class='kt'>каталог техники</p>
    <div class="eq_catalog">
      <div class="eq_item">
        <img src="img/image_15.png" alt="камаз-55510">
        <a href="/catalog" style="margin-bottom: 10px;">автоцистерны</a>
      </div>
      <span class='vline'></span>
      <div class="eq_item">
        <img src="img/pngegg-1536x817_1.png" alt="камаз-55510">
        <a href="/catalog">прицепная<br>техника</a>
      </div>
      <span class='vline'></span>
      <div class="eq_item">
        <img src="img/30975084_1.png" alt="камаз-55510">
        <a href="/catalog">автокраны и<br>манипуляторы</a>
      </div>
      <span class='vline'></span>
      <div class="eq_item">
        <img src="img/image_20.png" alt="камаз-55510">
        <a href="/catalog">технологический<br>транспорт</a>
      </div>
    </div>
    <a href='/catalog' class='btn_catalog'>перейти в каталог</a>
  </div>
</div>

<!-- Секция с описанием деятельности компании  -->

<div class="banner">
  <div class="container">
    <div class="banner_text">
      <p class="title">О компании</p>
      <p class="txt_company">ГидроСпецАвто - это завод с  
        современным оборудованием и передовыми технологиями
        Завод представляет собой крупный машиностроительный комплекс с 
        законченным производственным циклом от заготовки до выпуска готовой продукции.<br>
        Помимо производства спецтехники, мы являемся дилером российских автогигантов, 
        занимаемся комплексным сервисным обслуживанием и 
        снабжением сертифицированными запчастями.
      </p>
    </div>  
    <div class="image_svg">
      <div class="svg_item">
        <img src="/img/кач_1.svg" alt="#">
        <p>Высокое качество<br>продукции по<br>доступным ценам</p>
      </div>
      <div class="svg_item">
        <img src="/img/кач_2.svg" alt="#">
        <p>Штат опытных<br>сотрудников</p>
      </div>  
      <div class="svg_item">
        <img src="/img/трейд_1.svg" alt="#">
        <p>Trade-in: принимаем<br>Вашу технику в зачет</p>
      </div>
      <div class="svg_item">
        <img src="/img/трал_1.svg" alt="#">
        <p>Льготная доставка в<br>регионы собственным<br>автотранспортом</p>
      </div>
    </div>
  </div>
</div> 

<!-- Кнопки -->

  <div class="container">
    <div class="button_company">
      <a href="/about#video" class='btn_company'>видео о компании</a>
      <a href="/about#video" class='btn_company'>видео о компании</a>
      <a href="/about#video" class='btn_company'>видео о компании</a>
      <a href="/about#video" class='btn_company'>видео о компании</a>
    </div>
  </div>

<!-- Секция с партнерами компании -->


<div class="partners">
  <div class="container">
  <p class="title">партнеры</p>
  </div>
  <img class="img_p" src="/img/partners.png" alt="#">
</div>

  
    

<!-- Секция с производственными характеристиками -->
<div class="prod_company">
  <div class="line"></div>
  <div class="container">
    <p class="text_prod">МЫ ПРОИЗВОДИМ И РЕАЛИЗУЕМ, А ВЫ ПОЛУЧАЕТЕ:</p>
    <div class="prod_company">
      <div class="item_prod">
        <img src="img/гарантия_1.svg" alt="гарантия">
        <p>Увеличенные сроки<br>гарантии на цистерны<br>собственного производства<br>до 18 месяцев</p>
      </div>
      <div class="item_prod">
        <img src="img/цена_1.svg" alt="цена">
        <p>Оптимальные цены без накруток<br>посредников за счет инновационных<br>разработок и собственного<br>производства техники</p>
      </div>
      <div class="item_prod">
        <img src="img/сроки_1.svg" alt="сроки">
        <p>Минимальные сроки<br>изготовления техники - от 3 до<br>10 дней с момента заключения<br>договора</p>
      </div>
    </div>  
  </div>
  <div class="line"></div>
</div>

<!-- Секция с видеопрезентациями техники -->

<div class="container">
  <p class="txt_v">ВИДЕО-ПРЕЗЕНТАЦИИ ТЕХНИКИ:</p>
  <div class="video_contant">
    <div class="item_video">
      <video width="400" height="300" controls="controls" poster="video/duel.jpg">
      <source src="video/duel.ogv" type='video/ogg; codecs="theora, vorbis"'>
      <source src="video/duel.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
      <source src="video/duel.webm" type='video/webm; codecs="vp8, vorbis"'>
    </div>
    <div class="item_video">
      <video width="400" height="300" controls="controls" poster="video/duel.jpg">
      <source src="video/duel.ogv" type='video/ogg; codecs="theora, vorbis"'>
      <source src="video/duel.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
      <source src="video/duel.webm" type='video/webm; codecs="vp8, vorbis"'>
    </div> 
  </div>
</div>

<!-- Стрелка вверх -->

<div class="polygon"><img src="img/Polygon_1.png" alt="Стрелка"></div>

<!-- Нижняя полоса -->

<div class="bottom_line"></div>



@endsection