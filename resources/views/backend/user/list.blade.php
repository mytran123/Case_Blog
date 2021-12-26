@extends("backend.layouts.master")
@section('title','Admin')
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Danh sách người dùng
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th colspan="3">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th colspan="3">Action</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td><a href="{{route('users.show',$user->id)}}">Detail</a></td>
                        <td><a href="{{route('users.edit',$user->id)}}">Update</a></td>
                        <td><a onclick="confirm('Bạn muốn xóa người dùng này?')" href="{{route('users.delete',$user->id)}}">Delete</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

{{--<!doctype html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport"--}}
{{--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">--}}
{{--    <meta http-equiv="X-UA-Compatible" content="ie=edge">--}}
{{--    <title>Document</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--<a type="button" class="btn btn-primary" href="{{route('users.create')}}">Thêm mới</a>--}}
{{--<table border="1px">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th>ID</th>--}}
{{--        <th>Name</th>--}}
{{--        <th>Email</th>--}}
{{--        <th colspan="3">Action</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    @foreach($users as $user)--}}
{{--    <tr>--}}
{{--        <td>{{$user->id}}</td>--}}
{{--        <td>{{$user->name}}</td>--}}
{{--        <td>{{$user->email}}</td>--}}
{{--        <td><a href="{{route('users.show',$user->id)}}">Detail</a></td>--}}
{{--        <td><a href="{{route('users.edit',$user->id)}}">Update</a></td>--}}
{{--        <td><a onclick="confirm('Bạn muốn xóa người dùng này?')" href="{{route('users.delete',$user->id)}}">Delete</a></td>--}}
{{--    </tr>--}}
{{--    @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}
{{--</body>--}}
{{--</html>--}}


