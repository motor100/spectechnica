@section('title', 'Каталог')

@extends('layouts.main')

@section('content')

<div class="catalog">

    <!-- Хлебные крошки -->
    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Главная</a>
            <span>  -  </span>
            <a href="/catalog">Каталог Техники</a>
            <span>  -  </span>
            <span class="active">Автоцистерны</span>
        </div>  
    </div>

    <!-- Форма поиска -->
    @include('search-form-section')

    <!-- Каталог техники -->
    <div class="equipment_catalog">
        <div class="container">
            <div class="page-title title">Автоцистерны</div>
            <div class="eq_item">
                <div class="flex-container">
                    <div class="eq_item__image">
                        <img src="/img/katalog-avtocisterny.png" alt="АВТОЦИСТЕРНЫ">
                    </div>
                    <div class="eq_item__title hidden-mobile">АВТОЦИСТЕРНЫ</div>
                    <a class="eq_item__title hidden-desktop" href="/catalog/category">АВТОЦИСТЕРНЫ</a>
                </div>
                <!-- <div class="horizontal-line hidden-desktop"></div> -->
                <div class="eq_list">
                    <div class="item_list">
                        <div class="item_img1">
                            <img src="/img/AC_7.svg" alt="">
                        </div>
                        <div class="item_link1">
                            <div class="bullet"></div>
                            <a href="/catalog/subcategory">Вакуумные автоцистерны</a>
                        </div>
                    </div>
                    <div class="item_list">
                        <div class="item_img1">
                            <img src="/img/AC_7.svg" alt="">
                        </div>
                        <div class="item_link1">
                            <div class="bullet"></div>
                            <a href="/catalog/subcategory">Вакуумные машины</a>
                        </div>
                    </div>
                    <div class="item_list">
                        <div class="item_img1">
                            <img src="/img/AC_7.svg" alt="">
                        </div>
                        <div class="item_link1">
                            <div class="bullet"></div>
                            <a href="/catalog/subcategory">Автоцистерны нефтепромысловые</a>
                        </div> 
                    </div>
                    <div class="item_list">
                        <div class="item_img1">
                            <img src="/img/AC_7.svg" alt="">
                        </div>
                        <div class="item_link1">
                            <div class="bullet"></div>
                            <a href="/catalog/subcategory">Автоцистерны для воды</a>
                        </div>
                    </div>
                    <div class="item_list">
                        <div class="item_img1">
                            <img src="/img/AC_7.svg" alt="">
                        </div>
                        <div class="item_link1">
                            <div class="bullet"></div>
                            <a href="/catalog/subcategory">Метаноловозы</a>
                        </div>
                    </div>
                    <div class="item_list">
                        <div class="item_img1">
                            <img src="/img/AC_7.svg" alt="">
                        </div>
                        <div class="item_link1">
                            <div class="bullet"></div>
                            <a href="/catalog/subcategory">Пожарные</a>
                        </div>
                    </div>
                </div>
                <div class="horizontal-line hidden-desktop"></div>
            </div>
        </div>
    </div>
    
    <!-- Форма заполнения заявки -->
    @include('application-form-section')

    <!-- Секция с производственными характеристиками -->
    @include('advantages-section')

</div>


@endsection