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
            <h1 class="my-4 text-center">卒業必須単位</h1>
            <div class="graduation-list">
                <form method="POST" action="/graduation/credit">
                    @csrf
                    <div class="row text-center specialized" id="subject">
                        <h3 class="col-6">専門科目</h3>
                        <h3 class="col-6">
                            <span id="display-specialized">{{ $specialized->credit }}単位</span>
                            <span id="edit-specialized"><input name="specialized" type="number"
                                    class="text-center edit-input" value="{{ $specialized->credit }}">単位</span>
                        </h3>
                    </div>
                    <div class="row text-center base" id="subject">
                        <h3 class="col-6">専門基礎科目</h3>
                        <h3 class="col-6">
                            <span id="display-base">{{ $base->credit }}単位</span>
                            <span id="edit-base"><input name="base" type="number" class="text-center edit-input"
                                    value="{{ $base->credit }}">単位</span>
                        </h3>
                    </div>
                    <div class="row text-center libral" id="subject">
                        <h3 class="col-6">教養科目</h3>
                        <h3 class="col-6">
                            <span id="display-libral">{{ $libral->credit }}単位</span>
                            <span id="edit-libral"><input name="libral" type="number" class="text-center edit-input"
                                    value="{{ $libral->credit }}">単位</span>
                        </h3>
                    </div>
                    <div class="row text-center necessary" id="subject">
                        <h3 class="col-6">必須科目</h3>
                        <h3 class="col-6">
                            <span id="display-necessary">{{ $necessary->credit }}単位</span>
                            <span id="edit-necessary"><input name="necessary" type="number"
                                    class="text-center edit-input" value="{{ $necessary->credit }}">単位</span>
                        </h3>
                    </div>
                    <div class="text-center mt-3 mb-5" id="edit-button">
                        <button type="button" id="edit-graduation" onclick="editToggle()">卒業必須<br>単位変更</button>
                    </div>
                    <div class="text-center mt-3 mb-5" id="confirm-button">
                        <input type="submit" id="confirm-graduation" onclick="confirmToggle()" value="確定">
                        <button type="button" id="cancel-graduation" onclick="cancelToggle()">キャンセル</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function editToggle() {
            document.getElementById('edit-specialized').style.display = "block";
            document.getElementById('display-specialized').style.display = "none";
            document.getElementById('edit-base').style.display = "block";
            document.getElementById('display-base').style.display = "none";
            document.getElementById('edit-libral').style.display = "block";
            document.getElementById('display-libral').style.display = "none";
            document.getElementById('edit-necessary').style.display = "block";
            document.getElementById('display-necessary').style.display = "none";
            document.getElementById('confirm-button').style.display = "block";
            document.getElementById('edit-button').style.display = "none";
        }

        function confirmToggle() {
            document.getElementById('edit-specialized').style.display = "none";
            document.getElementById('display-specialized').style.display = "block";
            document.getElementById('edit-base').style.display = "none";
            document.getElementById('display-base').style.display = "block";
            document.getElementById('edit-libral').style.display = "none";
            document.getElementById('display-libral').style.display = "block";
            document.getElementById('edit-necessary').style.display = "none";
            document.getElementById('display-necessary').style.display = "block";
            document.getElementById('confirm-button').style.display = "none";
            document.getElementById('edit-button').style.display = "block";
        }

        function cancelToggle() {
            document.getElementById('edit-specialized').style.display = "none";
            document.getElementById('display-specialized').style.display = "block";
            document.getElementById('edit-base').style.display = "none";
            document.getElementById('display-base').style.display = "block";
            document.getElementById('edit-libral').style.display = "none";
            document.getElementById('display-libral').style.display = "block";
            document.getElementById('edit-necessary').style.display = "none";
            document.getElementById('display-necessary').style.display = "block";
            document.getElementById('confirm-button').style.display = "none";
            document.getElementById('edit-button').style.display = "block";
        }

        // 専門科目
        //変更ボタン 
        function specializedEdit() {
            document.getElementById('edit-specialized').style.display = "block";
            document.getElementById('display-specialized').style.display = "none";
            document.getElementById('cancel-specialized').style.display = "block";
        }
        // キャンセルボタン
        function specializedCancel() {
            document.getElementById('edit-specialized').style.display = "none";
            document.getElementById('display-specialized').style.display = "block";
            document.getElementById('cancel-specialized').style.display = "none";
        }


        // 専門基礎科目
        //変更ボタン 
        function baseEdit() {
            document.getElementById('edit-base').style.display = "block";
            document.getElementById('display-base').style.display = "none";
            document.getElementById('cancel-base').style.display = "block";
        }
        // キャンセルボタン
        function baseCancel() {
            document.getElementById('edit-base').style.display = "none";
            document.getElementById('display-base').style.display = "block";
            document.getElementById('cancel-base').style.display = "none";
        }

        // 教養科目
        //変更ボタン 
        function libralEdit() {
            document.getElementById('edit-libral').style.display = "block";
            document.getElementById('display-libral').style.display = "none";
            document.getElementById('cancel-libral').style.display = "block";
        }
        // キャンセルボタン
        function libralCancel() {
            document.getElementById('edit-libral').style.display = "none";
            document.getElementById('display-libral').style.display = "block";
            document.getElementById('cancel-libral').style.display = "none";
        }

        // 必須科目
        //変更ボタン 
        function necessaryEdit() {
            document.getElementById('edit-necessary').style.display = "block";
            document.getElementById('display-necessary').style.display = "none";
            document.getElementById('cancel-necessary').style.display = "block";
        }
        // キャンセルボタン
        function necessaryCancel() {
            document.getElementById('edit-necessary').style.display = "none";
            document.getElementById('display-necessary').style.display = "block";
            document.getElementById('cancel-necessary').style.display = "none";
        }

    </script>
</body>

</html>
