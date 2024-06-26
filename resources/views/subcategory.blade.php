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
                <div class="filter-content__title">Фильтр по параметрам</div>
                <div class="filter-item">
                    <div class="filter-item__title">НАЛИЧИЕ</div>
                    <div class="filter-item__settings">
                        <div class="value">
                            <div class="text">В наличии</div>
                            <div class="counter">5</div>
                        </div>
                        <div class="value">
                            <div class="text">Ожидается</div>
                            <div class="counter">0</div>
                        </div>
                        <div class="value active">
                            <div class="text">На заказ</div>
                            <div class="counter">5</div>
                        </div>
                    </div>
                </div>
                <div class="filter-item">
                    <div class="filter-item__title">МАРКА ШАССИ</div>
                    <div class="filter-item__settings">
                        <div class="value">
                            <div class="text">Урал</div>
                            <div class="counter">5</div>
                        </div>
                        <div class="value active">
                            <div class="text">Урал-NEXT</div>
                            <div class="counter">8</div>
                        </div>
                        <div class="value">
                            <div class="text">Камаз</div>
                            <div class="counter">5</div>
                        </div>
                    </div>
                </div>
                <div class="filter-item">
                    <div class="filter-item__title">ГРУЗОПОДЪЕМНОСТЬ</div>
                    <div class="filter-item__settings">
                        <div class="value">
                            <div class="text">4,1</div>
                            <div class="counter">5</div>
                        </div>
                        <div class="value active">
                            <div class="text">4,2</div>
                            <div class="counter">2</div>
                        </div>
                        <div class="value">
                            <div class="text">4,7</div>
                            <div class="counter">3</div>
                        </div>
                        <div class="value">
                            <div class="text">6</div>
                            <div class="counter">2</div>
                        </div>
                        <div class="value active">
                            <div class="text">6,5</div>
                            <div class="counter">3</div>
                        </div>
                        <div class="value">
                            <div class="text">6,9</div>
                            <div class="counter">5</div>
                        </div>
                        <div class="value">
                            <div class="text">7,0</div>
                            <div class="counter">2</div>
                        </div>
                        <div class="value active">
                            <div class="text">10</div>
                            <div class="counter">3</div>
                        </div>
                        <div class="value">
                            <div class="text">10,5</div>
                            <div class="counter">5</div>
                        </div>
                    </div>
                </div>
                <div class="reset">
                    <img class="reset-image" src="/img/cross.svg" alt="">
                    <span class="reset-text">Сбросить параметры</span>
                </div>
                <div class="close js-filter-close">
                    <span class="close-text">Скрыть параметры</span>
                    <img class="close-image" src="/img/arrow-top.svg" alt="">
                </div>
            </div>
        </div>
    </div>

    <!-- Секция с товарами -->
    <div class="products-wrapper section">
        <div class="product-item">
            <div class="section_prod_card">
                <div class="product-title-wrapper product-title-wrapper-mobile">
                    <div class="container">
                        <div class="flex-container">
                            <a href="/catalog/product" class="product-title">Автоцистерна для воды АЦПТ-10 на шасси УРАЛ 4320</a>
                            <div class="art">арт. 8859-12</div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="block_category">
                        <div class="category_item__img">
                            <img src="/img/image_21.png" alt="КАМАЗ-65115">
                        </div>
                        <div class="y_line"></div>
                        <div class="category_item__description">
                            <div class="product-title-wrapper product-title-wrapper-desktop">
                                <a href="/catalog/product" class="product-title">АЦПТ-13 КАМАЗ-65115</a>
                                <div class="art">арт. 8859-12</div>
                            </div>
                            <div class="description">6x6, 300 л.с., коробка передач Камаз-154, объем цистерны 10 м³, насос СЦЛ-01А, 1 секция, эллиптическое сечение, ДОПОГ</div>
                            <div class="price">
                                <span class="price-text">Цена: </span>
                                <span class="price-value">По запросу</span>
                            </div>
                            <div class="buttons buttons-desktop">
                                <button class="btn_1 orange_btn">ЗАПРОСИТЬ СТОИМОСТЬ</button>
                                <a href="/catalog/product" class="btn_2">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="buttons buttons-mobile">
                        <button class="btn_1 orange_btn">ЗАПРОСИТЬ СТОИМОСТЬ</button>
                        <a href="/catalog/product" class="btn_2">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="x-line-wrapper">
                <div class="container">
                    <div class="x_line"></div>
                </div>
            </div>
        </div>
        <div class="product-item">
            <div class="section_prod_card">
                <div class="product-title-wrapper product-title-wrapper-mobile">
                    <div class="container">
                        <div class="flex-container">
                            <a href="/catalog/product" class="product-title">Автоцистерна для воды АЦПТ-10 на шасси УРАЛ 4320</a>
                            <div class="art">арт. 8859-12</div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="block_category">
                        <div class="category_item__img">
                            <img src="/img/image_21.png" alt="КАМАЗ-65115">
                        </div>
                        <div class="y_line"></div>
                        <div class="category_item__description">
                            <div class="product-title-wrapper product-title-wrapper-desktop">
                                <a href="/catalog/product" class="product-title">АЦПТ-13 КАМАЗ-65115</a>
                                <div class="art">арт. 8859-12</div>
                            </div>
                            <div class="description">6x6, 300 л.с., коробка передач Камаз-154, объем цистерны 10 м³, насос СЦЛ-01А, 1 секция, эллиптическое сечение, ДОПОГ</div>
                            <div class="price">
                                <span class="price-text">Цена: </span>
                                <span class="price-value">По запросу</span>
                            </div>
                            <div class="buttons buttons-desktop">
                                <button class="btn_1 orange_btn">ЗАПРОСИТЬ СТОИМОСТЬ</button>
                                <a href="/catalog/product" class="btn_2">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="buttons buttons-mobile">
                        <button class="btn_1 orange_btn">ЗАПРОСИТЬ СТОИМОСТЬ</button>
                        <a href="/catalog/product" class="btn_2">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="x-line-wrapper">
                <div class="container">
                    <div class="x_line"></div>
                </div>
            </div>
        </div>
        <div class="product-item">
            <div class="section_prod_card">
                <div class="product-title-wrapper product-title-wrapper-mobile">
                    <div class="container">
                        <div class="flex-container">
                            <a href="/catalog/product" class="product-title">Автоцистерна для воды АЦПТ-10 на шасси УРАЛ 4320</a>
                            <div class="art">арт. 8859-12</div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="block_category">
                        <div class="category_item__img">
                            <img src="/img/image_21.png" alt="КАМАЗ-65115">
                        </div>
                        <div class="y_line"></div>
                        <div class="category_item__description">
                            <div class="product-title-wrapper product-title-wrapper-desktop">
                                <a href="/catalog/product" class="product-title">АЦПТ-13 КАМАЗ-65115</a>
                                <div class="art">арт. 8859-12</div>
                            </div>
                            <div class="description">6x6, 300 л.с., коробка передач Камаз-154, объем цистерны 10 м³, насос СЦЛ-01А, 1 секция, эллиптическое сечение, ДОПОГ</div>
                            <div class="price">
                                <span class="price-text">Цена: </span>
                                <span class="price-value">По запросу</span>
                            </div>
                            <div class="buttons buttons-desktop">
                                <button class="btn_1 orange_btn">ЗАПРОСИТЬ СТОИМОСТЬ</button>
                                <a href="/catalog/product" class="btn_2">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="buttons buttons-mobile">
                        <button class="btn_1 orange_btn">ЗАПРОСИТЬ СТОИМОСТЬ</button>
                        <a href="/catalog/product" class="btn_2">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="x-line-wrapper">
                <div class="container">
                    <div class="x_line"></div>
                </div>
            </div>
        </div>
        <div class="product-item">
            <div class="section_prod_card">
                <div class="product-title-wrapper product-title-wrapper-mobile">
                    <div class="container">
                        <div class="flex-container">
                            <a href="/catalog/product" class="product-title">Автоцистерна для воды АЦПТ-10 на шасси УРАЛ 4320</a>
                            <div class="art">арт. 8859-12</div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="block_category">
                        <div class="category_item__img">
                            <img src="/img/image_21.png" alt="КАМАЗ-65115">
                        </div>
                        <div class="y_line"></div>
                        <div class="category_item__description">
                            <div class="product-title-wrapper product-title-wrapper-desktop">
                                <a href="/catalog/product" class="product-title">АЦПТ-13 КАМАЗ-65115</a>
                                <div class="art">арт. 8859-12</div>
                            </div>
                            <div class="description">6x6, 300 л.с., коробка передач Камаз-154, объем цистерны 10 м³, насос СЦЛ-01А, 1 секция, эллиптическое сечение, ДОПОГ</div>
                            <div class="price">
                                <span class="price-text">Цена: </span>
                                <span class="price-value">По запросу</span>
                            </div>
                            <div class="buttons buttons-desktop">
                                <button class="btn_1 orange_btn">ЗАПРОСИТЬ СТОИМОСТЬ</button>
                                <a href="/catalog/product" class="btn_2">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="buttons buttons-mobile">
                        <button class="btn_1 orange_btn">ЗАПРОСИТЬ СТОИМОСТЬ</button>
                        <a href="/catalog/product" class="btn_2">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="x-line-wrapper">
                <div class="container">
                    <div class="x_line"></div>
                </div>
            </div>
        </div>
        <div class="product-item">
            <div class="section_prod_card">
                <div class="product-title-wrapper product-title-wrapper-mobile">
                    <div class="container">
                        <div class="flex-container">
                            <a href="/catalog/product" class="product-title">Автоцистерна для воды АЦПТ-10 на шасси УРАЛ 4320</a>
                            <div class="art">арт. 8859-12</div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="block_category">
                        <div class="category_item__img">
                            <img src="/img/image_21.png" alt="КАМАЗ-65115">
                        </div>
                        <div class="y_line"></div>
                        <div class="category_item__description">
                            <div class="product-title-wrapper product-title-wrapper-desktop">
                                <a href="/catalog/product" class="product-title">АЦПТ-13 КАМАЗ-65115</a>
                                <div class="art">арт. 8859-12</div>
                            </div>
                            <div class="description">6x6, 300 л.с., коробка передач Камаз-154, объем цистерны 10 м³, насос СЦЛ-01А, 1 секция, эллиптическое сечение, ДОПОГ</div>
                            <div class="price">
                                <span class="price-text">Цена: </span>
                                <span class="price-value">По запросу</span>
                            </div>
                            <div class="buttons buttons-desktop">
                                <button class="btn_1 orange_btn">ЗАПРОСИТЬ СТОИМОСТЬ</button>
                                <a href="/catalog/product" class="btn_2">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="buttons buttons-mobile">
                        <button class="btn_1 orange_btn">ЗАПРОСИТЬ СТОИМОСТЬ</button>
                        <a href="/catalog/product" class="btn_2">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="x-line-wrapper">
                <div class="container">
                    <div class="x_line"></div>
                </div>
            </div>
        </div>
        <div class="product-item">
            <div class="section_prod_card">
                <div class="product-title-wrapper product-title-wrapper-mobile">
                    <div class="container">
                        <div class="flex-container">
                            <a href="/catalog/product" class="product-title">Автоцистерна для воды АЦПТ-10 на шасси УРАЛ 4320</a>
                            <div class="art">арт. 8859-12</div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="block_category">
                        <div class="category_item__img">
                            <img src="/img/image_21.png" alt="КАМАЗ-65115">
                        </div>
                        <div class="y_line"></div>
                        <div class="category_item__description">
                            <div class="product-title-wrapper product-title-wrapper-desktop">
                                <a href="/catalog/product" class="product-title">АЦПТ-13 КАМАЗ-65115</a>
                                <div class="art">арт. 8859-12</div>
                            </div>
                            <div class="description">6x6, 300 л.с., коробка передач Камаз-154, объем цистерны 10 м³, насос СЦЛ-01А, 1 секция, эллиптическое сечение, ДОПОГ</div>
                            <div class="price">
                                <span class="price-text">Цена: </span>
                                <span class="price-value">По запросу</span>
                            </div>
                            <div class="buttons buttons-desktop">
                                <button class="btn_1 orange_btn">ЗАПРОСИТЬ СТОИМОСТЬ</button>
                                <a href="/catalog/product" class="btn_2">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="buttons buttons-mobile">
                        <button class="btn_1 orange_btn">ЗАПРОСИТЬ СТОИМОСТЬ</button>
                        <a href="/catalog/product" class="btn_2">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="x-line-wrapper">
                <div class="container">
                    <div class="x_line"></div>
                </div>
            </div>
        </div>
        <div class="product-item">
            <div class="section_prod_card">
                <div class="product-title-wrapper product-title-wrapper-mobile">
                    <div class="container">
                        <div class="flex-container">
                            <a href="/catalog/product" class="product-title">Автоцистерна для воды АЦПТ-10 на шасси УРАЛ 4320</a>
                            <div class="art">арт. 8859-12</div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="block_category">
                        <div class="category_item__img">
                            <img src="/img/image_21.png" alt="КАМАЗ-65115">
                        </div>
                        <div class="y_line"></div>
                        <div class="category_item__description">
                            <div class="product-title-wrapper product-title-wrapper-desktop">
                                <a href="/catalog/product" class="product-title">АЦПТ-13 КАМАЗ-65115</a>
                                <div class="art">арт. 8859-12</div>
                            </div>
                            <div class="description">6x6, 300 л.с., коробка передач Камаз-154, объем цистерны 10 м³, насос СЦЛ-01А, 1 секция, эллиптическое сечение, ДОПОГ</div>
                            <div class="price">
                                <span class="price-text">Цена: </span>
                                <span class="price-value">По запросу</span>
                            </div>
                            <div class="buttons buttons-desktop">
                                <button class="btn_1 orange_btn">ЗАПРОСИТЬ СТОИМОСТЬ</button>
                                <a href="/catalog/product" class="btn_2">Подробнее</a>
                            </div>
                        </div>
                    </div>
                    <div class="buttons buttons-mobile">
                        <button class="btn_1 orange_btn">ЗАПРОСИТЬ СТОИМОСТЬ</button>
                        <a href="/catalog/product" class="btn_2">Подробнее</a>
                    </div>
                </div>
            </div>
            <div class="x-line-wrapper">
                <div class="container">
                    <div class="x_line"></div>
                </div>
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
                                <img src="/img/video-cover.jpg" alt="">
                            </div>
                            <div class="video-item__title">Автотопливозаправщик АТЗ-17 КАМАЗ-6522 Cummins</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <div class="video-item__image">
                                <img src="/img/video-cover.jpg" alt="">
                            </div>
                            <div class="video-item__title">Цементировочный агрегат СИН-35М на шасси УРАЛ-4320</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <div class="video-item__image">
                                <img src="/img/video-cover.jpg" alt="">
                            </div>
                            <div class="video-item__title">Цементировочный агрегат СИН-35.64 на шасси МАЗ-6317</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <div class="video-item__image">
                                <img src="/img/video-cover.jpg" alt="">
                            </div>
                            <div class="video-item__title">Контейнеровоз 20 футовый КАМАЗ-65117</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <div class="video-item__image">
                                <img src="/img/video-cover.jpg" alt="">
                            </div>
                            <div class="video-item__title">СИН-32.64 на шасси КАМАЗ-65222</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <div class="video-item__image">
                                <img src="/img/video-cover.jpg" alt="">
                            </div>
                            <div class="video-item__title">АНРВ КАМАЗ-43118М модель 2018г</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <div class="video-item__image">
                                <img src="/img/video-cover.jpg" alt="">
                            </div>
                            <div class="video-item__title">Передвижная маслостанция на базе КАМАЗ-43118</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <div class="video-item__image">
                                <img src="/img/video-cover.jpg" alt="">
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
                            <img src="/img/video-cover.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <img src="/img/video-cover.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <img src="/img/video-cover.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 d-lg-block d-none">
                        <div class="video-item">
                            <img src="/img/video-cover.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection