@section('title', $category->title)

@extends('layouts.main')

@section('content')

<div class="catalog">

    <!-- Хлебные крошки -->
    <div class="breadcrumbs">
        <div class="container">
            <a href="/">Главная</a>
            <span>  -  </span>
            <a href="/catalog">Каталог Техники</a>
            <span>  -  </span>
            <span class="active">{{ $category->title }}</span>
        </div>  
    </div>

    <!-- Форма поиска -->
    @include('search-form-section')

    <!-- Каталог техники -->
    <div class="equipment_catalog">
        <div class="container">
            <div class="page-title title">{{ $category->title }}</div>
            <div class="eq_item">
                <div class="flex-container">
                    <div class="eq_item__image">
                        <img src="{{ Storage::url($category->image->image) }}" alt="{{ $category->title }}">
                    </div>
                    <div class="eq_item__title hidden-mobile">{{ $category->title }}</div>
                    <a class="eq_item__title hidden-desktop" href="/catalog/category">{{ $category->title }}</a>
                </div>
                <!-- <div class="horizontal-line hidden-desktop"></div> -->
                <div class="eq_list">
                    <div class="item_list">
                        <div class="item_img1">
                            <img src="/img/avtocisterna.svg" alt="">
                        </div>
                        <div class="item_title1">
                            <div class="bullet"></div>
                            <a href="/catalog/subcategory" class="item_link1">Вакуумные автоцистерны</a>
                        </div>
                    </div>
                    <div class="item_list">
                        <div class="item_img1">
                            <img src="/img/avtocisterna.svg" alt="">
                        </div>
                        <div class="item_title1">
                            <div class="bullet"></div>
                            <a href="/catalog/subcategory" class="item_link1">Вакуумные машины</a>
                        </div>
                    </div>
                    <div class="item_list">
                        <div class="item_img1">
                            <img src="/img/avtocisterna.svg" alt="">
                        </div>
                        <div class="item_title1">
                            <div class="bullet"></div>
                            <a href="/catalog/subcategory" class="item_link1">Автоцистерны нефтепромысловые</a>
                        </div> 
                    </div>
                    <div class="item_list">
                        <div class="item_img1">
                            <img src="/img/avtocisterna.svg" alt="">
                        </div>
                        <div class="item_title1">
                            <div class="bullet"></div>
                            <a href="/catalog/subcategory" class="item_link1">Автоцистерны для воды</a>
                        </div>
                    </div>
                    <div class="item_list">
                        <div class="item_img1">
                            <img src="/img/avtocisterna.svg" alt="">
                        </div>
                        <div class="item_title1">
                            <div class="bullet"></div>
                            <a href="/catalog/subcategory" class="item_link1">Метаноловозы</a>
                        </div>
                    </div>
                    <div class="item_list">
                        <div class="item_img1">
                            <img src="/img/avtocisterna.svg" alt="">
                        </div>
                        <div class="item_title1">
                            <div class="bullet"></div>
                            <a href="/catalog/subcategory" class="item_link1">Пожарные</a>
                        </div>
                    </div>
                </div>
                <div class="horizontal-line hidden-desktop"></div>
            </div>
        </div>
    </div>
    
    <!-- Форма заполнения заявки -->
    @include('application-form-section')

    <!-- Секция с производственными характеристиками -->
    @include('advantages-section')

</div>


@endsection