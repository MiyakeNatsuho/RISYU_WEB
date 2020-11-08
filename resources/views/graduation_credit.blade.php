<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>卒業必須単位</title>
</head>

<body>
    <div class="graduation-credit">
        <div class="container">
        <h1 class="my-5 text-center">卒業必須単位</h1>
        <div class="graduation-list">
            <div class="row specialized" id="subject">
                <h3 class="col-5">専門科目</h3>
                <h3 class="col-5">xx単位</h3>
                <h3 class="col-2 text-center graduation-change">変更</h3>
            </div>
            <div class="row base" id="subject">
                <h3 class="col-5">専門基礎科目</h3>
                <h3 class="col-5">xx単位</h3>
                <h3 class="col-2 text-center graduation-change">変更</h3>
            </div>
            <div class="row libral" id="subject">
                <h3 class="col-5">教養科目</h3>
                <h3 class="col-5">xx単位</h3>
                <h3 class="col-2 text-center graduation-change">変更</h3>
            </div>
            <div class="row necessary" id="subject">
                <h3 class="col-5">必須科目</h3>
                <h3 class="col-5">xx単位</h3>
                <h3 class="col-2 text-center graduation-change">変更</h3>
            </div>
        </div>
    </div>
</div>
</body>

</html>
