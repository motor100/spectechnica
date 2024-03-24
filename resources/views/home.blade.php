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

@endsection