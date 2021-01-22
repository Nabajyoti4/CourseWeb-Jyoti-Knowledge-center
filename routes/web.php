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
    $courses = \App\Models\Course::all();
    return view('welcome', compact('courses'));
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/course/{id}',[\App\Http\Controllers\CourseController::class, 'show'])->name('course');


/**
 * Form one
 */
Route::get('/form-three/{course}', [StudentFormOneController::class, 'index'])->name('from-three');

Route::post('/form-three/store', [StudentFormOneController::class, 'store'])->name('form-three.store');


/**
 * store formtwo
 * */
Route::post('/form-four/store', [FormTwoController::class, 'store'])
    ->name('from-four.store');

Route::get('/form-four/{course}', [FormTwoController::class, 'index'])->name('from-four');



/**
 * store formthree
 * */
Route::get('/form-two/{course}',[FormThreeController::class, 'index'])->name('from-two');
Route::post('/form-two/store', [FormThreeController::class, 'store'])
    ->name('from-two.store');


/**
 * formfour
 */
Route::get('/form-one/{course}',[\App\Http\Controllers\FormFourController::class, 'index'])->name('from-one');

Route::post('/form-one/store', [\App\Http\Controllers\FormFourController::class, 'store'])
    ->name('from-one.store');



require __DIR__.'/auth.php';

//admin
Route::get('/admin/panel', function () {
    return view('admin.index');
})->middleware(['auth'])->name('admin.panel');

Route::get('/admin/panel/formone', [\App\Http\Controllers\Admin\StudentFormOneController::class, 'index'])
    ->middleware(['auth'])->name('admin.formone.index');

Route::get('/admin/panel/formone/{id}', [\App\Http\Controllers\Admin\StudentFormOneController::class, 'show'])
    ->middleware(['auth'])->name('admin.formone.show');

// form two
Route::get('/admin/panel/formtwo', [\App\Http\Controllers\Admin\FormTwoController::class, 'index'])
    ->middleware(['auth'])->name('admin.formtwo.index');

Route::get('/admin/panel/formtwo/{id}', [\App\Http\Controllers\Admin\FormTwoController::class, 'show'])
    ->middleware(['auth'])->name('admin.formtwo.show');

// form three
Route::get('/admin/panel/formthree', [\App\Http\Controllers\Admin\FormThreeController::class, 'index'])
    ->middleware(['auth'])->name('admin.formthree.index');

Route::get('/admin/panel/formthree/{id}', [\App\Http\Controllers\Admin\FormThreeController::class, 'show'])
    ->middleware(['auth'])->name('admin.formthree.show');

// form four
Route::get('/admin/panel/formfour', [\App\Http\Controllers\Admin\FormFourController::class, 'index'])
    ->middleware(['auth'])->name('admin.formfour.index');
Route::get('/admin/panel/formfour/{id}', [\App\Http\Controllers\Admin\FormFourController::class, 'show'])
    ->middleware(['auth'])->name('admin.formfour.show');


//courses
Route::get('admin/courses/index', [\App\Http\Controllers\Admin\CourseController::class, 'index'])
    ->middleware(['auth'])->name('admin.courses.index');

Route::get('admin/courses/create', [\App\Http\Controllers\Admin\CourseController::class, 'create'])
    ->middleware(['auth'])->name('admin.courses.create');

Route::post('admin/courses/store', [\App\Http\Controllers\Admin\CourseController::class, 'store'])
    ->middleware(['auth'])->name('admin.courses.store');

Route::get('admin/courses/edit/{id}', [\App\Http\Controllers\Admin\CourseController::class, 'edit'])
    ->middleware(['auth'])->name('admin.courses.edit');

Route::patch('admin/courses/update/{id}', [\App\Http\Controllers\Admin\CourseController::class, 'update'])
    ->middleware(['auth'])->name('admin.courses.update');


//storage link
Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
