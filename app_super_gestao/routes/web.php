<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;


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

Route::get('/', [MainController::class, 'show']);

Route::get('/about', [AboutUsController::class, 'show']);

Route::get('/contact', [ContactController::class, 'show']);

Route::get('/contact/{nome}/{categoria_id}', function(
    string $nome = '', 
    int $categoria = 1
) {
    echo "Estamos aqui! {$nome}, {$categoria}";
})->where('categoria_id', '[0-9]+')
    ->where('nome', '[A-Za-z]+');