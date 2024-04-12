<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Главная страница
     */
    public function home(): View
    {
        return view('home');
    }

    /**
     * Каталог
     */
    public function catalog(): View
    {
        return view('catalog');
    }

    /**
     * Категория каталога
     */
    public function category(): View
    {
        return view('category');
    }

    /**
     * Карточка товара
     */
    public function product(): View
    {
        return view('product');
    }

    /**
     * В наличии
     */
    public function in_stock(): View
    {
        return view('in-stock');
    }

    /**
     * Доработки и сервис
     */
    public function upgrade_and_service(): View
    {
        return view('upgrade-and-service');
    }
    
    /**
     * Услуги
     */
    public function services(): View
    {
        return view('services');
    }
    
    /**
     * О компании
     */
    public function about(): View
    {
        return view('about');
    }

    /**
     * Контакты
     */
    public function contacts(): View
    {
        return view('contacts');
    }
    
    /**
     * Поиск
     */
    public function search(): View
    {
        return view('search');
    }
    
    /**
     * Видео о компании
     */
    public function videos(): View
    {
        return view('videos');
    }
    
    /**
     * Наши преимущества
     */
    public function advantages(): View
    {
        return view('advantages');
    }

    /**
     * Сертификаты
     */
    public function certificates(): View
    {
        return view('certificates');
    }
    
    /**
     * Производство
     */
    public function manufacture(): View
    {
        return view('manufacture');
    }
    
    /**
     * Спецпредложения
     */
    public function special_offer(): View
    {
        return view('special-offer');
    }
    
    /**
     * Политика конфиденциальности
     */
    public function privacy_policy(): View
    {
        return view('privacy-policy');
    }

}
