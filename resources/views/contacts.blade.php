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
        <div class="page-title">КОНТАКТЫ</div>
    </div>

    <div class="contacts-section">
        <div class="container">
            <div class="flex-container">
                <div class="contacts-item">
                    <img src="/img/contacts-clock.svg" class="contacts-item_image" alt="">
                </div>
                <div class="contacts-item">
                    <img src="/img/contacts-phone.svg" class="contacts-item_image" alt="">
                </div>
                <div class="contacts-item">
                    <img src="/img/contacts-email.svg" class="contacts-item_image" alt="">
                </div>
                <div class="contacts-item">
                    <img src="/img/contacts-geolocation.svg" class="contacts-item_image" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="map-section">
        <div class="container">
            <div class="section-title">Карта проезда</div>
            <div class="map"></div>
        </div>
    </div>
  
</div>

@endsection