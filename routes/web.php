<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Models\Game;
use App\Http\Controllers\ValorantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GoogleAuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PemainController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\BecomeController;
use App\Http\Controllers\UserDetailController;
use App\Http\Middleware\MustAdmin;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    $data = Game::all();
    return view('welcome', compact('data'));
});
// tampilan
Route::get('/about', [AboutController::class, 'about'])->middleware('auth');
Route::get('/Dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'must-admin']);
Route::get('/index', [IndexController::class, 'tampilan'])->middleware('auth');
Route::get('/game/{id}', [IndexController::class, 'game'])->middleware('auth');

// login & logout
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'authincating'])->middleware('guest');
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

// register
Route::get('/register', [AuthController::class, 'register']);
Route::post('/saveregister', [AuthController::class, 'saveregister'])->name('saveregister');                

// Login With Google
Route::get('auth/google', [GoogleAuthController::class, 'redirect'])->name('googlelogin');
Route::get('auth/google/callback', [GoogleAuthController::class, 'callbackGoogle'])->name('googlelogincallback');


// Halaman Game
Route::get('/valorant', [ValorantController::class, 'index'])->middleware('auth');


// Data Pemain


//data pemain
Route::get('/pemain',[PemainController::class, 'pemain'])->name('pemain')->middleware('auth', 'must-admin');
Route::get('/tambahpemain',[PemainController::class, 'tambahpemain'])->name('tambahpemain')->middleware('auth', 'must-admin');
Route::post('/insertpemain',[PemainController::class, 'insertpemain'])->name('insertpemain')->middleware('auth', 'must-admin');
Route::get('/tampilkandata/{id}',[PemainController::class, 'tampilkandata'])->name('tampilkandata')->middleware('auth', 'must-admin');
Route::post('/updatedata/{id}',[PemainController::class, 'updatedata'])->name('updatedata')->middleware('auth', 'must-admin');
Route::get('/deletedata/{id}',[PemainController::class, 'deletedata'])->name('deletedata')->middleware('auth', 'must-admin');

//data game 
Route::get('/game',[GameController::class,'games'])->name('games')->middleware('auth', 'must-admin');
Route::get('/tambahgame',[GameController::class,'tambahgames'])->name('tambahgames')->middleware('auth', 'must-admin');
Route::post('/insertgame',[GameController::class,'insertgames'])->name('insertgames')->middleware('auth', 'must-admin');
Route::get('/tampilgame/{id}',[GameController::class,'tampilgames'])->name('tampilgames')->middleware('auth', 'must-admin');
Route::post('/updategame/{id}',[GameController::class,'updategames'])->name('updategames')->middleware('auth', 'must-admin');
Route::get('/deletegame/{id}',[GameController::class,'deletegames'])->name('deletegames')->middleware('auth', 'must-admin');




Route::post('/setting/updateplayer/{id}', [UserController::class, 'updateplayer'])->middleware('auth')->name('updateplayer');
Route::get('/setting', [UserController::class, 'index'])->name('setting')->middleware('auth');
Route::post('/settings', [UserController::class, 'edit'])->middleware('auth');
Route::get('/userdetail/{id}', [UserDetailController::class, 'userdetail'])->middleware('auth');
Route::get('/become', [BecomeController::class, 'become']);












// Route::redirect('/pindah', '/about');
