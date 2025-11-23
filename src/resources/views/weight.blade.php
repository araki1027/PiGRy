@extends('seat1')

<style>
.error{
    color:red;
}
</style>

@section('css')
<link rel="stylesheet" href="{{asset('css/weight.css')}}">
@endsection

@section('content')
<div>
    <div>
        <div class="register">
            <div class="register-header">
                <h1>PiGRy</h1>
                <h2>新規会員登録</h2>
                <p>STEP2 体重データの入力</p>
            </div>
            <div class="register-form">
                <form action="">
                    @csrf
                    <div>
                        <p class="content">現在の体重</p>
                        <input type="text" placeholder="現在の体重を入力" name="weight"><span class="unit">kg</span>
                       <p class="error">{{$errors->first('weight')}}</p>
                    </div>
                    <div>
                        <p class="content">目標の体重</p>
                        <input type="text" placeholder="目標の体重を入力" name="target_weight"><span class="unit">kg</span>
                        <p class="error">{{$errors->first('target_weight')}}</p>
                    </div>
            </div>        
                    <div class="register-button">
                        <button type="submit">アカウント作成</button>
                    </div>
                </form>
        </div>
    </div>
</div>
@endsection