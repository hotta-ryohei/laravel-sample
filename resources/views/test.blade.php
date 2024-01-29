<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
    <h1>{{ $title }}</h1>
    <ol>
        @foreach($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ol>
    </body>
</html>