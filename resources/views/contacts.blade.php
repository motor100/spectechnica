@section('title', 'Контакты')

@extends('layouts.main')

@section('content')

<div class="contacts adu">

    <!-- Баннер оформления станицы -->
    <div class="adu_design_banner">
        <img src="/img/contacts_design_banner.jpg" alt="">
    </div>

    <!-- Навигационная цепочка -->
    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Главная</a>
            <span>-</span>
            <span class="active">Контакты</span>
        </div>
    </div>

    <!-- Заголовок -->
    <div class="container">
        <div class="page-title">КОНТАКТНАЯ ИНФОРМАЦИЯ</div>
    </div>

    <div class="contacts-section">
        <div class="container">
            <div class="sale-office">Отдел продаж</div>
            <div class="row">
                <div class="col-md-3">
                    <div class="contacts-item">
                        <div class="contacts-item__image">
                            <img src="/img/contacts-clock.svg" class="contacts-item_image" alt="">
                        </div>
                        <div class="contacts-item__text">РЕЖИМ РАБОТЫ:<br>с 9-00 до 18-00<br>выходные:<br>суббота, воскресенье</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contacts-item">
                        <div class="contacts-item__image">
                            <img src="/img/contacts-phone.svg" class="contacts-item_image" alt="">
                        </div>
                        <div class="contacts-item__text">+7 (982) 292-88-79</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contacts-item">
                        <div class="contacts-item__image">
                            <img src="/img/contacts-email.svg" class="contacts-item_image" alt="">
                        </div>
                        <div class="contacts-item__text">zakaz@gidravlic.com</div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="contacts-item">
                        <div class="contacts-item__image">
                            <img src="/img/contacts-geolocation.svg" class="contacts-item_image" alt="">
                        </div>
                        <div class="contacts-item__text">Челябинская область<br>г. Миасс<br>Тургоякское шоссе, 5/9А<br>офис 104</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map-section">
        <div class="container">
            <div class="section-title">Карта проезда</div>
            <div class="map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aacd74efbff533d7ec22ecf2b646d7fbcf5ea179505e342c8dbd67af0e3ac1202&amp;width=100%25&amp;height=100%25&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
    </div>

    <!-- Секция наши преимущества -->
    @include('advantages-section')

    <!-- Секция с партнерами компании -->
    @include('partners-section')
  
</div>

<script>
    const navbarItemActive = 4;
</script>

@endsection