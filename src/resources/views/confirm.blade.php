@extends('seat2')

<style>
    svg.w-5.h-5 {
    /*paginateメソッドの矢印の大きさ調整のために追加*/
    width: 30px;
    height: 30px;
  }
</style>

@section('css')
<link rel="stylesheet" href="{{asset('css/confirm.css')}}">
@endsection

@section('content')
<div class="weight-confirm">
    <div class="weight-head">
        <table class="weight-table">
            <tr>
                <td class="weight-goal">目標体重</td>
                <td class="weight-goal">目標まで</td>
                <td class="weight-goal">最新体重</td>
            </tr>
            <tr>
                <td class="weight-information">{{$target->target_weight}}<span>kg</span></td>
                <td class="weight-information">{{$target->target_weight-$latest->weight}}<span>kg</span></td>
                <td class="weight-latest">{{$latest->weight}}<span>kg</span></td>
            </tr>
        </table>
    </div>
    <div class="life-data">
      <div class="search-group">
        <div>
            <form class="search-form" action="">
                <input type="select">
                <option value=""></option>
                <p>~</p>
                <input type="select">
                <option value=""></option>
                <button class="search-button">検索</button>
            </form>
        </div>
        <div>
            <button class="add-button">データを追加</button>
        </div>
      </div>
        <table class="life-table">
            <tr class="life-table-header">
                <th class="life-date-head">日付</th>
                <th class="life-weight-head">体重</th>
                <th class="life-calory-head">食事摂取カロリー</th>
                <th class="life-time-head">運動時間</th>
            </tr>
            @foreach($logs as $log)
            <tr>
                <td class="life-date">{{$log->date}}</td>
                <td class="life-weight">{{$log->weight}}kg</td>
                <td class="life-calory">{{$log->calories}}cal</td>
                <td class="life-time">{{$log->exercise_time}}</td>
                <td class="life-changepen">🖋</td>
            </tr>
            @endforeach
        </table>
        {{$logs->links()}}
    </div>
</div>
@endsection