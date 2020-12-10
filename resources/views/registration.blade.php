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
                    <form method="GET" action="{{ url('/course/registration/confirm') }}">
                        @csrf
                        <div class="my-4 course-name">
                            <p>①科目名を入力してください</p>
                            <input type="text" name='subject'　class="course-input" required>
                        </div>
                        <div class="my-4 category">
                            <p>②分類を選択してください</p>
                            <select name="category" required>
                                <option ></option>
                                <option value="専門科目">専門科目</option>
                                <option value="専門基礎科目">専門基礎科目</option>
                                <option value="教養科目">教養科目</option>
                                <option value="必須科目">必須科目</option>
                            </select>
                        </div>
                        <div class="my-3 credit">
                            <p>③単位数を選択してください</p>
                            <select name="credit"required>
                                <option></option>
                                <option value="1">1単位</option>
                                <option value="2">2単位</option>
                            </select>
                        </div>
                        <div class="mx-auto my-4">
                            <input class="regist-submit" type="submit" name="regist_confirm" value="確認画面へ">
                        </div>
                        {{-- <div class="back-home-button">
                            <a href="{{ url('/') }}">Back Home</a>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>
