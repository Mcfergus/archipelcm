<?php

use App\Models\Employment;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\EmploymentController;
use App\Http\Controllers\FrontCertificationController;
use App\Http\Controllers\FrontEmploymentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\ServicesPageController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\FrontPageController::class, 'index'])->name('index');
Route::get('/certifications', [FrontCertificationController::class, 'index']);
Route::get('certification/{id}', [FrontCertificationController::class, 'show']);
Route::get('/emplois', [FrontEmploymentController::class, 'index']);
Route::get('emplois/{id}', [FrontEmploymentController::class, 'show']);
Route::get('/about', [AboutPageController::class, 'index']);
Route::get('/services', [ServicesPageController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'auth', 'middleware'=>['auth','isAdmin']],
function(){
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::resource('certification', CertificationController::class);
    Route::resource('employment', EmploymentController::class);
});
 

