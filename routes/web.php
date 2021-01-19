<?php

use App\Http\Controllers\FormThreeController;
use App\Http\Controllers\FormTwoController;
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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/course', function () {
    return view('course');
})->name('course');


Route::get('/form', function () {
    return view('forms.formOne.index');
})->name('from');

Route::get('/formtwo', function () {
    return view('forms.formTwo.index');
})->name('fromtwo');
//store formtwo
Route::post('/formtwo/store', [FormTwoController::class, 'store'])
    ->name('fromtwo.store');

Route::get('/formthree', function () {
    return view('forms.formThree.index');
})->name('fromthree');

//store formthree
Route::post('/formthree/store', [FormThreeController::class, 'store'])
    ->name('fromthree.store');



require __DIR__.'/auth.php';

//admin
Route::get('/admin/panel', function () {
    return view('admin.index');
})->middleware(['auth'])->name('admin.panel');


