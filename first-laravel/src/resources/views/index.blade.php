<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COACHTECH</title>
</head>

<body>
    <h1>{{$content}}</h1>
    <p>{{$a}}</p>

    {{-- tmpfile --}}
    <!-- sss -->

    @php
        $total = 100 + 200;
        $message = "合計は" . $total . "円です";
    @endphp

    {{-- 表示する時は外で --}}
    <p>{{$message}}</p>

    @if ($content == $a)
    OK
    <!-- 条件がtrueの時の処理 -->
    @else
    NO
    <!-- 条件がfalseの時の処理 -->
    @endif

    @unless ($content == $a)
    OK
    <!-- 条件がfalseの時の処理 -->
    @else
    NO
    <!-- 条件がtrueの時の処理 -->
    @endunless
</body>

</html>