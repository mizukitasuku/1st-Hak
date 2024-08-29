<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>フリマアプリ</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  @yield('css1')
</head>

<body>
  <header class="header">
    <div id="menuContent">
      <nav class="header__nav">
        <ul class="header__nav-box">
          <li><a href="/">COACHTECH</a></li>
          <li>
            <form class="form__search" action="{{ route('search') }}" method="post">
            @csrf
              <input type="text" name="keyword" placeholder="店舗名を入力してください">
              <button type="submit">検索</button>
            </form>
          </li>
          <li><a href="/register">会員登録</a></li>
          <li><a href="/login">ログイン</a></li>
          <li><a href="/login">出品</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <div id="mainContent">
    @yield('content1')
    </div>
  </main>
</body>

</html>