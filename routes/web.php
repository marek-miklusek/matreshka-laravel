<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PagesController::class, 'home']);
Route::get('O salóne', [PagesController::class, 'about']);
Route::get('Galéria', [PagesController::class, 'gallery']);
Route::get('Kontakt', [PagesController::class, 'contact']);
Route::get('Cenník', [PagesController::class, 'price_list']);

Route::post('Kontakt', [PagesController::class, 'store']);

// Example how to use next segments in URI (segment can be optional{slug?})
// plus regular expression
// Route::get('whatever/{id}/{slug}', [PagesController::class, 'whatever'])
//     // Condition with regular expression, only numbers
//     ->where('id', '[0-9]+')
//     // Condition with regular expression, only small letters and hyphens
//     ->where('slug', '[a-z-]+');



