@section('title', 'Доработки и сервис')

@extends('layouts.main')

@section('content')

<div class="upgrade-and-service adu">

    <!-- Баннер оформления станицы -->
    <div class="adu_design_banner">
        <img src="/img/upgrade_and_service_design_banner.jpg" alt="">
    </div>

    <!-- Навигационная цепочка -->
    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Главная</a>
            <span>-</span>
            <span class="active">Доработки и сервис</span>
        </div>
    </div>

    <!-- Заголовок -->
    <div class="container">
        <div class="page-title">ДОРАБОТКИ и СЕРВИС</div>
    </div>

    <div class="description-section">
        <div class="container">
            <div class="text">Специалисты ГидроСпецАвто выполняют широкий перечень работ по дооборудованию автотехники. Услуги распространяются на новые и находящиеся в эксплуатации автомобили.<br> Предлагаем ознакомиться с перечнем проводимых нашими специалистами доработок.</div>
            <div class="download">
                <img src="/img/pdf-icon.svg" class="pdf-icon" alt="">
                <a href="{{ Storage::url('public/uploads/prices/price.pdf') }}" class="name" target="_blank">Скачать прайс на доработки и сервис</a>
            </div>
        </div>
    </div>

    <div class="upgrade-section">
        <div class="container">
            <div class="section-title">Доработки</div>
        </div>
    </div>

  
</div>

@endsection