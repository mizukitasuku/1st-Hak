@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h2>ホームページ</h2>
                    <div class="menu-bar">
                        <span>データを取り込む</span> |
                        <span>ユーザーデータの削除</span> |
                        <span>データを閲覧</span> |
                        <span>データの編集</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="main-buttons">
                        <button class="btn btn-primary mb-3 w-100">データを取り込む</button>
                        <button class="btn btn-primary mb-3 w-100">データの削除</button>
                        <button class="btn btn-primary mb-3 w-100">データを閲覧</button>
                        <button class="btn btn-primary mb-3 w-100">データの編集</button>
                    </div>
                    <div class="user-options">
                        <div class="user-info-change mb-3">
                            <a href="#" class="btn btn-secondary">ユーザー情報の変更</a>
                        </div>
                        <div class="user-photo-change">
                            <a href="#" class="btn btn-secondary">ユーザー写真</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="logout-section text-center mt-5">
        <a href="/logout-test" class="btn btn-danger">ログアウトする</a>
    </div>
</div>
@endsection