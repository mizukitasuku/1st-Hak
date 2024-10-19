    
@extends('layouts.app')

@section('body-class', 'logged-out')

@section('content')
    <div class="container">
        <div class="title">ユーザーページ</div>

        <!-- ホームページボタン -->
        <a href="#" class="home-button">ホームページへ</a>

        <!-- データ表示 -->
        <div class="data-block">
            <span class="data-title">データ1</span>
            <span class="favorite-star">★</span>
            <div class="image">画像</div>
            <a href="#" class="details-button">詳細を見る</a>
        </div>

        <!-- サイドバー -->
        <div class="sidebar">
            <a href="#" class="sidebar-button">ユーザー情報の変更</a>
            <a href="#" class="sidebar-button">ユーザー写真</a>
        </div>
    </div>
@endsection