<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>履修登録/確認画面</title>
</head>

<body>
    <div class="confirm">
        <div class="container">
            <h1 class="text-center">確認画面</h1>
            <div class="box mx-auto">
                <p>①科目名：</p>
                <p>②分類　：</p>
                <p>③単位数：</p>
                <div class="confirm-text my-5">
                    <p>以上の内容で登録します。<br>よろしいですか？</p>
                </div>
            </div>
            <div class="mt-5 confirm-button">
                <div class="row text-center">
                    <div class="col-2 standard-button">
                    <a href="{{url('/course/registration')}}">修正する</a>
                    </div>
                        <div class="col-8"></div>
                    <div class="col-2 standard-button">
                    <a href="{{url('/list')}}">登録</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
