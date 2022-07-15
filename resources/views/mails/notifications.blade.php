<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Nuovo post creato</h2>
    <h3>{{$new_post->title}}</h3>
    <a href="{{ route('admin.posts.show', [ 'post' => $new_post->id  ]) }}">Visualizza post</a>
</body>
</html>