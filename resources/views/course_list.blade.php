<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>履修科目一覧/変更</title>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script>
        $(function() {
            $('a').on('click', function() {
                var id = $(this).data('id');
                var area = $(this).data('area');

                $('<input>').attr({
                    type: 'hidden',
                    name: `${area}`,
                    value: `${id}`
                }).appendTo('form');

                $('form').submit();
            })

        });

    </script>
</head>

<body>
    <div class="course-list">
    <form action="{{route('list.store')}}">
            <h1 class="ml-4 pt-4">履修中科目単位一覧/変更</h1>
            <div class="specialized">
                <h4>専門科目</h4>
                <div class="container">
                    @foreach ($senmon as $subject)
                        <div class="row text-center subject">
                            <h5 class="col-3">{{ $subject->subject }}</h5>
                            <p class="col-2"></p>
                            <a type="button" class="col-2 quit" data-area="quit" data-id="{{ $subject->id }}">履修解除</a>
                            <a class="col-2 pick-up" data-area="pick_up" data-id="{{ $subject->id }}">単位あり</a>
                            <a class="col-2 drop" data-area="drop" data-id="{{ $subject->id }}">単位なし</a>
                            <p class="col-1"></p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="base">
                <h4>専門基礎科目</h4>
                <div class="container">
                    @foreach ($senmonkiso as $subject)
                        <div class="row text-center">
                            <h5 class="col-3">{{ $subject->subject }}</h5>
                            <p class="col-2"></p>
                            <a class="col-2 quit" data-area="quit" data-id="{{ $subject->id }}">履修解除</a>
                            <a class="col-2 pick-up" data-area="pick_up" data-id="{{ $subject->id }}">単位あり</a>
                            <a class="col-2 drop" data-area="drop" data-id="{{ $subject->id }}">単位なし</a>
                            <p class="col-1"></p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="liberal">
                <h4>教養科目</h4>
                <div class="container">
                    @foreach ($kyouyou as $subject)
                        <div class="row text-center">
                            <h5 class="col-3">{{ $subject->subject }}</h5>
                            <p class="col-2"></p>
                            <a class="col-2 quit" data-area="quit" data-id="{{ $subject->id }}">履修解除</a>
                            <a class="col-2 pick-up" data-area="pick_up" data-id="{{ $subject->id }}">単位あり</a>
                            <a class="col-2 drop" data-area="drop" data-id="{{ $subject->id }}">単位なし</a>
                            <p class="col-1"></p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="necessary">
                <h4>必須科目</h4>
                <div class="container">
                    @foreach ($hissu as $subject)
                        <div class="row text-center">
                            <h5 class="col-3">{{ $subject->subject }}</h5>
                            <p class="col-2"></p>
                            <a class="col-2 quit" data-area="quit" data-id="{{ $subject->id }}">履修解除</a>
                            <a class="col-2 pick-up" data-area="pick_up" data-id="{{ $subject->id }}">単位あり</a>
                            <a class="col-2 drop" data-area="drop" data-id="{{ $subject->id }}">単位なし</a>
                            <p class="col-1"></p>
                        </div>
                    @endforeach
                </div>
            </div>
        </form>
    </div>
</body>

</html>
