@section('title', 'Главная')

@extends('layouts.main')

@section('content')

<div class="home">

  <!-- Главная секция -->
  <div class="main-section">
    <div class="main-slider">
      <!-- Слайд -->
      <div class="slide">
        <!-- Фоновая картинка -->
        <img src="/img/main-slider-background1.jpg" alt="">
        <!-- Картинка с машиной -->
        <img src="/img/main-slider-car1.png" alt="">
        <!-- Прямоугольник с названием -->
        <div class="title">
          <div class="text">Автоцистерны</div>
        </div>
      </div>
      <!-- Пагинация -->
      <div class="slider-pagination">
        <!-- Точка обычная -->
        <div class="dot"></div>
        <!-- Точка активная -->
        <div class="dot active"></div>
      </div>
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
</div>


<!-- Тестирование фоновой картинки через свойство background -->
<div class="sldr"></div>



@endsection