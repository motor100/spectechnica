@section('title', 'Карточка товара')

@extends('layouts.main')

@section('content')

<div class="catalog">

    <!-- Хлебные крошки -->
    <div class="breadcrumb">
        <div class="container">
            <a href="#">Главная</a>
            <span>  -  </span>
            <a href="#">Каталог</a>
            <span>  -  </span>
            <a href="#">Автоцистерны</a>
            <span>  -  </span>
            <a class="activ" href="#"> АЦПТ 1612</a>
        </div>  
    </div>

    <!-- Форма поиска -->
    <div class="container">
        <form>
            <div class="search">
                <input type="search" name="q" placeholder="Поиск по сайту">
                <input type="submit" value="">
            </div>
        </form>
    </div>

    <!-- Главная секция -->
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="section_card">
                    <p class="title">Вакуумный агрегат АЦПТ 1612</p>
                    <div class="card_image"><img src="/img/image_30.png" alt="img"></div>
                </div>
                <!-- <div class="square_block"></div>
                <div class="square_block"></div>
                <div class="square_block"></div>
                <div class="square_block"></div>
                <div class="square_block"></div>
                <div class="square_block"></div>
                <div class="square_block"></div>
                <div class="square_block"></div>
                <div class="square_block"></div>
                <div class="square_block"></div> -->
            </div>
        </div>
    </div>
    





    

</div>


@endsection