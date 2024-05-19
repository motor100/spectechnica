@section('title', 'Категория каталога')

@extends('layouts.main')

@section('content')

<div class="category">

    <!-- Хлебные крошки -->
    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Главная</a>
            <span>-</span>
            <a href="/catalog">Каталог техники</a>
            <span>-</span>
            <a href="/catalog/category">Автоцистерны</a>
            <span>-</span>
            <span class="active">Автоцистерны нефтепромысловые термоизолированные</span>
        </div>  
    </div>

    <!-- Форма поиска -->
    @include('search-form-section')

    <!-- Заголовок -->
    <div class="container">
        <div class="page-title">АВТОЦИСТЕРНЫ НЕФТЕПРОМЫСЛОВЫЕ ТЕРМОИЗОЛИРОВАННЫЕ</div>
    </div>
    
    <!-- Секция с фильтром -->
    <div class="filter-section">
        <div class="container">
            <button class="filter-btn">ФИЛЬТР</button>
            <div class="filter-content">
                <p>Параметры фильтра</p>
            </div>
        </div>
    </div>

    <!-- Секция с товарами -->
    <div class="products-wrapper section">
        <div class="section_category">
            <div class="container">
                <div class="section_prod_card">
                    <div class="block_category">
                        <div class="category_item__img">
                            <img src="/img/image_21.png" alt="КАМАЗ-65115">
                        </div>               
                        <div class="y_line"></div>
                        <div class="category_item__description">
                            <div class="product-title-wrapper">
                                <a href="/catalog/product" class="product-title">АЦПТ-13 КАМАЗ-65115</a>
                            </div>
                            <p class="description">6x6, 300 л.с., коробка передач Камаз-154, объем цистерны 10 м³, насос СЦЛ-01А, 1 секция, эллиптическое сечение, ДОПОГ</p>
                            <div class="price"><p class="p1">Цена:</p><p class="p2">По запросу</p></div>
                            <button class="btn_1 orange_btn">ЗАПРОСИТЬ СТОИМОСТЬ</button>
                        </div>
                    </div>
                    <div class="category_item__art">
                        <div class="art">арт. 8859-12</div>
                        <a href="#" class="btn_2">Подробнее</a>
                    </div> 
                </div>
                <div class="x_line"></div> 
            </div>
        </div>
    </div>

    <!-- Видео презентации техники -->
    <div class="video-section-presentation section">
        <div class="container">
        <div class="section-title">ПРЕЗЕНТАЦИИ ТЕХНИКИ</div>
            <div class="videos">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <div class="video-item__image">
                                <img src="/img/presentation-video1.jpg" alt="">
                            </div>
                            <div class="video-item__title">Автотопливозаправщик АТЗ-17 КАМАЗ-6522 Cummins</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <div class="video-item__image">
                                <img src="/img/presentation-video2.jpg" alt="">
                            </div>
                            <div class="video-item__title">Цементировочный агрегат СИН-35М на шасси УРАЛ-4320</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <div class="video-item__image">
                                <img src="/img/presentation-video3.jpg" alt="">
                            </div>
                            <div class="video-item__title">Цементировочный агрегат СИН-35.64 на шасси МАЗ-6317</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <div class="video-item__image">
                                <img src="/img/presentation-video4.jpg" alt="">
                            </div>
                            <div class="video-item__title">Контейнеровоз 20 футовый КАМАЗ-65117</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <div class="video-item__image">
                                <img src="/img/presentation-video5.jpg" alt="">
                            </div>
                            <div class="video-item__title">СИН-32.64 на шасси КАМАЗ-65222</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <div class="video-item__image">
                                <img src="/img/presentation-video6.jpg" alt="">
                            </div>
                            <div class="video-item__title">АНРВ КАМАЗ-43118М модель 2018г</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <div class="video-item__image">
                                <img src="/img/presentation-video7.jpg" alt="">
                            </div>
                            <div class="video-item__title">Передвижная маслостанция на базе КАМАЗ-43118</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <div class="video-item__image">
                                <img src="/img/presentation-video8.jpg" alt="">
                            </div>
                            <div class="video-item__title">Агрегат кислотной обработки скважин СИН-32 на шасси КАМАЗ-43118</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="view-more-btn">Смотреть еще</div>
        </div>
    </div>

    <!-- Отгруженная техника -->
    <div class="video-section-shipment">
        <div class="container">
            <div class="section-title-wrapper">
                <div class="section-title">ОТГРУЖЕННАЯ ТЕХНИКА</div>
                <div class="arrows hidden-mobile">
                    <div class="top-arrows">
                        <img src="/img/left_white.svg" alt="">
                        <img src="/img/right_white.svg" alt="">
                    </div>
                </div>
            </div>

            <!-- Кнопки -->
            <div class="year_btns">
                <div class="year_btn active">2024</div>
                <div class="year_btn">2023</div>
            </div>

            <div class="videos videos-temp">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <img src="/img/video-shipment1.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <img src="/img/video-shipment2.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <img src="/img/video-shipment3.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 d-lg-block d-none">
                        <div class="video-item">
                            <img src="/img/video-shipment4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection