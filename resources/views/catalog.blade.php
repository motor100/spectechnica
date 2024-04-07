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
    <div class="application">
        <div class="container">
            <p class="title">ОСТАВИТЬ ЗАЯВКУ / ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ</p>
            <div class="main_form">
                <div class="form_item">  
                    <div class="name">
                        <input type="text" class="form-control" required>
                        <div class="placeholder">Имя<span> *</span></div>
                    </div>
                    <div class="question">
                        <input type="text" class="form-control" required>
                        <div class="placeholder">Задать вопрос<span> *</span></div>  
                    </div>
                    <div class="fone">
                        <input type="text" class="form-control" required>
                        <div class="placeholder">Телефон<span> *</span></div>
                    </div> 
                </div>
                <div class="form_item">
                    <div class="checkbox">
                        <input type="checkbox">
                        <p class="condition">Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных,
                            в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных»,
                             на условиях и для целей, определенных в Согласии на обработку персональных данных *</p> 
                    </div>
                    <a class="btn_push" href="#">ОТПРАВИТЬ</a>
                </div>
            </div>
        </div>  
    </div>

    <!-- Секция с производственными характеристиками -->
    <div class="container">
        <div class="advantages-section">
            <p class="text_prod">МЫ ПРОИЗВОДИМ И РЕАЛИЗУЕМ, А ВЫ ПОЛУЧАЕТЕ:</p>
            <div class="prod_company">
                <div class="item_prod">
                    <img src="img/гарантия_1.svg" alt="гарантия">
                    <p>Увеличенные сроки<br>гарантии на цистерны<br>собственного производства<br>до 18 месяцев</p>
                </div>
                <div class="item_prod">
                    <img src="img/цена_1.svg" alt="цена">
                    <p>Оптимальные цены без накруток<br>посредников за счет инновационных<br>разработок и собственного<br>производства техники</p>
                </div>
                <div class="item_prod">
                    <img src="img/сроки_1.svg" alt="сроки">
                    <p>Минимальные сроки<br>изготовления техники - от 3 до<br>10 дней с момента заключения<br>договора</p>
                </div>
            </div>
        </div>  
    </div>
</div>


@endsection