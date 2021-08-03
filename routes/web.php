<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ProjectImagesController;
use App\Http\Controllers\SoundController;
use App\Http\Controllers\SpotController;
use App\Http\Controllers\appleController;
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ContactController;

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


Route::group([
    'middleware' => ['auth'],
    //'prefix' => 'admin'
], function () {
    Route::resources([
        'liquidbox' => AdminController::class,
        'home' => HomeController::class,
        'projects' => ProjectsController::class,
        'editimages' => ProjectImagesController::class,
        'sound' => SoundController::class,
        'spot' => SpotController::class,
        'apple' => appleController::class,
        'video' => VideoController::class,
        'contact' => ContactController::class,
        ]);
// Route::resources('eventspage', EventsController::class);

});

Route::redirect('/register', '/none');
Route::redirect('/dashboard', '/liquidbox');

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/privacy', [PagesController::class, 'privacy'])->name('privacy');
Route::get('/tandc', [PagesController::class, 'tandc'])->name('tandc');
Route::get('/bio', [PagesController::class, 'bio'])->name('bio');

Route::get('editHS/{id}', [HomeController::class, 'showData']);
Route::get('editHA/{id}', [HomeController::class, 'showAbout']);
Route::post('editSlider', [HomeController::class, 'update']);
Route::post('editHAbout', [HomeController::class, 'updateH']);
Route::get('deleteslider/{id}',[HomeController::class, 'destroy']);

Route::get('edit/{id}', [ProjectsController::class, 'showData']);
Route::post('editproject', [ProjectsController::class, 'update']);
Route::get('delete/{id}',[ProjectsController::class, 'destroy']);

Route::get('curated/{field}', [PagesController::class, 'showCurate'])->name('curated');
Route::get('curateddd/{field}', [PagesController::class, 'showCurates'])->name('curateddd');
Route::get('curatedd/{field2}', [PagesController::class, 'showCurated'])->name('curatedd');

Route::get('allimages/{id}', [ProjectImagesController::class, 'showImages']);
Route::get('allimages/editI/{id}', [ProjectImagesController::class, 'showData']);
Route::post('editImages', [ProjectImagesController::class, 'update']);
Route::get('allimages/deleteImages/{id}',[ProjectImagesController::class, 'destroy']);

Route::get('editSound/{id}', [SoundController::class, 'showData']);
Route::post('editsoundcloud', [SoundController::class, 'update']);
Route::get('deleteSpeaker/{id}',[SoundController::class, 'destroy']);

Route::get('editSpot/{id}', [SpotController::class, 'showData']);
Route::post('editSpotify', [SpotController::class, 'update']);
Route::get('deleteSpotify/{id}',[SpotController::class, 'destroy']);


Route::get('editApp/{id}', [appleController::class, 'showData']);
Route::post('editApple', [appleController::class, 'update']);
Route::get('deleteApple/{id}',[appleController::class, 'destroy']);

Route::get('editVid/{id}', [VideoController::class, 'showData']);
Route::post('editVideo', [VideoController::class, 'update']);
Route::get('deleteVideo/{id}',[VideoController::class, 'destroy']);


