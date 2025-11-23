@extends('seat1')

<style>
.error{
    color:red;
}
</style>

@section('css')
<link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('content')
<div>
    <div>
        <div class="register">
            <div class="register-header">
                <h1>PiGRy</h1>
                <h2>新規会員登録</h2>
                <p>STEP1 アカウント情報の登録</p>
            </div>
            <div class="register-form">
                <form action="/register" method="post">
                    @csrf
                    <div>
                        <p class="content">お客様</p>
                        <input type="text" placeholder="名前を入力" name="name">
                        <p class="error">{{$errors->first('name')}}</p>
                    </div>
                    <div>
                        <p class="content">メールアドレス</p>
                        <input type="email" placeholder="メールアドレスを入力" name="email">
                        <p class="error">{{$errors->first('email')}}</p>
                    </div>
                    <div>
                        <p class="content">パスワード</p>
                        <input type="password" placeholder="パスワードを入力" name="password">
                        <p class="error">{{$errors->first('password')}}</p>
                    </div>
            </div>        
                    <div class="register-button">
                        <button type="submit">次に進む</button>
                    </div>
                </form>
            <div class="login-link">
                <a href="/login">ログインはこちら</a>
            </div>
        </div>
    </div>
</div>
@endsection