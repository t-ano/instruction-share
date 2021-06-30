<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>依頼内容</title>
</head>
<body>
    <h1>依頼内容</h1>

    <a href="{{ route('create') }}">新規作成</a>

    @foreach ($instructions as $value)
        <div>{{ $value->content }}</div>
        <div>{{ $value->date }}</div>
    @endforeach
    
</body>
</html>