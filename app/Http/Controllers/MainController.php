<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    /**
     * Главная страница
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Вывод данных в представлении
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function staticManager()
    {
        $name = "Сайт работотехники";
        $address = "г. Челябинсск, Энтузиастов 17";
        $time = "с 9:00 до 18:00";

        return view('staticManager', ["nameSite" => $name, "address" => $address, "time" => $time]);
    }
}
