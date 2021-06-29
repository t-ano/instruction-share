<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>新規作成</title>
</head>
<body>
    <h1>新規作成</h1>
    
    <form action="{{ route('store') }}" method="post">
        @csrf

        <div>
            <span>指示内容</span>
            <textarea name="content" id=""></textarea>
        </div>

        <div>
            <span>日付</span>
            <input type="date" name="date">
        </div>

        <div><input type="submit" value="登録"></div>

    </form>

</body>
</html>