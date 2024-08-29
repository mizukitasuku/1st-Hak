<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>フリマアプリ</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  @yield('css3')
</head>

<body>
    <header class="header">
        <div id="menuContent">
            <nav class="header__nav">
                <ul class="header__nav-box">
                    <li><a href="/user">COACHTECH</a></li>
                </ul>
            </nav>
        </div>
    </header>
        @yield('content3')
    <main>
        <div id="mainContent">
        @yield('content4')
        </div>
    </main>
</body>

</html>