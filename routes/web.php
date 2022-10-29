<?php

use App\Http\Controllers\ConfessionController;
use App\Http\Controllers\ConfessionListController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserController;
use App\Models\User;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/about', function() {
    return view('about');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/register', function() {
    return view('register');
});

Route::get('/profile', function() {
    return view('profile');
});

Route::get('/changeAvatar', function() {
    return view('changeAvatar');
});

Route::middleware('auth')->group(function(){
    Route::post('logout', LogoutController::class)->name('logout');
});

Route::get('/', [ConfessionListController::class, 'generalConfession']);

Route::get('home', [ConfessionListController::class, 'generalConfession']);
Route::get('mostComments', [ConfessionListController::class, 'generalConfession']);
Route::get('mostLiked', [ConfessionListController::class, 'mostLiked']);
Route::get('mostDisliked', [ConfessionListController::class, 'mostDisliked']);
Route::get('userConfession', [ConfessionListController::class, 'authConfession']);

Route::post('updateProfile', [UserController::class, 'updateProfile']);
Route::post('changePassword', [UserController::class, 'changePassword']);
Route::get('editProfile', [UserController::class, 'updateProfileView']);

Route::post('register', [RegisterController::class, 'store']);

Route::post('login', [LoginController::class, 'store']);

Route::get('confess', [ConfessionController::class, 'confessPage']);
Route::post('confess', [ConfessionController::class, 'addAnonymousConfession']);
