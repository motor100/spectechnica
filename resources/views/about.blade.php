@section('title', 'О компании')

@extends('layouts.main')

@section('content')

<div class="about">

    <!-- Баннер оформления станицы -->
    <div class="design_banner">
        <img src="/img/design_banner.png" alt="img">
    </div>

    <!-- Навигационная цепочка -->
    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Главная</a>
            <span>-</span>
            <a class="active" href="/about">О компании</a>
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
                <img src="/img/video_company.png" alt="video">
            </div>
            <div class="description_txt">
                <p>ГидроСпецАвто - это завод с современным оборудованием и передовыми технологиями.
                    Завод представляет собой крупный машиностроительный комплекс
                    с законченным производственным циклом от заготовки до выпуска готовой продукции.
                    <br>Помимо производства спецтехники, мы являемся дилером российских автогигантов,
                    занимаемся комплексным сервисным обслуживанием и снабжением сертифицированными запчастями.
                </p>
            </div>
        </div>
    </div>

    <!-- Секция наши преимущества -->
    <div id="our_advantages_section" class="our_advantages_section">
        <div class="container">
            <p class="title">НАШИ ПРЕИМУЩЕСТВА</p>
            <p>Почему предприятия выбирают нас:</p>
            <ul>
                <li>Мы производители, а это значит Низкая Цена без комиссионных наценок дилеров, перекупов и прочих посредников</li>
                <li>Льготная доставка в регионы собственным автотранспортом (тралы, фуры)</li>
                <li>Заводская Гарантия на новую технику 12 мес/ 1200 м.ч</li>
                <li>Заводская Гарантия на технику после капитального ремонта 6 мес/ 500 м.</li>
                <li>Работаем с лояльными лизинговыми компаниями и поможем выбрать оптимальный для Вас вариант. Лизинг за 4 дня!</li>
                <li>Trade-in: принимаем Вашу технику в зачет</li>
                <li>Производственные мощности 15 единиц в месяц различных модификаций</li>
                <li>Гарантийное и сервисное обслуживание в любой точке РФ и СНГ</li>
            </ul>
            <p>Преимущества нашего завода:</p>
            <ul>
                <li>Вся продукция сертифицирована и состоит в Минпромторге России;</li>
                <li>Высокое качество продукции. При этом стоимость
                    нашей новой спецтехники и спецтехники после капитального ремонта в разы доступнее зарубежных аналогов;</li>
                <li>Штат опытных сотрудников. Начиная с линии сборки и заканчивая отделом продаж;</li>
                <li>Работаем без праздников и выходных;</li>
                <li>Помощь в доставке спецтехники по регионам России и стран СНГ собственным автопарком — это тралы и фуры;</li>
                <li>Гибкая система скидок постоянным клиентам;</li>
                <li>Уменьшение налога на прибыль за счёт переноса лизинговых платежей на расходы;</li>
                <li>Оперативное реагирование по всем техническим вопросам в период гарантийного и послегарантийного обслуживания;</li>
                <li>Оперативное оформление всех документов и полное юридическое сопровождение сделки.</li>
            </ul>
            <p>Преимущества спецтехники нашего производства:</p>
            <ul>
                <li>Высокие тяговые характеристики;</li>
                <li>Энергонасыщенность;</li>
                <li>Сбалансированная подвеска;</li>
                <li>Сертифицированная кабина;</li>
                <li>Привлекательный дизайн и продуманная эргономика;</li>
                <li>Наиболее оптимальное соотношение цены и качества;</li>
                <li>Доступность и дешевизна запасных частей;</li>
                <li>Комфортные условия работы оператора.</li>
            </ul>
        </div>
    </div>

    <!-- Секция с услугами компании -->
    <div class="service-section">

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="item_s">
                        <div class="svg_item_image"><img src="/img/s_1.png" alt="#"></div>
                        <p>Высокое качество<br>продукции по<br>доступным ценам</p>  
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item_s">
                        <div class="svg_item_image"><img src="/img/s_2.png"  alt="#"></div>
                        <p>Штат опытных<br>сотрудников</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item_s">
                        <div class="svg_item_image"><img src="/img/s_3.png" alt="#"></div>
                        <p>Trade-in: принимаем<br>Вашу технику в зачет</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="item_s">
                        <div class="svg_item_image"><img src="/img/s_4.png" alt="#"></div>
                        <p>Льготная доставка в<br>регионы собственным<br>автотранспортом</p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Секция с сертификатами компании -->
    <div id="certificates_section" class="certificates_section">

        <div class="title_background">
            <div class="container"><p>СЕРТИФИКАТЫ</p></div>   
        </div>
        <div class="section_background">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="item_sert">
                            <img src="/img/sertificat.png" alt="сертификат">
                            <p>Сертификаты качества</p>  
                        </div> 
                    </div>
                    <div class="col-md-3">
                        <div class="item_sert">
                            <img src="/img/sertificat2.png" alt="сертификат">
                            <p>Дилерские свидетельства</p>  
                        </div> 
                    </div>
                    <div class="col-md-3">
                        <div class="item_sert">
                            <img src="/img/sertificat3.png" alt="сертификат">
                            <p>Сертификат соответствия ISO 9001</p>  
                        </div> 
                    </div>
                    <div class="col-md-3">
                        <div class="item_sert">
                            <img src="/img/sertificat_4.png" alt="сертификат">
                            <p>Сертификат соответствия<br>и ОТТС</p>  
                        </div> 
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Секция с партнерами компании -->
    <div class="partners-section">
        <div class="container">
            <p class="title">ПАРТНЕРЫ</p>  
        </div>
        <img src="/img/partners.png" alt="партнеры"> 
    </div>

    <!-- Секция с производством компании -->
    <div id="production_section" class="production_section">
        <div class="title_background">
            <div class="container"><p>ПРОИЗВОДСТВО</p></div> 
        </div>
        <div class="list_prod">
            <div class="container">
                <ul>
                    <li>Плазменная и газовая резка металла (резка на МТР с источником PowerMax125, толщиной до 30 мм).</li>
                    <li>Гальваника и анодирование. </li>
                    <li>Вальцовка (вальцовка обечайки диаметром до 3000 мм, толщиной до 12 мм).</li>
                    <li>Гибка металла (гибка углов сложной геометрии до 12 мм толщиной на ширину 2500 мм).</li>
                    <li>Токарные работы (токарные работы любой сложности).</li>
                    <li>Фрезерные работы.</li>
                    <li>Рубка металла (рубка листового металла толщиной до 6 мм толщиной на ширину до 2500 мм).</li>
                    <li>Изготовление металлоконструкций (любой конфигурации).</li>
                    <li>Малая кузница.</li>
                </ul> 
            </div>
            
        </div>

    </div>

    <!-- Секция наше производство -->
    <div class="our_production">
        <div class="container">
            <div class="title-wrapper">
                <div class="title">НАШЕ ПРОИЗВОДСТВО</div>
                <div class="left_arrow">
                    <img src="/img/left_white.svg" alt="">
                </div>
                <div class="right_arrow">
                    <img src="/img/right_blue.svg" alt="">
                </div>
            </div>
            <div class="photo_collage">
                <img src="/img/photo_clg.png" alt="фото">
            </div>          
        </div>
    </div>

    <!-- Секция с производственными характеристиками -->
    @include('advantages-section')

</div>

@endsection