<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAK</title>
    <style>
        /* スタイルの定義 */
        .header, .footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 10px;
        }
        .header a, .footer a {
            color: white;
            text-decoration: none;
        }
        .menu {
            display: inline-block;
            margin: 10px;
        }
        .logged-out {
            background-color: lightgreen;
        }
        .logged-in {
            background-color: lightblue;
        }
    </style>
</head>
<body class="@yield('body-class')">

    {{-- ヘッダー部分 --}}
    <header class="header">
        <h1>HAK</h1>
        @auth
            {{-- ログインしている場合のヘッダー --}}
            <nav class="nav">
                <ul>
                    <li><a href="{{ route('import.index') }}">データを取り込む</a></li>
                    <li><a href="{{ route('delete.index') }}">データの削除</a></li>
                    <li><a href="{{ route('view.index') }}">データを閲覧</a></li>
                    <li><a href="{{ route('edit.index') }}">データの編集</a></li>
                </ul>
            </nav>
            <div class="user-info">
                <img src="{{ asset('path_to_user_image') }}" alt="ユーザー写真" class="user-photo">
                <span><a href="{{ route('user.index') }}">ユーザー</a></span>
            </div>
        @endauth

        @guest
            {{-- ログインしていない場合のヘッダー --}}
            <p>ログインまたは新規登録をお願いします。</p>
        @endguest
    </header>

    {{-- メインコンテンツ --}}
    <main>
        @yield('content') {{-- メインコンテンツを挿入 --}}
        
        {{-- テスト用ログイン/ログアウトセクション --}}
        <section>
            <h1>テスト用ログイン/ログアウト</h1>
            @if(Auth::check())
                <p>現在ログイン中です。</p>
                <a href="{{ route('logout.test') }}" class="btn btn-danger">ログアウト</a>
            @else
                <p>現在ログアウト中です。</p>
                <a href="{{ route('login.test') }}" class="btn btn-primary">ログイン</a>
            @endif

            @if(session('status'))
                <div class="alert alert-info">
                    {{ session('status') }}
                </div>
            @endif
        </section>
    </main>

    {{-- フッター部分 --}}
    <footer class="footer">
        <h2>HAK</h2>
        @auth
            {{-- ログインしている場合のフッター --}}
            <div class="logo-footer">
                <span>HAK</span>
            </div>
            <div class="logout">
                <a href="{{ route('login.test') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    ログアウトする
                </a>
                <form id="logout-form" action="{{ route('login.test') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        @endauth

        @guest
            {{-- ログインしていない場合のフッター --}}
            <p>ログアウト中です。</p>
        @endguest
    </footer>

</body>
</html>
