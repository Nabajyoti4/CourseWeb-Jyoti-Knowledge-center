<?php

use App\Http\Controllers\FormThreeController;
use App\Http\Controllers\FormTwoController;
use App\Http\Controllers\StudentFormOneController;
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


/**
 * Form one
 */
Route::get('/form', function () {
    return view('forms.formOne.index');
})->name('from');

Route::post('/form/store', [StudentFormOneController::class, 'store'])->name('formone.store');


Route::get('/formtwo', function () {
    return view('forms.formTwo.index');
})->name('fromtwo');


/**
 * store formtwo
 * */
Route::post('/formtwo/store', [FormTwoController::class, 'store'])
    ->name('fromtwo.store');

Route::get('/formthree', function () {
    return view('forms.formThree.index');
})->name('fromthree');

/**
 * store formthree
 * */
Route::post('/formthree/store', [FormThreeController::class, 'store'])
    ->name('fromthree.store');


/**
 * formfour
 */
Route::get('/formfour', function () {
    return view('forms.formFour.index');
})->name('fromfour');

Route::post('/formfour/store', [\App\Http\Controllers\FormFourController::class, 'store'])
    ->name('fromfour.store');

require __DIR__.'/auth.php';

//admin
Route::get('/admin/panel', function () {
    return view('admin.index');
})->middleware(['auth'])->name('admin.panel');

Route::get('/admin/panel/formone', [\App\Http\Controllers\Admin\StudentFormOneController::class, 'index'])
    ->name('admin.formone.index');

Route::get('/admin/panel/formone/{id}', [\App\Http\Controllers\Admin\StudentFormOneController::class, 'show'])
    ->name('admin.formone.show');

