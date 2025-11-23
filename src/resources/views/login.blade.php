@extends('seat1')

<style>
.error{
    color:red;
}
</style>

@section('css')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('content')
<div>
    <div>
        <div class="register">
            <div class="register-header">
                <h1>PiGRy</h1>
                <h2>ログイン</h2>
            </div>
            <div class="register-form">
                <form action="/login" method="post">
                    @csrf
                    <div>
                        <p class="content">メールアドレス</p>
                        <input type="email" placeholder="メールアドレスを入力" name="email">
                        <p class="error">{{$errors->first('email')}}</P>
                    </div>
                    <div>
                        <p class="content">パスワード</p>
                        <input type="password" placeholder="パスワードを入力" name="password">
                        <p class="error">{{$errors->first('password')}}</p>
                    </div>
            </div>        
                    <div class="register-button">
                        <button type="submit">ログイン</button>
                    </div>
                </form>
            <div class="login-link">
                <a href="/register/step1">アカウント作成はこちら</a>
            </div>
        </div>
    </div>
</div>
@endsection