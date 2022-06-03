<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>ネーム　ブログ</h1>
        <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <a href='/posts/{{ $post->id }}'><h2 class='title'>{{ $post->title }}</h2></a>
                    <p class='body'>{{ $post->body }}</p>
                    <a href='/posts/create'>create</a>
                </div>
            @endforeach
        </div>
       <div class='paginate'>
            {{ $posts->links() }}
        </div> 
    </body>
</html>