<?php

use App\Mail\acolherse;
use App\Mail\acolherseMail;
use Illuminate\Support\Facades\Mail;
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


//Auth::routes();

//method get
Route::get('/index', [App\Http\Controllers\PrincipalController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\PrincipalController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\PrincipalController::class, 'index'])->name('home');
route::get('/conteudo',[App\Http\Controllers\ConteudoController::class, 'index'])->name('conteudo');
route::get('/contato',[App\Http\Controllers\ContatoController::class, 'index'])->name('contato');
//route::get('/sobre',[App\Http\Controllers\SobreController::class, 'index'])->name('sobre');
route::get('/psicoterapia',[App\Http\Controllers\PsicoterapiaController::class, 'index'])->name('psicoterapia');
route::get('/neuropsicologia',[App\Http\Controllers\NeuropsicologiaController::class, 'index'])->name('neuropsicologia');

//method post
route::post('/envioEmail',[App\Http\Controllers\ContatoController::class, 'envioEmail'])->name('email');

//rota para o envio de e-mail
/*route::get('/envioEmail', function(){
    //return new acolherseMail();
    Mail::to('psicologiaacolherse@gmail.com')->send(new acolherseMail());
})->name('email');*/
