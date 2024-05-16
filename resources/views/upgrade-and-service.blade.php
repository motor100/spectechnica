@section('title', 'Доработки и сервис')

@extends('layouts.main')

@section('content')

<div class="upgrade-and-service aduc">

    <!-- Баннер оформления станицы -->
    <div class="aduc_design_banner">
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
            <ul class="upgrade-list">
                <li class="upgrade-list__item">проектирование желаемой конструкции и модификации фургона;</li>
                <li class="upgrade-list__item">установка дополнительного оборудования: крана-манипулятора, коробки отбора мощности и лебедку, гидроборт, необходимые станки, оконные рамы, двери и другое;</li>
                <li class="upgrade-list__item">по желанию, внесем корректировки в обшивку и напольное покрытие фургона, изменим цвет полимерного покрытия;</li>
                <li class="upgrade-list__item">подготовка фургона для районов крайнего Севера: установка отопления топливопроводов и АКБ, установка предпускового подогрева, утепление фургона и кабины водителя изнутри и другое;</li>
                <li class="upgrade-list__item">удлинение шасси автомобиля;</li>
                <li class="upgrade-list__item">покраска фургона в любой цвет по схеме Ral;</li>
                <li class="upgrade-list__item">нанесение фирменной символики организации на разные элементы фургона: кабину водителя, сиденья, шторки для защиты от солнца и прочее.</li>
            </ul>
        </div>
    </div>

    <!-- Секция с партнерами компании -->
    @include('partners-section')
  
</div>

<script>
    const navbarItemActive = 1;
</script>

@endsection