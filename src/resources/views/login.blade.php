@extends('layouts.app')

@section('body-class', 'logged-out')

@section('content')
<div style="text-align: center; padding: 20px; background-color: lightgreen;">
    <h2>ログインページ</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- メールアドレスフィールド -->
        <div style="margin-bottom: 10px;">
            <label for="email" style="display: block;">ID:メールアドレス</label>
            <input type="email" id="email" name="email" style="padding: 10px; width: 80%;" required autofocus />
        </div>

        <!-- パスワードフィールド -->
        <div style="margin-bottom: 20px;">
            <label for="password" style="display: block;">Pass:</label>
            <input type="password" id="password" name="password" style="padding: 10px; width: 80%;" required />
        </div>

        <!-- ログインボタン -->
        <div>
            <button type="submit" style="padding: 10px 20px; background-color: black; color: white; border: none; margin-bottom: 20px;">ログインする</button>
        </div>

        <!-- 新規登録ボタン -->
        <div>
            <a href="{{ route('register') }}" style="display: inline-block; padding: 10px 20px; background-color: black; color: white; text-decoration: none; margin-bottom: 20px;">新規登録する</a>
        </div>

        <!-- パスワードリセットリンク -->
        <div>
            <a href="{{ route('password.request') }}" style="display: inline-block; padding: 10px 20px; background-color: black; color: white; text-decoration: none;">Pass忘れたら</a>
        </div>
    </form>
</div>
@endsection