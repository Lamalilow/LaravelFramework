<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestValidationLogin;
use App\Http\Requests\RequestValidationRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function login()
    {
        return view('login');
    }

    /**
     *Фактическая авторизация юезра из POST запроса
     * @param RequestValidationLogin $request
     */
    public function loginPost(RequestValidationLogin $request)
    {
        if(Auth::attempt($request->validated())){
            $request->session()->regenerate();

            return redirect()->route('welcome');
        }
        return back()->with(['errorSuccess'=>'Неверный пароль или логин']);

    }

    /**
     * Открытие страницы регистрации
     * @param RequestValidationLogin $request
     */
    public function register()
    {
        return view('register');
    }

    /**
     * Операция регистрации
     * @param RequestValidationRegister $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function registerPost(RequestValidationRegister $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        User::create($data);
        return back()->with(['success'=>true]);
    }
}
