@section('title', 'Каталог')

@extends('layouts.main')

@section('content')

<div class="catalog">

    <!-- Хлебные крошки -->
    <div class="breadcrumb">
        <div class="container">
            <a href="/">Главная</a>
            <span>  -  </span>
            <a class="activ" href="/catalog">Каталог Техники</a>
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

    <!-- Каталог техники -->
    <div class="equipment_catalog">
        <div class="container">
            <p class="title">КАТАЛОГ ТЕХНИКИ</p>
            <div class="row">
                <div class="col-md-6">
                    <div class="eq_item">
                        <img style="width: auto; height: 160px;" src="img/katalog-avtocisterny.png" alt="АВТОЦИСТЕРНЫ">
                        <a class="title_link" href="#">АВТОЦИСТЕРНЫ</a>
                        <div class="eq_list">
                            <div class="item_list"><img src="img/AC_7.svg" alt=""><span></span><a href="#">Вакуумные автоцистерны</a></div>
                            <div class="item_list"><img src="img/AC_7.svg" alt=""><span></span><a href="#">Автоцистерны нефтепромысловые</a></div>
                            <div class="item_list"><img src="img/AC_7.svg" alt=""><span></span><a href="#">Автоцистерны для воды</a></div>
                            <div class="item_list"><img src="img/AC_7.svg" alt=""><span></span><a href="#">Метаноловозы</a></div>
                            <div class="item_list"><img src="img/AC_7.svg" alt=""><span></span><a href="#">Пожарные</a></div>
                        </div>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="eq_item">
                        <img style="width: auto; height: 160px;" src="img/katalog-pricepnaya-tekhnika.png" alt="ПРИЦЕПНАЯ ТЕХНИКА">
                        <a class="title_link" href="#">ПРИЦЕПНАЯ  ТЕХНИКА</a>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="eq_item">
                        <img src="img/katalog-avtokrany-i-manipulyatory.png" alt="АВТОКРАНЫ И МАНИПУЛЯТОРЫ">
                        <a class="title_link" href="#">АВТОКРАНЫ И МАНИПУЛЯТОРЫ</a>
                        <div class="eq_list">
                            <div class="item_list"><img style="width: 75px; height: 55px; margin-left: 10px;" src="img/kamaz_kmu.svg" alt="Камаз с КМУ"><span>.</span><a href="#">Камаз с КМУ</a></div>
                            <div class="item_list"><img style="width: 85px; height: 69px;" src="img/BKM.svg" alt="Бурильно-крановые машины"><span></span><a href="#">Бурильно-крановые машины</a></div>
                        </div>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="eq_item">
                        <img src="img/katalog-tekhnologicheskij-transport.png" alt="ТЕХНОЛОГИЧЕСКИЙ ТРАНСПОРТ">
                        <a class="title_link" href="#">ТЕХНОЛОГИЧЕСКИЙ ТРАНСПОРТ</a>
                        <div class="eq_list">
                            <div class="item_list"><span></span><a href="#">Универсальные насосные установки (колтюбинг)</a></div>
                            <div class="item_list"><span></span><a href="#">Цементировочные агрегаты ЦА</a></div>
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