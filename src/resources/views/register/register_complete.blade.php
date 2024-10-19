@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    <h2>新規登録完了ページ</h2>
                </div>
                <div class="card-body text-center">
                    <p>新規登録しました。</p>
                    <a href="{{ route('login') }}" class="btn btn-primary">ログイン画面へ</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection