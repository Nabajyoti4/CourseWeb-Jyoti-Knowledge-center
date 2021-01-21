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

Route::get('/course/{id}',[\App\Http\Controllers\CourseController::class, 'show'])->name('course');


/**
 * Form one
 */
Route::get('/form-three', function () {
    return view('forms.formOne.index');
})->name('from-three');

Route::post('/form-three/store', [StudentFormOneController::class, 'store'])->name('form-three.store');





/**
 * store formtwo
 * */
Route::post('/form-four/store', [FormTwoController::class, 'store'])
    ->name('from-four.store');

Route::get('/form-four', function () {
    return view('forms.formTwo.index');
})->name('from-four');



/**
 * store formthree
 * */

Route::get('/form-two', function () {
    return view('forms.formThree.index');
})->name('from-two');

Route::post('/form-two/store', [FormThreeController::class, 'store'])
    ->name('from-two.store');


/**
 * formfour
 */
Route::get('/form-one', function () {
    return view('forms.formFour.index');
})->name('from-one');

Route::post('/form-one/store', [\App\Http\Controllers\FormFourController::class, 'store'])
    ->name('from-one.store');



require __DIR__.'/auth.php';

//admin
Route::get('/admin/panel', function () {
    return view('admin.index');
})->middleware(['auth'])->name('admin.panel');

Route::get('/admin/panel/formone', [\App\Http\Controllers\Admin\StudentFormOneController::class, 'index'])
    ->name('admin.formone.index');

Route::get('/admin/panel/formone/{id}', [\App\Http\Controllers\Admin\StudentFormOneController::class, 'show'])
    ->name('admin.formone.show');

// form two
Route::get('/admin/panel/formtwo', [\App\Http\Controllers\Admin\FormTwoController::class, 'index'])
    ->name('admin.formtwo.index');

Route::get('/admin/panel/formtwo/{id}', [\App\Http\Controllers\Admin\FormTwoController::class, 'show'])
    ->name('admin.formtwo.show');

// form three
Route::get('/admin/panel/formthree', [\App\Http\Controllers\Admin\FormThreeController::class, 'index'])
    ->name('admin.formthree.index');

Route::get('/admin/panel/formthree/{id}', [\App\Http\Controllers\Admin\FormThreeController::class, 'show'])
    ->name('admin.formthree.show');

// form four
Route::get('/admin/panel/formfour', [\App\Http\Controllers\Admin\FormFourController::class, 'index'])
    ->name('admin.formfour.index');
Route::get('/admin/panel/formfour/{id}', [\App\Http\Controllers\Admin\FormFourController::class, 'show'])
    ->name('admin.formfour.show');
