<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>履修登録</title>
</head>

<body>
    <div class="registration">
        <div class="text-center">
            <h1 class="mb-4">履修登録画面</h1>
        </div>
        <div class="box mx-auto">
            <div class="container">
                <div class="align-items-center text-center">
                    <div class="my-4 course-name">
                        <p>①科目名を入力してください</p>
                        <input type="text" 　class="course-input">
                    </div>
                    <div class="my-4 category">
                        <p>②分類を選択してください</p>
                        <select name="subjest-category">
                            <option value="first" selected></option>
                            <option value="specialized">専門科目</option>
                            <option value="base">専門基礎科目</option>
                            <option value="liberal">教養科目</option>
                            <option value="necessary">必須科目</option>
                        </select>
                    </div>
                    <div class="my-3 credit">
                        <p>③単位数を選択してください</p>
                        <select name="sredit-number">
                            <option value="0" selected></option>
                            <option value="1">1単位</option>
                            <option value="2">2単位</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="mx-auto my-4 standard-button">
                            <p class="col-5"></p>
                            <a class="col-2" href="{{ url('/course/registration/confirm') }}">確認画面へ</a>
                            <p class="col-5"></p>
                        </div>
                    </div>
                    {{-- <div class="back-home-button">
                        <a href="{{ url('/') }}">Back Home</a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
