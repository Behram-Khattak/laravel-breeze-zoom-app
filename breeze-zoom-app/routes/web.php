<?php

use App\Http\Controllers\Zoom\ZoomMeetingController;
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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})
->middleware('auth')
->name('dashboard');

Route::prefix('meetings')
->middleware('auth')
->group(function () {

    Route::controller(ZoomMeetingController::class)->group(function () {

        Route::get('/meetings', 'index')
        ->name('meetings.index');

        Route::get('/meetings/{id}', 'show')
        ->name('meetings.show');

        Route::get('/meetings_store', 'store')
        ->name('meetings.store');

        Route::put('/meetings_update', 'update')
        ->name('meetings.update');

    });

});

require __DIR__.'/auth.php';
