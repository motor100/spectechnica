@section('title', 'Карточка товара')

@extends('layouts.main')

@section('content')

<div class="product">

    <!-- Хлебные крошки -->
    <div class="breadcrumb">
        <div class="container">
            <a href="/">Главная</a>
            <span>  -  </span>
            <a href="/catalog">Каталог</a>
            <span>  -  </span>
            <a href="#">Автоцистерны</a>
            <span>  -  </span>
            <a class="activ" href="#"> АЦПТ 1612</a>
        </div>  
    </div>

    <!-- Форма поиска -->
    @include('search-form-section')

    <!-- Главная секция -->
    <div class="container">
        <div class="page-title">Вакуумный агрегат АЦПТ 1612</div>
        <div class="section_card">
            <div class="row">
                <div class="col-md-8">
                    
                    <div class="card_image"><img src="/img/image_30.png" alt="img"></div>
                        <div class="section_block">
                        <div class="item_block"></div>
                        <div class="item_block"></div>
                        <div class="item_block"></div>
                        <div class="item_block"></div>
                        <div class="item_block"></div>
                        <div class="item_block"></div>
                        <div class="item_block"></div>
                        <div class="item_block"></div>
                        <div class="item_block"></div>
                        <div class="item_block"></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <p class="item_art">Артикул: 4885-1 (S5)</p>
                    <p class="item_yes">В НАЛИЧИИ</p>
                    <p class="price">Цена по запросу</p>
                    <a href="#" class="price_btn">ЗАПРОСИТЬ ЦЕНУ</a>
                    <a href="#" class="request_btn">ОФОРМИТЬ ЗАЯВКУ</a>
                    <p class="guarantee">Гарантия на навеску:<br>12 месяцев</p>
                    <p class="delivery">Доставка по РФ и СНГ</p>
                </div>
                 
            </div>
        </div>
    </div>

    <!-- Табы (вкладки) -->
    <div class="tab_buttons">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <button class="tab_btn active">Описание</button>
                </div>
                <div class="col-md-4">
                    <button class="tab_btn">Характеристики</button>
                </div>
                <div class="col-md-4">
                    <button class="tab_btn">Доработки техники</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Контент табов (вкладок) -->
    <div class="tab_contents">
        <div class="container">
    
            <!-- Вкладка Описание -->
            <div class="tab_content active">
                <div class="description">
                    <img src="/img/image_31.png" alt="img" class="image_size_product">
                </div>

                <div class="description_product">
                    <p>Автоцистерны для светлых ГСМ (бензовозы) АЦ-16 КАМАЗ-65115 обеспечивают транспортировку, хранение светлых нефтепродуктов. Плотность нефтепродукта не более 0,83 т/куб. м.
                    Каждая цистерна имеет «Свидетельство о калибровке».
                    Автоцистерны для светлых ГСМ могут быть изготовлены во всех климатических исполнениях.
                    По необходимости установим узел выдачи топлива (УВТ) сбоку либо сзади автоцистерны. 
                    Составляющие цистерны:</p>
                    <ul>
                        <li>цистерны (чемодан, 09Г2С),</li>
                        <li>насосная установка СЦЛ 00А или СВН-80А,</li>
                        <li>противопожарное оборудование (огнетушители, ящик для песка).</li>
                    </ul>
                    <p>Технические особенности автоцистерны
                    Специальный автомобиль представляет собой цистерну, смонтированную на автошасси «КАМАЗ».
                    Цистерна — сварная конструкция из двух днищ и обечайки чемоданной формы. Корпус цистерны выполнен из листовой углеродистой стали 09Г2С и укреплен изнутри плосковыгнутыми жесткостями, которые дополнительно выполняют роль поперечных волнорезов. В цистерне имеется заливная труба. Сверху цистерны вварена горловина с люком-лазом (⌀ 500 мм), снизу — отстойник и фланец для присоединения к насосному узлу. Во избежание появления воздушных полостей при заполнении цистерны, установлены воздухоотводы — трубки, с концами выведенными в горловину.
                    Предусмотрен указатель уровня налива в виде смотрового стекла (клинкера) на горловине.
                    В крышку люка-лаза смонтированы клапаны: дыхательный и предохранительный — они отвечают за сообщение полостей секций цистерны с атмосферой.
                    На цистерне предусмотрена площадка для техобслуживания с антискользящей поверхностью в зоне горловины. Для комфортного подъема на площадку предустановлена лестница.
                    Основание цистерны выполнено из опор на надрамнике и предназначено для крепления к шасси. Опоры присоединяются к металлическим ложементам, которые крепятся к лонжеронам рамы автошасси стремянками. Для сохранения от смятия под опорами в ложементах расположены металлические стойки и ребра. Под опоры цистерны ставятся резиновые амортизаторы.
                    Электроподводка заложена в металлорукава, все электросоединения герметичны, приборы выполнены во взрывобезопасном исполнении.
                    На автоцистерне предусмотрен знак предупреждения «Огнеопасно». Сзади есть цепь походного заземления. 200 мм цепи должно касаться дорожного полотна.
                    Внимание! Конструкция цистерны предусматривает передвижение спецавтомобиля либо порожняком, либо с полностью наполненной цистерной. При частичной нагрузке велика вероятность опрокидывания из-за смещения центра тяжести.
                    </p>
                </div>
            </div>

            <!-- Вкладка Характеристики -->
            <div class="tab_content">
                <div class="specifications">
                    <p>Тут таблица с характеристиками</p>
                </div>
            </div>

            <!-- Вкладка Доработки техники -->
            <div class="tab_content">
                <div class="upgrade">
                    <p>Тут текст с описанием доработок техники</p>
                </div>
            </div>
            
        </div>
    </div>
    
</div>


@endsection