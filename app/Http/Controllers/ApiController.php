<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function we_use_cookie()
    {
        // Запись в куки через фасад Cookie метод queue
        dd( \Illuminate\Support\Facades\Cookie::queue('we-use-cookie', 'yes', 525600));
    }
}
