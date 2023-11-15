<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
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

Route::get('/', function () {
    return file_get_contents(resource_path('views/index.blade.php'));
});

Route::get('/book', function () {
    return file_get_contents(resource_path('views/book.blade.php'));
});

Route::get('/service', function () {
    return file_get_contents(resource_path('views/service.php'));
});

Route::get('/menu', function () {
    return file_get_contents(resource_path('views/menu.php'));
});

Route::get('/bookings', [BookingController::class, 'index']);

Route::get('/register', function(){
    return 'thank you';
});