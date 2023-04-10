<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

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

Route::redirect('/', '/movie');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/movie', [MovieController::class, 'indexPopular']);
Route::post('/movie', [MovieController::class, 'paginationPopular']);

Route::get('/movie/now-playing', [MovieController::class, 'indexNowPlaying']);
Route::post('/movie/now-playing', [MovieController::class, 'paginationNowPlaying']);

Route::get('/movie/upcoming', [MovieController::class, 'indexUpcoming']);
Route::post('/movie/upcoming', [MovieController::class, 'paginationUpcoming']);

Route::get('/movie/top-rated', [MovieController::class, 'indexTopRated']);
Route::post('/movie/top-rated', [MovieController::class, 'paginationTopRated']);


require __DIR__ . '/auth.php';
