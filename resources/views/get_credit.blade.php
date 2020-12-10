<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>取得単位</title>
</head>

<body>
    <div class="get-credit">
        <div class="mx-auto">
            <h1 class="text-center">取得単位一覧</h1>
            <div class="specialized">
                <h4>専門科目</h4>
                <div class="container">
                    <div class="row">
                        <h5 class="col-2">あと{{((int)$specialized->credit - (int)$senmon)}}単位</h5>
                        <p class="col-8"></p>
                    <h5 class="col-2 font-weight-bold">{{$senmon}}/{{$specialized->credit}}</h5>
                    </div>
                </div>
            </div>
            <div class="base">
                <h4>専門基礎科目</h4>
                <div class="container">
                    <div class="row">
                        <h5 class="col-2">あと{{(int)$base->credit - (int)$senmonkiso}}単位</h5>
                        <p class="col-8"></p>
                        <h5 class="col-2 font-weight-bold">{{$senmonkiso}}/{{$base->credit}}</h5>
                    </div>
                </div>
            </div>
            <div class="liberal">
                <h4>教養科目</h4>
                <div class="container">
                    <div class="row">
                    <h5 class="col-2">あと{{$libral->credit - $kyouyou}}単位</h5>
                        <p class="col-8"></p>
                        <h5 class="col-2 font-weight-bold">{{$kyouyou}}/{{$libral->credit}}</h5>
                    </div>
                </div>
            </div>
            <div class="necessary">
                <h4>必須科目</h4>
                <div class="container">
                    <div class="row">
                        <h5 class="col-2">あと{{(int)$necessary->credit - (int)$hissu}}単位</h5>
                        <p class="col-8"></p>
                        <h5 class="col-2 font-weight-bold">{{$hissu}}/{{$necessary->credit}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
