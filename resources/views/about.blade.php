@section('title', 'О компании')

@extends('layouts.main')

@section('content')

<div class="about aduc">

    <!-- Баннер оформления станицы -->
    <div class="aduc_design_banner">
        <img src="/img/about_design_banner.jpg" alt="">
    </div>

    <!-- Навигационная цепочка -->
    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Главная</a>
            <span>-</span>
            <span class="active">О компании</span>
        </div>
    </div>

    <!-- Заголовок -->
    <div class="container">
        <div class="page-title">О КОМПАНИИ</div>
    </div>

    <!-- Секция с видео -->
    <div id="video_content_section" class="video_content_section">
        <div class="container">
            <div class="video">
                <img src="/img/video-cover.jpg" alt="video">
            </div>
            <div class="description_text">
                <p>ГидроСпецАвто - это завод с современным оборудованием и передовыми технологиями. Завод представляет собой крупный машиностроительный комплекс с законченным производственным циклом от заготовки до выпуска готовой продукции.</p>
                <p>Помимо производства спецтехники, мы являемся дилером российских автогигантов, занимаемся комплексным сервисным обслуживанием и снабжением сертифицированными запчастями.</p>
            </div>
        </div>
    </div>

    <!-- Секция наши преимущества -->
    <div id="our_advantages_section" class="our_advantages_section">
        <div class="container">
            <div class="section-title">НАШИ ПРЕИМУЩЕСТВА</div>
            <div class="subtitle">Почему предприятия выбирают нас:</div>
            <ul class="list">
                <li class="list-item">Мы производители, а это значит Низкая Цена без комиссионных наценок дилеров, перекупов и прочих посредников</li>
                <li class="list-item">Льготная доставка в регионы собственным автотранспортом (тралы, фуры)</li>
                <li class="list-item">Заводская Гарантия на новую технику 12 мес/ 1200 м.ч</li>
                <li class="list-item">Заводская Гарантия на технику после капитального ремонта 6 мес/ 500 м.</li>
                <li class="list-item">Работаем с лояльными лизинговыми компаниями и поможем выбрать оптимальный для Вас вариант. Лизинг за 4 дня!</li>
                <li class="list-item">Trade-in: принимаем Вашу технику в зачет</li>
                <li class="list-item">Производственные мощности 15 единиц в месяц различных модификаций</li>
                <li class="list-item">Гарантийное и сервисное обслуживание в любой точке РФ и СНГ</li>
            </ul>
            <div class="subtitle">Преимущества нашего завода:</div>
            <ul class="list">
                <li class="list-item">Вся продукция сертифицирована и состоит в Минпромторге России;</li>
                <li class="list-item">Высокое качество продукции. При этом стоимость нашей новой спецтехники и спецтехники после капитального ремонта в разы доступнее зарубежных аналогов;</li>
                <li class="list-item">Штат опытных сотрудников. Начиная с линии сборки и заканчивая отделом продаж;</li>
                <li class="list-item">Работаем без праздников и выходных;</li>
                <li class="list-item">Помощь в доставке спецтехники по регионам России и стран СНГ собственным автопарком — это тралы и фуры;</li>
                <li class="list-item">Гибкая система скидок постоянным клиентам;</li>
                <li class="list-item">Уменьшение налога на прибыль за счёт переноса лизинговых платежей на расходы;</li>
                <li class="list-item">Оперативное реагирование по всем техническим вопросам в период гарантийного и послегарантийного обслуживания;</li>
                <li class="list-item">Оперативное оформление всех документов и полное юридическое сопровождение сделки.</li>
            </ul>
            <div class="subtitle">Преимущества спецтехники нашего производства:</div>
            <ul class="list">
                <li class="list-item">Высокие тяговые характеристики;</li>
                <li class="list-item">Энергонасыщенность;</li>
                <li class="list-item">Сбалансированная подвеска;</li>
                <li class="list-item">Сертифицированная кабина;</li>
                <li class="list-item">Привлекательный дизайн и продуманная эргономика;</li>
                <li class="list-item">Наиболее оптимальное соотношение цены и качества;</li>
                <li class="list-item">Доступность и дешевизна запасных частей;</li>
                <li class="list-item">Комфортные условия работы оператора.</li>
            </ul>
        </div>
    </div>

    <!-- Секция с услугами компании -->
    <div class="service-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="item">
                        <div class="item_image">
                            <img src="/img/s_1.png" alt="#">
                        </div>
                        <div class="item_title">Высокое качество<br>продукции по<br>доступным ценам</div>  
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="item">
                        <div class="item_image">
                            <img src="/img/s_2.png"  alt="#">
                        </div>
                        <div class="item_title">Штат опытных<br>сотрудников</div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="item">
                        <div class="item_image">
                            <img src="/img/s_3.png" alt="#">
                        </div>
                        <div class="item_title">Trade-in: принимаем<br>Вашу технику в зачет</div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="item">
                        <div class="item_image">
                            <img src="/img/s_4.png" alt="#">
                        </div>
                        <div class="item_title">Льготная доставка в<br>регионы собственным<br>автотранспортом</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Секция с сертификатами компании -->
    <div id="certificates_section" class="certificates_section">
        <div class="orange_title_background">
            <div class="container">
                <div class="orange_title">СЕРТИФИКАТЫ</div>
            </div>   
        </div>
        <div class="section_background">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="item">
                            <div class="item_image">
                                <img src="/img/sertificat.png" alt="">
                            </div>
                            <div class="item_title">Сертификаты качества</div>  
                        </div> 
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="item">
                            <div class="item_image">
                                <img src="/img/sertificat2.png" alt="">
                            </div>
                            <div class="item_title">Дилерские свидетельства</div>  
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="item">
                            <div class="item_image">
                                <img src="/img/sertificat3.png" alt="">
                            </div>
                            <div class="item_title">Сертификат соответствия ISO 9001</div>  
                        </div> 
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="item">
                            <div class="item_image">
                                <img src="/img/sertificat_4.png" alt="">
                            </div>
                            <div class="item_title">Сертификат соответствия<br>и ОТТС</div>  
                        </div> 
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Секция с партнерами компании -->
    @include('partners-section')

    <!-- Секция с производством компании -->
    <div id="production_section" class="production_section">
        <div class="orange_title_background">
            <div class="container">
                <div class="orange_title">ПРОИЗВОДСТВО</div>
            </div> 
        </div>
        <div class="list_prod">
            <div class="container">
                <ul class="list">
                    <li class="list-item">Плазменная и газовая резка металла (резка на МТР с источником PowerMax125, толщиной до 30 мм).</li>
                    <li class="list-item">Гальваника и анодирование.</li>
                    <li class="list-item">Вальцовка (вальцовка обечайки диаметром до 3000 мм, толщиной до 12 мм).</li>
                    <li class="list-item">Гибка металла (гибка углов сложной геометрии до 12 мм толщиной на ширину 2500 мм).</li>
                    <li class="list-item">Токарные работы (токарные работы любой сложности).</li>
                    <li class="list-item">Фрезерные работы.</li>
                    <li class="list-item">Рубка металла (рубка листового металла толщиной до 6 мм толщиной на ширину до 2500 мм).</li>
                    <li class="list-item">Изготовление металлоконструкций (любой конфигурации).</li>
                    <li class="list-item">Малая кузница.</li>
                </ul> 
            </div>
        </div>
    </div>

    <!-- Секция наше производство -->
    <div class="our_production_section">
        <div class="container">
            <div class="title-wrapper">
                <div class="title">НАШЕ ПРОИЗВОДСТВО</div>
                <div class="left_arrow hidden-mobile">
                    <img src="/img/left_white.svg" alt="">
                </div>
                <div class="right_arrow hidden-mobile">
                    <img src="/img/right_blue.svg" alt="">
                </div>
            </div>
            <div class="videos videos-temp">
                <div class="row">
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <img src="/img/video-cover.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <img src="/img/video-cover.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="video-item">
                            <img src="/img/video-cover.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 d-lg-block d-none">
                        <div class="video-item">
                            <img src="/img/video-cover.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Секция наши преимущества -->
    @include('advantages-section')

</div>

<script>
    const navbarItemActive = 3;
</script>

@endsection