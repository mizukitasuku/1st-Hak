   
@extends('layouts.app')

@section('body-class', 'logged-out')

@section('content')
   <div class="container">
        <div class="title">ユーザー編集ページ</div>

        <!-- ユーザー写真登録または変更 -->
        <div class="user-photo">
            <a href="#" class="photo-button">ユーザー写真登録または変更</a>
        </div>

        <!-- 編集オプション -->
        <div class="edit-options">
            <a href="#" class="edit-button">名前変更</a>
            <a href="#" class="edit-button">アドレス変更</a>
            <a href="#" class="edit-button">パスワード変更</a>
        </div>
    </div>
@endsection