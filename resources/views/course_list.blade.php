<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>履修科目一覧/変更</title>
</head>

<body>
    <div class="course-list">
            <h1 class="ml-4 pt-4">履修中科目単位一覧/変更</h1>
        <div class="specialized">
            <h4>専門科目</h4>
            <div class="container">
                <div class="row text-center subject">
                    <h5 class="col-3">国際金融論１</h5>
                    <p class="col-2"></p>
                    <a href="#" class="col-2 quit">履修解除</a>
                    <a href="#" class="col-2 pick-up">単位あり</a>
                    <a href="#" class="col-2 drop">単位なし</a>
                    <p class="col-1"></p>
                </div>
                {{-- ここは削除 --}}
                <div class="row text-center subject">
                    <h5 class="col-3">労働経済学２</h5>
                    <p class="col-2"></p>
                    <a href="#" class="col-2 quit">履修解除</a>
                    <a href="#" class="col-2 pick-up">単位あり</a>
                    <a href="#" class="col-2 drop">単位なし</a>
                    <p class="col-1"></p>
                </div>
            </div>
        </div>
        <div class="base">
            <h4>専門基礎科目</h4>
            <div class="container">
                <div class="row text-center">
                    <h5 class="col-3">ミクロ経済２</h5>
                    <p class="col-2"></p>
                    <a href="#" class="col-2 quit">履修解除</a>
                    <a href="#" class="col-2 pick-up">単位あり</a>
                    <a href="#" class="col-2 drop">単位なし</a>
                    <p class="col-1"></p>
                </div>
            </div>
        </div>
        <div class="liberal">
            <h4>教養科目</h4>
            <div class="container">
                <div class="row text-center">
                    <h5 class="col-3">天文学</h5>
                    <p class="col-2"></p>
                    <a href="#" class="col-2 quit">履修解除</a>
                    <a href="#" class="col-2 pick-up">単位あり</a>
                    <a href="#" class="col-2 drop">単位なし</a>
                    <p class="col-1"></p>
                </div>
            </div>
        </div>
        <div class="necessary">
            <h4>必須科目</h4>
            <div class="container">
                <div class="row text-center">
                    <h5 class="col-3">ベーシック中国語</h5>
                    <p class="col-2"></p>
                    <a href="#" class="col-2 quit">履修解除</a>
                    <a href="#" class="col-2 pick-up">単位あり</a>
                    <a href="#" class="col-2 drop">単位なし</a>
                    <p class="col-1"></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
