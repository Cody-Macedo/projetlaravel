<?php

use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/{lang}', function ($locale) {
    if (! in_array($locale, ['en', 'fr'])) {
        abort(400);
    }
    Config::set('database.default', $locale);
    App::setlocale($locale);
    return view('/');
});

Route::get('/form', function () {
    return view('form');
});
//method post et get
//formulaire
Route::match(['post', 'get'], '/form/formulaire', [TestController::class, "form"]);

Route::match(['post', 'get'], '/form/calcul', [TestController::class, "calcul"]);



Route::get('/form/calcul/{nb1?}/{nb2?}', function ($nb1 = 0, $nb2 = 0) {
    return view('calcul', ["nb1" => $nb1, "nb2" => $nb2]);
})->where(["nb1" => "[0-9]+", "nb2" => "\d+"]);


