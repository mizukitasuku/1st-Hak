<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    HomeController, UserController, ImportController, DeleteController, EditController, ViewController,RegisterController,PasswordController
};
use Illuminate\Support\Facades\Auth;
use App\Models\User;


Route::middleware(['auth'])->group(function () {
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
});



// 新規登録関連
Route::get('/register/index', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

// 新規登録完了ページ
Route::get('/register/complete', [RegisterController::class, 'complete'])->name('register.complete');  // 完了画面

// パスワード忘れ関連
Route::get('/password/forgot', [PasswordController::class, 'forgot'])->name('password.forgot'); // パスワード忘れフォーム
Route::get('/password/email', [PasswordController::class, 'email'])->name('password.email-2'); // パスワードリセットリンク表示（オプション）



// テスト用のログイン/ログアウトルート
Route::get('/login-test', function () {
    $user = User::find(1); // テスト用ダミーユーザー
    Auth::login($user);
    return redirect()->back()->with('status', 'ログインしました');
})->name('login.test');

Route::get('/logout-test', function () {
    Auth::logout();
    return redirect()->back()->with('status', 'ログアウトしました');
})->name('logout.test');