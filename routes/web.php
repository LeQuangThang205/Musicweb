<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ArtistController;
use App\Http\Controllers\Admin\SongController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\PlaylistController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;

// Route Auth (Đăng nhập, đăng ký)
Auth::routes();

// Trang chủ → Redirect đến trang login nếu chưa đăng nhập
Route::get('/', function () {
    return redirect('/login');
});

Route::get('user/home', [UserController::class, 'home'])->name('home');


Route::prefix('admin')->middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->group(function () {
    Route::get('/admin', [DashboardController::class, 'index'])->name('admin');
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('users', UserController::class);
    Route::resource('artists', ArtistController::class);
    Route::resource('songs', SongController::class);
    Route::resource('genres', GenreController::class);
    Route::resource('playlists', PlaylistController::class);
    

});
Route::middleware('auth')->group(function () {
    Route::post('/songs/{id}/favorite', [SongController::class, 'toggleFavorite'])->name('songs.favorite');
    Route::get('/favorites', [SongController::class, 'favoriteList'])->name('songs.favorite.list');
});

// Route login & logout
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


?>