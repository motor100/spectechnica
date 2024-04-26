@section('title', 'Поиск')

@extends('layouts.main')

@section('content')

<div class="search">

  <!-- Хлебные крошки -->
  <div class="breadcrumbs">
    <div class="container">
      <a href="/">Главная</a>
      <span>-</span>
      <span class="active">Поиск</span>
    </div>
  </div>

  <!-- Форма поиска -->
  @include('search-form-section')

  <div class="search-rezult">
    <div class="container">

      <!-- Если товары найдены -->
      <div class="page-title">Результаты поиска "Вакуумный агрегат АЦПТ 1612"</div>
      <div class="rezult">
        <div class="rezult-item">
          <a href="#">Вакуумный агрегат АЦПТ 1612</a>
        </div>
        <div class="rezult-item">
          <a href="#">Вакуумный агрегат АЦПТ 1612</a>
        </div>
        <div class="rezult-item">
          <a href="#">Вакуумный агрегат АЦПТ 1612</a>
        </div>
      </div>

      <!-- Если товаров не найдено -->
      <div class="page-title">ПО ЗАПРОСУ: "Вакуумный агрегат АЦПТ 1612" <br>Товаров не найдено</div>
      <a href="/catalog" class="to-catalog-btn">В каталог</a>

    </div>
  </div>

  <!-- Форма заполнения заявки -->
  @include('application-form-section')

  <!-- Секция с производственными характеристиками -->
  @include('advantages-section')

</div>

@endsection