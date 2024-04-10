@section('title', 'Каталог')

@extends('layouts.main')

@section('content')

<div class="catalog">

    <!-- Хлебные крошки -->
    <div class="breadcrumb">
        <div class="container">
            <a href="#">Главная</a>
            <span>  -  </span>
            <a class="activ" href="#">Каталог Техники</a>
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
                        <img style="width: auto; height: 160px;" src="img/image_15.png" alt="АВТОЦИСТЕРНЫ">
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
                        <img style="width: auto; height: 160px;" src="img/pngegg-1536x817_1.png" alt="ПРИЦЕПНАЯ ТЕХНИКА">
                        <a class="title_link" href="#">ПРИЦЕПНАЯ  ТЕХНИКА</a>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="eq_item">
                        <img src="img/30975084_1.png" alt="АВТОКРАНЫ И МАНИПУЛЯТОРЫ">
                        <a class="title_link" href="#">АВТОКРАНЫ И МАНИПУЛЯТОРЫ</a>
                        <div class="eq_list">
                            <div class="item_list"><img style="width: 75px; height: 55px; margin-left: 10px;" src="img/kamaz_kmu.svg" alt="Камаз с КМУ"><span>.</span><a href="#">Камаз с КМУ</a></div>
                            <div class="item_list"><img style="width: 85px; height: 69px;" src="img/BKM.svg" alt="Бурильно-крановые машины"><span></span><a href="#">Бурильно-крановые машины</a></div>
                        </div>
                    </div> 
                </div>
                <div class="col-md-6">
                    <div class="eq_item">
                        <img src="img/image_19.png" alt="ТЕХНОЛОГИЧЕСКИЙ ТРАНСПОРТ">
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


            <!-- <div class="equipments">
                <div class="eq_item">
                      
                <div class="eq_item">
                    <img style="height: 160px; width: auto;" src="img/pngegg-1536x817_1.png" alt="автоприцепы">
                    <p>ПРИЦЕПНАЯ  ТЕХНИКА</p>           
                </div>   
            </div>
            <div class="equipments">
                <div class="eq_item">
                    <img src="img/30975084_1.png" alt="автокраны и манипуляторы">
                    <p>АВТОКРАНЫ И МАНИПУЛЯТОРЫ</p>
                    <div class="eq_list">
                        <ul class=list1>
                            <li class="s1"><a href="#">Камаз с КМУ</a></li>
                            <li class="s2"><a href="#">Бурильно-крановые машины</a></li>  
                        </ul>  
                    </div>   
                </div>
                <div class="eq_item">
                    <img src="img/image_19.png" alt="автоприцепы">
                    <p>ТЕХНОЛОГИЧЕСКИЙ ТРАНСПОРТ</p>
                    <div class="eq_list">
                        <ul class=list2>
                            <li class="s3"><a href="#">Универсальные насосные установки (колтюбинг)</a></li>
                            <li class="s4"><a href="#">Цементировочные агрегаты ЦА</a></li>  
                        </ul>  
                    </div>           
                </div>    -->
           
            
    

    <!-- Форма заполнения заявки -->
    @include('application-form-section')

    <!-- Секция с производственными характеристиками -->
    @include('advantages-section')

</div>


@endsection