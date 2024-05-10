@section('title', 'Каталог')

@extends('layouts.main')

@section('content')

<div class="catalog">

    <!-- Хлебные крошки -->
    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Главная</a>
            <span>  -  </span>
            <a class="active" href="/catalog">Каталог Техники</a>
        </div>  
    </div>

    <!-- Форма поиска -->
    @include('search-form-section')

    <!-- Каталог техники -->
    <div class="equipment_catalog">
        <div class="container">
            <div class="page-title title">КАТАЛОГ ТЕХНИКИ</div>
            <div class="eq_catalog">
                <div class="eq_item">
                    <div class="eq_item__image"><img src="img/katalog-avtocisterny.png" alt="АВТОЦИСТЕРНЫ"></div>
                    <a class="title_link" href="#">АВТОЦИСТЕРНЫ</a>
                    <div class="eq_list">
                        <div class="item_list">
                            <div class="item_img1"><img src="/img/AC_7.svg" alt=""></div>
                            <div class="item_link1">
                                <div class="bullet"></div>
                                <a href="#">Вакуумные автоцистерны</a>
                            </div>
                        </div>
                        <div class="item_list">
                            <div class="item_img1"><img src="/img/AC_7.svg" alt=""></div>
                            <div class="item_link1">
                                <div class="bullet"></div>
                                <a href="#">Автоцистерны нефтепромысловые</a>
                            </div> 
                        </div>
                        <div class="item_list">
                            <div class="item_img1"><img src="/img/AC_7.svg" alt=""></div>
                            <div class="item_link1">
                                <div class="bullet"></div>
                                <a href="#">Автоцистерны для воды</a>
                            </div>
                        </div>
                        <div class="item_list">
                            <div class="item_img1"><img src="/img/AC_7.svg" alt=""></div>
                            <div class="item_link1">
                                <div class="bullet"></div>
                                <a href="#">Метаноловозы</a>
                            </div>
                        </div>
                        <div class="item_list">
                            <div class="item_img1"><img src="/img/AC_7.svg" alt=""></div>
                            <div class="item_link1">
                                <div class="bullet"></div>
                                <a href="#">Пожарные</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item_button__mobile">
                    <span class="top_line"></span>
                    <div class="arrow"><img src="img/arrow_catalog__dropdown.svg" alt=""></div>
                </div> 
                <div class="eq_item">
                    <div class="eq_item__image"><img src="img/katalog-pricepnaya-tekhnika.png" alt="ПРИЦЕПНАЯ ТЕХНИКА"></div>
                    <a class="title_link" href="#">ПРИЦЕПНАЯ  ТЕХНИКА</a>
                </div>
                <div class="item_button__mobile">
                    <span class="top_line"></span>
                    <div class="arrow"><img src="img/arrow_catalog__dropdown.svg" alt=""></div>
                </div>
                <div class="eq_item">
                    <div class="eq_item__image"><img src="/img/katalog-avtokrany-i-manipulyatory.png" alt="АВТОКРАНЫ И МАНИПУЛЯТОРЫ"></div>
                    <a class="title_link" href="#">АВТОКРАНЫ И МАНИПУЛЯТОРЫ</a>
                    <div class="eq_list">
                        <div class="item_list">
                            <img class="item_img2" src="img/kamaz_kmu.svg" alt="Камаз с КМУ">
                            <div class="item_link2">
                                <div class="bullet"></div>
                                <a href="#">Камаз с КМУ</a>
                            </div>
                        </div>
                        <div class="item_list">
                            <img class="item_img2" src="img/BKM.svg" alt="Бурильно-крановые машины">
                            <div class="item_link2">
                                <div class="bullet"></div>
                                <a href="#">Бурильно-крановые машины</a>
                            </div> 
                        </div>
                    </div>
                </div> 
                <div class="item_button__mobile">
                    <span class="top_line"></span>
                    <div class="arrow"><img src="img/arrow_catalog__dropdown.svg" alt=""></div>
                </div>
                <div class="eq_item">
                    <div class="eq_item__image"><img src="/img/katalog-tekhnologicheskij-transport.png" alt="ТЕХНОЛОГИЧЕСКИЙ ТРАНСПОРТ"></div>
                    <a class="title_link" href="#">ТЕХНОЛОГИЧЕСКИЙ ТРАНСПОРТ</a>
                    <div class="eq_list">
                        <div class="item_list">
                            <div class="item_link3">
                                <div class="bullet"></div>
                                <a href="#">Универсальные насосные установки (колтюбинг)</a>
                            </div>
                            
                        </div>
                        <div class="item_list">
                            <div class="item_link3">
                                <div class="bullet"></div>
                                <a href="#">Цементировочные агрегаты ЦА</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item_button__mobile">
                    <span class="top_line"></span>
                    <div class="arrow"><img src="img/arrow_catalog__dropdown.svg" alt=""></div>
                </div> 
            </div>
        </div>
    </div>
    <!-- Кнопки спецпредложение -->
    <div class="offers_mobile">
        <div class="container">
            <div class="eq_in_stock">
                <img src="/img/offers_1.svg" alt="">
                <p>ТЕХНИКА В НАЛИЧИИ</p>
                <a href="#" class="offers_link"></a>
            </div>
            <div class="special_offers">
                <img src="/img/offers_2.svg" alt="">
                <p>СПЕЦПРЕДЛОЖЕНИЯ</p>
                <a href="#" class="offers_link"></a>
            </div>
        </div>
    </div>
    
    <!-- Форма заполнения заявки -->
    @include('application-form-section')

    <!-- Секция с производственными характеристиками -->
    @include('advantages-section')

</div>


@endsection