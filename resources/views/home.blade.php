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
  


<div class="container">
  <p class='kt'>каталог техники</p>
  <div class="eq_catalog">
    <div class="eq_item">
      <img src="img/image_15.png" alt="камаз-55510">
      <p>автоцистерны</p>
    </div>
    <span class='vline'></span>
    <div class="eq_item">
      <img src="img/pngegg-1536x817_1.png" alt="камаз-55510">
      <p>прицепная<br>техника</p>
    </div>
    <span class='vline'></span>
    <div class="eq_item">
      <img src="img/30975084_1.png" alt="камаз-55510">
      <p>автокраны и<br>манипуляторы</p>
    </div>
    <span class='vline'></span>
    <div class="eq_item">
      <img src="img/image_20.png" alt="камаз-55510">
      <p>технологический<br>транспорт</p>
    </div>
  </div>
  <button href='#' class='btn_catalog'>
    перейти в каталог
  </button> 
</div>
<!-- Банер "О комипании"  --> 
<section class="banner_company">
  <div class="banner">
    <!-- <img src="/img/blackout_banner.png" alt="#"> -->
    <div class="container">
      <div class="banner_text">
        <h1>О компании</h1>
        <p>ГидроСпецАвто - это завод с  
          современным оборудованием и передовыми технологиями
          Завод представляет собой крупный машиностроительный комплекс с 
          законченным производствен-ным циклом от заготовки до выпуска готовой продукции.
          Помимо производства спецтехники, мы являемся дилером российских автогигантов, 
          занимаемся комплексным сервисным обслуживанием и 
          снабжением сертифицированными запчастями.
        </p>
        <div class="image_svg">
          <div class="svg_item">
            <img src="img/кач_1.svg" alt="#">
            <div class="txt_item">
              <p>Высокое качество продукции по доступным ценам</p>
            </div>
          </div>
          <div class="svg_item">
            <img src="img/кач_2.svg" alt="#">
            <div class="txt_item">
              <p>Штат опытных сотрудников</p>
            </div>
          </div>  
          <div class="svg_item">
            <img src="img/трейд_1.svg" alt="#">
            <div class="txt_item">
              <p>Trade-in: принимаем Вашу технику в зачет</p>
            </div>
          </div>
          <div class="svg_item">
            <img src="img/трал_1.svg" alt="#">
            <div class="txt_item">
              <p>Льготная доставка в регионы собственным автотранспортом</p>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>
  <div class="container">
    <button class='btn_company'>видео о компании</button>
    <button class='btn_company'>наши преимущества</button>
    <button class='btn_company'>сертификаты</button>
    <button class='btn_company'>производство</button>
    <p class="prtr">партнеры</p>  
  </div>
  <div class="partners">
    <img src="img/partners.png" alt="#">
  </div>
</section>
@endsection