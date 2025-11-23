<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/seat2.css')}}">
    @yield('css')
</head>
<body>
    <header>
        <div class="head">
            <div class="header-name">
                <h1>PiGRy</h1>
            </div>
            <div class="button">
                <button type="button" onclick="location.href='/weight_logs/{weightLogId}/update'">⚙目標体重設定</button>
                <button>ログアウト</button>
            </div>
        </div>
    </header>    
    <main>
        @yield('content')
    </main>
</body>
</html>