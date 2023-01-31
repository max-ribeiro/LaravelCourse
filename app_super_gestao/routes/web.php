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

Route::get('/', [MainController::class, 'show'])->name('site.index');
Route::get('/about', [AboutUsController::class, 'show'])->name('site.about');
Route::get('/contact', [ContactController::class, 'show'])->name('site.contact');
Route::get('/login', function(){ return 'login' ; })->name('site.login');

Route::prefix('/app')->group(function() {
    Route::get('/clientes', function(){
        return 'clientes';
    })->name('app.clientes'); 
    Route::get('/fornecedores', function(){
        return 'fornecedores';
    })->name('app.fornecedores');
    Route::get('/produtos', function(){
        return 'produtos';
    })->name('app.produtos');
});

Route::get('/rota1', function() {
    echo "Rota 1";
})->name('site.rota1');

Route::get('/redirectto1', function() {
    return redirect()->route('site.rota1');
})->name('site.redirectto1');

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