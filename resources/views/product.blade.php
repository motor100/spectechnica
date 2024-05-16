@section('title', 'Карточка товара')

@extends('layouts.main')

@section('content')

<div class="product">

    <!-- Хлебные крошки -->
    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Главная</a>
            <span>  -  </span>
            <a href="/catalog">Каталог</a>
            <span>  -  </span>
            <a href="/catalog/category">Автоцистерны</a>
            <span>  -  </span>
            <a href="/catalog/subcategory">Автоцистерны нефтепромысловые термоизолированные</a>
            <span>  -  </span>
            <span class="active">АЦПТ 1612</span>
        </div>  
    </div>

    <!-- Форма поиска -->
    @include('search-form-section')

    <!-- Главная секция -->
    <div class="content-wrapper">
        <div class="container">
            <div class="page-title">Вакуумный агрегат АЦПТ 1612</div>
            <div class="product-content">
                <div class="section_card">
                    <div class="card_image">
                        <img src="/img/image_card_1.png" alt="img">
                    </div>
                    <div class="art_block">
                        <div class="art">Артикул: 4885-1 (S5)</div>
                        <div class="price">Цена по запросу</div>
                        <a href="#application-form-section" class="pr_btn orange_btn price_btn">ЗАПРОСИТЬ ЦЕНУ</a>
                        <button class="pr_btn lead_btn orange_btn request_btn js-callback-btn">ОФОРМИТЬ ЗАЯВКУ</button>
                        <div class="guarantee">Гарантия на навеску:<br>12 месяцев</div>
                        <div class="delivery">Доставка по РФ и СНГ</div>
                    </div>
                </div>
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
                    <div class="image_size_product">
                        <img src="/img/image_31.png" alt="img">
                    </div>
                </div>

                <div class="description_product">
                    <p>Автоцистерны для светлых ГСМ (бензовозы) АЦ-16 КАМАЗ-65115 обеспечивают транспортировку, хранение светлых нефтепродуктов. Плотность нефтепродукта не более 0,83 т/куб. м.
                    Каждая цистерна имеет «Свидетельство о калибровке».
                    Автоцистерны для светлых ГСМ могут быть изготовлены во всех климатических исполнениях.
                    По необходимости установим узел выдачи топлива (УВТ) сбоку либо сзади автоцистерны.
                    Составляющие цистерны:</p>
                    <ul class="list">
                        <li class="list-item">цистерны (чемодан, 09Г2С),</li>
                        <li class="list-item">насосная установка СЦЛ 00А или СВН-80А,</li>
                        <li class="list-item">противопожарное оборудование (огнетушители, ящик для песка).</li>
                    </ul>
                    <p>Технические особенности автоцистерны
                    Специальный автомобиль представляет собой цистерну, смонтированную на автошасси «КАМАЗ».
                    Цистерна — сварная конструкция из двух днищ и обечайки чемоданной формы. Корпус цистерны выполнен из листовой углеродистой стали 09Г2С и укреплен изнутри плосковыгнутыми жесткостями, которые дополнительно выполняют роль поперечных волнорезов. В цистерне имеется заливная труба. Сверху цистерны вварена горловина с люком-лазом (⌀ 500 мм), снизу — отстойник и фланец для присоединения к насосному узлу. Во избежание появления воздушных полостей при заполнении цистерны, установлены воздухоотводы — трубки, с концами выведенными в горловину.
                    Предусмотрен указатель уровня налива в виде смотрового стекла (клинкера) на горловине.
                    В крышку люка-лаза смонтированы клапаны: дыхательный и предохранительный — они отвечают за сообщение полостей секций цистерны с атмосферой.
                    На цистерне предусмотрена площадка для техобслуживания с антискользящей поверхностью в зоне горловины. Для комфортного подъема на площадку предустановлена лестница.
                    Основание цистерны выполнено из опор на надрамнике и предназначено для крепления к шасси. Опоры присоединяются к металлическим ложементам, которые крепятся к лонжеронам рамы автошасси стремянками. Для сохранения от смятия под опорами в ложементах расположены металлические стойки и ребра. Под опоры цистерны ставятся резиновые амортизаторы.
                    Электроподводка заложена в металлорукава, все электросоединения герметичны, приборы выполнены во взрывобезопасном исполнении.
                    На автоцистерне предусмотрен знак предупреждения «Огнеопасно». Сзади есть цепь походного заземления. 200 мм цепи должно касаться дорожного полотна.
                    Внимание! Конструкция цистерны предусматривает передвижение спецавтомобиля либо порожняком, либо с полностью наполненной цистерной. При частичной нагрузке велика вероятность опрокидывания из-за смещения центра тяжести.
                    </p>
                </div>
            </div>

            <!-- Вкладка Характеристики -->
            <div class="tab_content">
                <div class="specifications">
                    <div class="block_specifications">
                        <p>Тип двигателя</p>
                        <p>Четырехтактный дизель</p>
                    </div>
                    <div class="horizont_line"></div>
                    <div class="block_specifications">
                        <p>Количество и расположение цилиндров</p>
                        <p>8, V-образное</p>
                    </div>
                    <div class="horizont_line"></div>
                    <div class="block_specifications">
                        <p>Рабочий объём цилиндров, см3</p>
                        <p>11762</p>
                    </div>
                    <div class="horizont_line"></div>
                    <div class="block_specifications">
                        <p>Степень сжатия</p>
                        <p>17,6...18,4</p>
                    </div>
                    <div class="horizont_line"></div>
                    <div class="block_specifications">
                        <p>Максимальная мощность, кВт</p>
                        <p>221 (300 л.с.)</p>
                    </div>
                    <div class="horizont_line"></div>
                    <div class="block_specifications">
                        <p>Максимальный крутящий момент, Н*м</p>
                        <p>1275</p>
                    </div>
                    <div class="horizont_line"></div>
                    <div class="block_specifications">
                        <p>Топливо</p>
                        <p>Дизельное</p>
                    </div>
                    <div class="horizont_line"></div>
                    <div class="block_specifications">
                        <p>Тип двигателя</p>
                        <p>Четырехтактный дизель</p>
                    </div>

                    <table class="table">
                        <tr>
                            <td>Тип двигателя</td>
                            <td>Четырехтактный дизель</td>
                        </tr>
                        <tr>
                            <td>Количество и расположение цилиндров</td>
                            <td>8, V-образное</td>
                        </tr>
                    </table>
                </div>
                
            </div>

            <!-- Вкладка Доработки техники -->
            <div class="tab_content">
                <div class="upgrade">
                    <ul class="list">
                        <li class="list-item">Конструкция цистерны спроектирована таким образом, чтобы выдерживать необходимые нагрузки</li>
                        <li class="list-item">При изготовлении обечайки применяется автоматическая роботизированная дуговая сварка</li>
                        <li class="list-item">Цистерна имеет холоднокатаные донышки торосферической или полусферической формы</li>
                        <li class="list-item">Цистерна имеет дополнительную защиту от повреждений, вызываемых ударами сбоку или опрокидыванием</li>
                        <li class="list-item">Неразрушающий контроль сварных швов ультразвуковым методом выполняется аттестованным специалистом</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Форма заполнения заявки -->
    @include('application-form-section')

</div>


@endsection