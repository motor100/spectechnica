@section('title', 'Каталог')

@extends('layouts.main')

@section('content')

<div class="catalog">

    <!-- Хлебные крошки -->
    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Главная</a>
            <span>  -  </span>
            <span class="active">Каталог Техники</span>
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
                <div class="col-md-6">
                    <div class="eq_item">
                        <div class="flex-container">
                            <div class="eq_item__image">
                                <img src="/img/katalog-pricepnaya-tekhnika.png" alt="ПРИЦЕПНАЯ ТЕХНИКА">
                            </div>
                            <div class="eq_item__title hidden-mobile">АВТОЦИСТЕРНЫ</div>
                            <a class="eq_item__title hidden-desktop" href="/catalog/category">ПРИЦЕПНАЯ ТЕХНИКА</a>
                        </div>
                        <!-- <div class="horizontal-line hidden-desktop"></div> -->
                        <div class="eq_list">
                            <div class="item_list">
                                <div class="item_img1">
                                    <img src="/img/pricep1-blue.svg" alt="">
                                </div>
                                <div class="item_link1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory">Полуприцепы-цистерны для техводы</a>
                                </div>
                            </div>
                            <div class="item_list">
                                <div class="item_img1">
                                    <img src="/img/pricep1-orange.svg" alt="">
                                </div>
                                <div class="item_link1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory">Полуприцепы-цистерны для ГСМ</a>
                                </div> 
                            </div>
                            <div class="item_list">
                                <div class="item_img1">
                                    <img src="/img/pricep1-orange.svg" alt="">
                                </div>
                                <div class="item_link1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory">Полуприцепы-цистерны для нефти</a>
                                </div>
                            </div>
                            <div class="item_list">
                                <div class="item_img1">
                                    <img src="/img/pricep1-grey.svg" alt="">
                                </div>
                                <div class="item_link1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory">Полуприцепы-цистерны пищевые</a>
                                </div>
                            </div>
                            <div class="item_list">
                                <div class="item_img1">
                                    <img src="/img/pricep2-blue.svg" alt="">
                                </div>
                                <div class="item_link1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory">Бортовые полуприцепы</a>
                                </div>
                            </div>
                        </div>
                        <div class="horizontal-line hidden-desktop"></div>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="eq_item">
                        <div class="flex-container">
                            <div class="eq_item__image">
                                <img src="/img/katalog-avtokrany-i-manipulyatory.png" alt="АВТОКРАНЫ И МАНИПУЛЯТОРЫ">
                            </div>
                            <div class="eq_item__title hidden-mobile">АВТОЦИСТЕРНЫ</div>
                            <a class="eq_item__title hidden-desktop" href="/catalog/category">АВТОКРАНЫ И МАНИПУЛЯТОРЫ</a>
                        </div>
                        <!-- <div class="horizontal-line hidden-desktop"></div> -->
                        <div class="eq_list">
                            <div class="item_list">
                                <img class="item_img2" src="/img/kamaz_kmu.svg" alt="Камаз с КМУ">
                                <div class="item_link1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory">Камаз с КМУ</a>
                                </div>
                            </div>
                            <div class="item_list">
                                <img class="item_img2" src="/img/BKM.svg" alt="Бурильно-крановые машины">
                                <div class="item_link1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory">Бурильно-крановые машины</a>
                                </div>
                            </div>
                        </div>
                        <div class="horizontal-line hidden-desktop"></div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="eq_item">
                        <div class="flex-container">
                            <div class="eq_item__image">
                                <img src="/img/katalog-tekhnologicheskij-transport.png" alt="ТЕХНОЛОГИЧЕСКИЙ ТРАНСПОРТ">
                            </div>
                            <div class="eq_item__title hidden-mobile">АВТОЦИСТЕРНЫ</div>
                            <a class="eq_item__title hidden-desktop" href="/catalog/category">ТЕХНОЛОГИЧЕСКИЙ ТРАНСПОРТ</a>
                        </div>
                        <!-- <div class="horizontal-line hidden-desktop"></div> -->
                        <div class="eq_list">
                            <div class="item_list">
                                <img class="item_img2" src="/img/tekhnologicheskij-transport1.svg" alt="Камаз с КМУ">
                                <div class="item_link1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory">Универсальные насосные установки (колтюбинг)</a>
                                </div>
                            </div>
                            <div class="item_list">
                                <img class="item_img2" src="/img/tekhnologicheskij-transport2.svg" alt="Бурильно-крановые машины">
                                <div class="item_link1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory">Цементировочные агрегаты ЦА</a>
                                </div>
                            </div>
                        </div>
                        <div class="horizontal-line hidden-desktop"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Кнопки спецпредложение -->
    <!-- 
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
     -->
    
    <!-- Форма заполнения заявки -->
    @include('application-form-section')

    <!-- Секция с производственными характеристиками -->
    @include('advantages-section')

</div>


@endsection