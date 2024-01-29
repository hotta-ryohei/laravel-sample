<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
</head>

<body>
    <h1>{{ $title }}</h1>
    <ul>
        @foreach($comments as $comment)
        <li><a>投稿ID:</a> {{ $comment->post_id }}</li>
        <li><a>コメント:</a> {{ $comment->content }}</li>
        @endforeach
    </ul>
</body>

</html>