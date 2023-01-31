<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\FornecedorController;


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

Route::get('/', [MainController::class, 'show'])->name('site.index');
Route::get('/about', [AboutUsController::class, 'show'])->name('site.about');

Route::get('/contact', [ContactController::class, 'show'])->name('site.contact');
Route::post('/contact',[ContactController::class, 'show'] )->name('site.contact');

Route::get('/login', function(){ return 'login' ; })->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){
        return 'clientes';
    })->name('app.clientes'); 
    Route::get('/fornecedores', [FornecedorController::class, 'show'])->name('app.fornecedores');
    Route::get('/produtos', function(){
        return 'produtos';
    })->name('app.produtos');
});

Route::get('/test/{p1}/{p2}', [TestController::class, 'test'])->name('site.test');

Route::fallback(function() {
    echo 'rota não existe';
});

// Route::redirect('/rota2', '/rota1');
/**
 * Route for test
 */
// Route::get('/contact/{nome}/{categoria_id}', function(
//     string $nome = '', 
//     int $categoria = 1
// ) {
//     echo "Estamos aqui! {$nome}, {$categoria}";
// })->where('categoria_id', '[0-9]+')
//     ->where('nome', '[A-Za-z]+');