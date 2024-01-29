<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
</head>

<body>
    <h1>{{ $title }}</h1>
    <ul>
        @foreach($posts as $post)
        <li>{{ $post }}</li>
        @endforeach
    </ul>
</body>

</html>