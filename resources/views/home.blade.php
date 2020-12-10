<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>履修登録</title>
</head>

<body>
    <div class="home-menu">
        <div class="container">
            <div class="align-items-center">
                <div class="home-button text-center">
                    履修登録
                    <a class="nav-link" href="{{ url('course/registration') }}"></a>
                </div>
                <div class="home-button text-center">
                    履修科目一覧/変更
                <a href="{{url('/list')}}"></a>
                </div>
                <div class="home-button text-center">
                    取得単位一覧
                <a href="{{url('/get/credit')}}"></a>
                </div>
                <div class="home-button text-center">
                    卒業認定単位確認/変更
                    <a href="{{('/graduation/credit')}}"></a>
                </div>
                {{-- <div class="home-button text-center">
                    パスワード変更
                    <a href="{{('/password')}}"></a>
                </div> --}}
            </div>
        </div>
    </div>
</body>

</html>
