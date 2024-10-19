<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    // 新規登録ページを表示するためのメソッド
    public function index()
    {
        return view('register.register_index'); // 新規登録のビューを表示
    }

    public function complete()
    {
        return view('register.register_complete'); // 新規登録完了を表示
    }

    // storeメソッドはユーザー登録を処理
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        // ユーザーを作成して保存
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // 登録後にホームページにリダイレクト
        return redirect()->route('home');
    }
}