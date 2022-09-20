<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'index'])->name('welcome');

Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/login',[UserController::class,'loginPost']);

Route::get('/register',[UserController::class,'register'])->name('register');
Route::post('/register',[UserController::class,'registerPost']);

Route::middleware('auth')->group(function (){
    Route::get('/static-manager', [MainController::class, 'staticManager'])->name('staticManager');

    Route::get('/users', [UserController::class, 'users'])->name('users');
    Route::get('logout', [UserController::class, 'logout'])->name('logout');
});







Route::get('/infoname/{name}', function ($name){
    return ('Имя - '.$name);
})-> where('name', '[A-Za-z]+');

Route::get('/infoage/{age}', function ($age){
    return ('Возраст - '.$age);
}) -> where('age', '[0-9]{3}||[0-9]{2}||[0-9]{1}+');

Route::get('/working/{name}/{cheto}', function ($name, $cheto) {
    return $name . "<br>" . $cheto;
});

Route::get('/pizza', function (){
    return ('Пицца с моцареллой ');
});
Route::get('/country', function ($age){
    return ('Страна Россия великая держава');
});
Route::get('/friends', function (){
    return ('Мой друганы - Зилибобка и Бёбля');
});

Route::get('/pol', function (){
    return view('index');
});
Route::get('/book', function (){
    $text = '"Все ужасы можно пережить, пока ты просто покоряешься своей судьбе, но попробуй размышлять о них – и они убьют тебя (На западном фронте без перемен, Э. М. Ремарк)"';
    return view('two', compact('text'));
});
Route::get('/words', function (){
    return view('three');
});






