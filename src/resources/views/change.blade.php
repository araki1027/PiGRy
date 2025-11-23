@extends('seat2')

<style>
p{
    color:red;
}
</style>


@section('css')
<link rel="stylesheet" href="{{asset('css/change.css')}}">
@endsection

@section('content')
<div class="weight-change">
    <div class="change-form-area">
        <div class="change-form-head">
            <h2>目標体重設定</h2>
        </div>
        <div>
            <form action="/weight_logs/{weightLogId}/update" method="post">
                @csrf
                <div class="change-form-space">
                    <input type="text" name="target_weight" value="{{$target->target_weight}}"><span>kg</span>
                <p>{{$errors->first('target_weight')}}</p>
                    <input type="hidden" value="{{$target->id}}" name="id">
                </div>
                <div class="change-form-button">
                    <button class="return" type="button" onclick="location.href='/weight_logs'">戻る</button>
                    <button class="update" type="submit">更新</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection