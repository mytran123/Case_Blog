<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>{{$post->title}}</h2>

    <p>Nội dung: {{$post->content}}</p>

    <p>Người viết: {{$post->user->name}}</p>
    <hr>
    <h3>Danh sách thể loại</h3>
    @foreach($categories as $category)
        <input type="checkbox" {{$post->checkCategory($category->id) ? "checked" : ""}} name="category[]" value="{{$category->id}}"> {{$category->name}} <br>
    @endforeach
    <br>
    <a href="{{route('posts.list')}}" type="button">Quay lại</a>

</body>
</html>



