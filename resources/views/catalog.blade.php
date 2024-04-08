@section('title', 'Каталог')

@extends('layouts.main')

@section('content')

<div class="catalog">

    <!-- Хлебные крошки -->
    <div class="container">
          
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
    <div class="container">
        <div class="equipment_catalog">
            <p class="title">КАТАЛОГ ТЕХНИКИ</p>
            <div class="equipments">
                <div class="eq_item">
                    <img style="height: 160px; width: auto;" src="img/image_15.png" alt="автоцистерны">
                    <p>АВТОЦИСТЕРНЫ</p>
                    <div class="eq_list">
                        <ul>
                            <li><a href="#">Вакуумные автоцистерны</a></li>
                            <li><a href="#">Вакуумные машины</a></li>
                            <li><a href="#">Автоцистерны нефтепромысловые</a></li>
                            <li><a href="#">Автоцистерны для воды</a></li>
                            <li><a href="#">Метаноловозы</a></li>
                            <li><a href="#">Пожарные</a></li>
                            
                        </ul>  
                    </div>   
                </div>
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