<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>フリマアプリ</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  @yield('css2')
</head>

<body>
  @if (Auth::check())
  <header class="header">
    <div id="menuContent">
      <nav class="header__nav">
        <ul class="header__nav-box">
          <li><a href="/user">COACHTECH</a></li>
          <li>
            <form class="form__search" action="{{ route('search') }}" method="post">
            @csrf
              <input type="text" name="keyword" placeholder="店舗名を入力してください">
              <button type="submit">検索</button>
            </form>
          </li>
          <li>
            <form class="form" action="/logout" method="post">
            @csrf
              <button class="header__nav-button">ログアウト</button>
            </form>
          </li>
          <li><a href="/mypage">マイページ</a></li>
          <li><a href="/sell">出品</a></li>
        </ul>
      </nav>
    </div>
  </header>
    @yield('content3')
  <main>
    <div id="mainContent">
    @yield('content2')
    </div>
  </main>
  @endif
</body>

</html>