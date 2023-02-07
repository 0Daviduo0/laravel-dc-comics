<?php

use Illuminate\Support\Facades\Route;

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

//rotta pagina principale
Route::get('/', [MainController :: class, 'homepage']) -> name('homepage');
Route :: get('/people/delete/{id}', [MainController::class, 'personDelete']) -> name('person.delete');