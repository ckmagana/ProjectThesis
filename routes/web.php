   <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuestViewsController;
use App\Http\Controllers\SessionViews;
use App\Http\Controllers\SessionViewsController;

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
Route::get('/GuestViews/guestindex', [GuestViewsController::class, 'guestindex']);
Route::get('/GuestViews/guestaccountancy', [GuestViewsController::class, 'guestaccountancy']);
Route::get('/GuestViews/guestcomputer', [GuestViewsController::class, 'guestcomputer']);
Route::get('/GuestViews/guesteducation', [GuestViewsController::class, 'guesteducation']);
Route::get('/GuestViews/guesthotelmanagement', [GuestViewsController::class, 'guesthotelmanagement']);
Route::get('/GuestViews/guestnursing', [GuestViewsController::class, 'guestnursing']);
Route::get('/SessionViews/home', [SessionViewsController::class, 'home']);
Route::get('/SessionViews/accountancy', [SessionViewsController::class, 'accountancy']);
Route::get('/SessionViews/computer', [SessionViewsController::class, 'computer']);
Route::get('/SessionViews/education', [SessionViewsController::class, 'education']);
Route::get('/SessionViews/hotelmanagement', [SessionViewsController::class, 'hotelmanagement']);
Route::get('/SessionViews/nursing', [SessionViewsController::class, 'nursing']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
