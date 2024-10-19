@extends('layouts.app') {{-- 既存の app.blade.php レイアウトを使用 --}}

@section('body-class', 'logged-out') {{-- ログイン前の状態を示す --}}

@section('content')
    <div class="container">
        <h2>ログイン</h2>

        {{-- バリデーションエラーの表示 --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- ログインフォーム --}}
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
                <a href="{{ route('register.index') }}" style="display: inline-block; padding: 10px 20px; background-color: black; color: white; text-decoration: none; margin-bottom: 20px;">新規登録する</a>
            </div>

            <!-- パスワードリセットリンク -->
            <div>
                <a href="{{ route('password.forgot') }}" style="display: inline-block; padding: 10px 20px; background-color: black; color: white; text-decoration: none;">Pass忘れたら</a>
            </div>
        </form>
    </div>
@endsection