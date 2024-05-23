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
                                <a href="/catalog/category" class="eq_item__link">
                                    <img src="/img/katalog-avtocisterny.png" alt="АВТОЦИСТЕРНЫ">
                                </a>
                            </div>
                            <div class="eq_item__title hidden-mobile">АВТОЦИСТЕРНЫ</div>
                            <a class="eq_item__title hidden-desktop" href="/catalog/category">АВТОЦИСТЕРНЫ</a>
                        </div>
                        <!-- <div class="horizontal-line hidden-desktop"></div> -->
                        <div class="eq_list">
                            <div class="item_list">
                                <div class="item_img1">
                                    <a href="/catalog/subcategory" class="link">
                                        <img src="/img/avtocisterna.svg" alt="">
                                    </a>
                                </div>
                                <div class="item_title1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory" class="item_link1">Вакуумные автоцистерны</a>
                                </div>
                            </div>
                            <div class="item_list">
                                <div class="item_img1">
                                    <a href="/catalog/subcategory" class="link">
                                        <img src="/img/avtocisterna.svg" alt="">
                                    </a>
                                </div>
                                <div class="item_title1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory" class="item_link1">Вакуумные машины</a>
                                </div>
                            </div>
                            <div class="item_list">
                                <div class="item_img1">
                                    <a href="/catalog/subcategory" class="link">
                                        <img src="/img/avtocisterna.svg" alt="">
                                    </a>
                                </div>
                                <div class="item_title1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory" class="item_link1">Автоцистерны нефтепромысловые</a>
                                </div> 
                            </div>
                            <div class="item_list">
                                <div class="item_img1">
                                    <a href="/catalog/subcategory" class="link">
                                        <img src="/img/avtocisterna.svg" alt="">
                                    </a>
                                </div>
                                <div class="item_title1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory" class="item_link1">Автоцистерны для воды</a>
                                </div>
                            </div>
                            <div class="item_list">
                                <div class="item_img1">
                                    <a href="/catalog/subcategory" class="link">
                                        <img src="/img/avtocisterna.svg" alt="">
                                    </a>
                                </div>
                                <div class="item_title1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory" class="item_link1">Метаноловозы</a>
                                </div>
                            </div>
                            <div class="item_list">
                                <div class="item_img1">
                                    <a href="/catalog/subcategory" class="link">
                                        <img src="/img/avtocisterna.svg" alt="">
                                    </a>
                                </div>
                                <div class="item_title1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory" class="item_link1">Пожарные</a>
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
                                <a href="/catalog/category" class="eq_item__link">
                                    <img src="/img/katalog-pricepnaya-tekhnika.png" alt="ПРИЦЕПНАЯ ТЕХНИКА">
                                </a>
                            </div>
                            <div class="eq_item__title hidden-mobile">ПРИЦЕПНАЯ ТЕХНИКА</div>
                            <a class="eq_item__title hidden-desktop" href="/catalog/category">ПРИЦЕПНАЯ ТЕХНИКА</a>
                        </div>
                        <!-- <div class="horizontal-line hidden-desktop"></div> -->
                        <div class="eq_list">
                            <div class="item_list">
                                <div class="item_img1">
                                    <a href="/catalog/subcategory" class="link">
                                        <img src="/img/pricep1-blue.svg" alt="">
                                    </a>
                                </div>
                                <div class="item_title1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory" class="item_link1">Полуприцепы-цистерны для техводы</a>
                                </div>
                            </div>
                            <div class="item_list">
                                <div class="item_img1">
                                    <a href="/catalog/subcategory" class="link">
                                        <img src="/img/pricep1-orange.svg" alt="">
                                    </a>
                                </div>
                                <div class="item_title1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory" class="item_link1">Полуприцепы-цистерны для ГСМ</a>
                                </div> 
                            </div>
                            <div class="item_list">
                                <div class="item_img1">
                                    <a href="/catalog/subcategory" class="link">
                                        <img src="/img/pricep1-orange.svg" alt="">
                                    </a>
                                </div>
                                <div class="item_title1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory" class="item_link1">Полуприцепы-цистерны для нефти</a>
                                </div>
                            </div>
                            <div class="item_list">
                                <div class="item_img1">
                                    <a href="/catalog/subcategory" class="link">
                                        <img src="/img/pricep1-grey.svg" alt="">
                                    </a>
                                </div>
                                <div class="item_title1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory" class="item_link1">Полуприцепы-цистерны пищевые</a>
                                </div>
                            </div>
                            <div class="item_list">
                                <div class="item_img1">
                                    <a href="/catalog/subcategory" class="link">
                                        <img src="/img/pricep2-blue.svg" alt="">
                                    </a>
                                </div>
                                <div class="item_title1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory" class="item_link1">Бортовые полуприцепы</a>
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
                                <a href="/catalog/category" class="eq_item__link">
                                    <img src="/img/katalog-avtokrany-i-manipulyatory.png" alt="АВТОКРАНЫ И МАНИПУЛЯТОРЫ">
                                </a>
                            </div>
                            <div class="eq_item__title hidden-mobile">АВТОКРАНЫ И МАНИПУЛЯТОРЫ</div>
                            <a class="eq_item__title hidden-desktop" href="/catalog/category">АВТОКРАНЫ И МАНИПУЛЯТОРЫ</a>
                        </div>
                        <!-- <div class="horizontal-line hidden-desktop"></div> -->
                        <div class="eq_list">
                            <div class="item_list">
                                <div class="item_img2">
                                    <a href="/catalog/subcategory" class="link">
                                        <img src="/img/kamaz_kmu.svg" alt="Камаз с КМУ">
                                    </a>
                                </div>
                                <div class="item_title1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory" class="item_link1">Камаз с КМУ</a>
                                </div>
                            </div>
                            <div class="item_list">
                                <div class="item_img2">
                                    <a href="/catalog/subcategory" class="link">
                                        <img src="/img/BKM.svg" alt="Бурильно-крановые машины">
                                    </a>
                                </div>
                                <div class="item_title1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory" class="item_link1">Бурильно-крановые машины</a>
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
                                <a href="/catalog/category" class="eq_item__link">
                                    <img src="/img/katalog-tekhnologicheskij-transport.png" alt="ТЕХНОЛОГИЧЕСКИЙ ТРАНСПОРТ">
                                </a>
                            </div>
                            <div class="eq_item__title hidden-mobile">ТЕХНОЛОГИЧЕСКИЙ ТРАНСПОРТ</div>
                            <a class="eq_item__title hidden-desktop" href="/catalog/category">ТЕХНОЛОГИЧЕСКИЙ ТРАНСПОРТ</a>
                        </div>
                        <!-- <div class="horizontal-line hidden-desktop"></div> -->
                        <div class="eq_list">
                            <div class="item_list">
                                <div class="item_img1">
                                    <a href="/catalog/subcategory" class="link">
                                        <img src="/img/tekhnologicheskij-transport1.svg" alt="Камаз с КМУ">
                                    </a>
                                </div>
                                <div class="item_title1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory" class="item_link1">Универсальные насосные установки (колтюбинг)</a>
                                </div>
                            </div>
                            <div class="item_list">
                                <div class="item_img1">
                                    <a href="/catalog/subcategory" class="link">
                                        <img src="/img/tekhnologicheskij-transport2.svg" alt="Бурильно-крановые машины">
                                    </a>
                                </div>
                                <div class="item_title1">
                                    <div class="bullet"></div>
                                    <a href="/catalog/subcategory" class="item_link1">Цементировочные агрегаты ЦА</a>
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