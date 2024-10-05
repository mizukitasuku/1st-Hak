<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PasswordController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\ViewController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ログインページ
Route::get('/login', [LoginController::class, 'index'])->name('login');

// 新規登録ページ
Route::get('/register/index', [RegisterController::class, 'index'])->name('register.index');
Route::get('/register/complete', [RegisterController::class, 'complete'])->name('register.complete');

// パスワード関連
Route::get('/password/forgot', [PasswordController::class, 'forgot'])->name('password.forgot');
Route::get('/password/email', [PasswordController::class, 'email'])->name('password.email');

// ホームページ
Route::get('/home', [HomeController::class, 'index'])->name('home');

// ユーザー関連ページ
Route::get('/user/index', [UserController::class, 'index'])->name('user.index');
Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
Route::get('/user/edit/list', [UserController::class, 'editList'])->name('user.edit.list');
Route::get('/user/edit/email', [UserController::class, 'editEmail'])->name('user.edit.email');
Route::get('/user/edit/password', [UserController::class, 'editPassword'])->name('user.edit.password');
Route::get('/user/edit/photo', [UserController::class, 'editPhoto'])->name('user.edit.photo');
Route::get('/user/edit/complete', [UserController::class, 'editComplete'])->name('user.edit.complete');

// データ取り込み
Route::get('/import/index', [ImportController::class, 'index'])->name('import.index');
Route::get('/import/confirm', [ImportController::class, 'confirm'])->name('import.confirm');
Route::get('/import/complete', [ImportController::class, 'complete'])->name('import.complete');

// データ削除
Route::get('/delete/index', [DeleteController::class, 'index'])->name('delete.index');
Route::get('/delete/confirm', [DeleteController::class, 'confirm'])->name('delete.confirm');
Route::get('/delete/complete', [DeleteController::class, 'complete'])->name('delete.complete');

// データ編集
Route::get('/edit/index', [EditController::class, 'index'])->name('edit.index');
Route::get('/edit/list', [EditController::class, 'list'])->name('edit.list');
Route::get('/edit/confirm', [EditController::class, 'confirm'])->name('edit.confirm');
Route::get('/edit/complete', [EditController::class, 'complete'])->name('edit.complete');

// データ閲覧
Route::get('/view/index', [ViewController::class, 'index'])->name('view.index');
Route::get('/view/detail', [ViewController::class, 'detail'])->name('view.detail');