<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>パスワード変更</title>
</head>

<body>
    <div class="password-change">
        <div class="container text-center">
            <h1 class="my-5">パスワード変更</h1>
            <div class="box">
                <div class="mt-3">
                    <p>①現在のパスワードを入力してください</p>
                    <input type="text">
                </div>
                <div class="my-5">
                    <p>②新しいパスワードを入力してください</p>
                    <input type="text">
                    <p class="mt-3">確認用パスワード</p>
                    <input type="text">
                </div>
                <div class="password-button my-5">
                    <a href="#">変更</a>
            </div>
        </div>
        </div>
    </div>
</body>

</html>
