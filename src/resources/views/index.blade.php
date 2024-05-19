<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Styles -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
    <h1 class="text-center">paiza BBS</h1>
    <p class="text-center">{{$message}}</p>
    <button type="button" class="btn btn-primary"><a href='{{ route("article.create") }}'>新規作成</a></button>
    @foreach ($articles as $article)
        <p>
            <a href='{{ route("article.show", ["id" => $article->id]) }}'>{{$article->content}}</a>
        </p>
    @endforeach
    </body>
</html>
