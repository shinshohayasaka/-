<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>ネーム　ブログ</h1>
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class='content__title'>
                <h2>タイトル</h2>
                <input type='text' name='post[title]' value="{{ $post->title }}">
            </div>
            <div class='content__body'>
                <h2>本文</h2>
                <textarea type="text" name='post[body]' placeholder="今日も1日お疲れさまでした。">{{ $post->body }}</textarea>
            </div>
            <input type="submit" value="保存">
        </form>
        <div class="back">[<a href="/posts/{{ $post->id }}">back</a>]</div>
    </body>
</html>