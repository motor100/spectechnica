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
            <div class="row">
                <div class="col-md-6">
                    <div class="eq_item">
                        <img class="eq_item__image" src="img/katalog-avtocisterny.png" alt="АВТОЦИСТЕРНЫ">
                        <a class="title_link" href="#">АВТОЦИСТЕРНЫ</a>
                        <div class="eq_list">
                            <div class="item_list">
                                <img src="/img/AC_7.svg" alt="">
                                <div class="bullet"></div>
                                <a href="#">Вакуумные автоцистерны</a>
                            </div>
                            <div class="item_list">
                                <img src="/img/AC_7.svg" alt="">
                                <div class="bullet"></div>
                                <a href="#">Автоцистерны нефтепромысловые</a>
                            </div>
                            <div class="item_list">
                                <img src="/img/AC_7.svg" alt="">
                                <div class="bullet"></div>
                                <a href="#">Автоцистерны для воды</a>
                            </div>
                            <div class="item_list">
                                <img src="/img/AC_7.svg" alt="">
                                <div class="bullet"></div>
                                <a href="#">Метаноловозы</a>
                            </div>
                            <div class="item_list">
                                <img src="/img/AC_7.svg" alt="">
                                <div class="bullet"></div>
                                <a href="#">Пожарные</a>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="eq_item">
                        <img class="eq_item__image" src="img/katalog-pricepnaya-tekhnika.png" alt="ПРИЦЕПНАЯ ТЕХНИКА">
                        <a class="title_link" href="#">ПРИЦЕПНАЯ  ТЕХНИКА</a>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="eq_item">
                        <img src="/img/katalog-avtokrany-i-manipulyatory.png" alt="АВТОКРАНЫ И МАНИПУЛЯТОРЫ">
                        <a class="title_link" href="#">АВТОКРАНЫ И МАНИПУЛЯТОРЫ</a>
                        <div class="eq_list">
                            <div class="item_list">
                                <img class="item_list__image" src="img/kamaz_kmu.svg" alt="Камаз с КМУ">
                                <div class="bullet"></div>
                                <a href="#">Камаз с КМУ</a>
                            </div>
                            <div class="item_list">
                                <img class="item_list__image" src="img/BKM.svg" alt="Бурильно-крановые машины">
                                <div class="bullet"></div>
                                <a href="#">Бурильно-крановые машины</a>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="eq_item">
                        <img src="/img/katalog-tekhnologicheskij-transport.png" alt="ТЕХНОЛОГИЧЕСКИЙ ТРАНСПОРТ">
                        <a class="title_link" href="#">ТЕХНОЛОГИЧЕСКИЙ ТРАНСПОРТ</a>
                        <div class="eq_list">
                            <div class="item_list">
                                <div class="bullet"></div>
                                <a href="#">Универсальные насосные установки (колтюбинг)</a>
                            </div>
                            <div class="item_list">
                                <div class="bullet"></div>
                                <a href="#">Цементировочные агрегаты ЦА</a>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    
    <!-- Форма заполнения заявки -->
    @include('application-form-section')

    <!-- Секция с производственными характеристиками -->
    @include('advantages-section')

</div>


@endsection