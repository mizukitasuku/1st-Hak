@extends('layouts.app')

@section('body-class', 'logged-out')

@section('content')
<form method="POST" action="{{ route('register.store') }}">
    @csrf
    <h2>新規登録</h2>
    <div>
        <label for="name">名前:ユーザーネーム</label>
        <input id="name" type="text" name="name" required autofocus>
    </div>

    <div>
        <label for="email">ID:メールアドレス</label>
        <input id="email" type="email" name="email" required>
    </div>

    <div>
        <label for="email_confirmation">確認用ID:メールアドレス</label>
        <input id="email_confirmation" type="email" name="email_confirmation" required>
    </div>

    <div>
        <label for="password">Pass:</label>
        <input id="password" type="password" name="password" required>
    </div>

    <div>
        <label for="password_confirmation">確認用Pass:</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>

    <button type="submit">新規登録する</button>
  </form>
  <a href="{{ route('login') }}">ログイン画面へ</a>
@endsection

@section('footer-content')
    <!-- ログインページでは特にフッターのカスタム内容はなし -->
@endsection