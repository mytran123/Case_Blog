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
<form action="" method="post">
    @csrf
    <input type="text" name="name" placeholder="Nhập tên">
    <input type="text" name="email" placeholder="Nhập email">
    <input type="password" name="password" placeholder="Nhập password">
    <button type="submit">Tạo mới</button>
    <a href="{{route('users.list')}}">Quay lại</a>
</form>
</body>
</html>
