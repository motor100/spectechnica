@section('title', 'Услуги')

@extends('layouts.main')

@section('content')

<div class="service aduc">

    <!-- Баннер оформления станицы -->
    <div class="aduc_design_banner">
        <img src="/img/service_design_banner.jpg" alt="">
    </div>

    <!-- Навигационная цепочка -->
    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Главная</a>
            <span>-</span>
            <span class="active">Услуги</span>
        </div>
    </div>

    <!-- Заголовок -->
    <div class="container">
        <div class="page-title">УСЛУГИ</div>
    </div>

    <div class="description-section">
        <div class="container">
            <div class="text">Как уже неоднократно упомянуто, непосредственные участники технического прогресса могут быть превращены в посмешище, хотя само их существование приносит несомненную пользу обществу. Мы вынуждены отталкиваться от того, что высокое качество позиционных исследований обеспечивает широкому кругу (специалистов) участие в формировании приоретизации разума над эмоциями. Предварительные выводы неутешительны: постоянный количественный рост и сфера нашей активности является качественно новой ступенью форм воздействия.</div>
            <div class="download">
                <img src="/img/pdf-icon.svg" class="pdf-icon" alt="">
                <a href="{{ Storage::url('public/uploads/prices/price.pdf') }}" class="name" target="_blank">Скачать прайс услуги</a>
            </div>
        </div>
    </div>

    <!-- <div class="services-section">
        <div class="container">
            <div class="section-title">Услуги</div>
        </div>
    </div> -->
    
</div>

<script>
    const navbarItemActive = 2;
</script>

@endsection