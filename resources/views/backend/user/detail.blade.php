@extends("backend.layouts.master")
@section("title","Admin")
@section("title-content","Chi tiết người dùng")
@section("content")
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Xem chi tiết
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                </tr>
                </thead>
                <tbody>
                @foreach($user->posts as $key => $post)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->content}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <a href="{{route("users.list")}}">Quay lại</a>
        </div>
    </div>
@endsection



{{--<body>--}}
{{--<h2>{{$user->name}}</h2>--}}
{{--<p>email: {{$user->email}}</p>--}}
{{--<hr>--}}
{{--<h3>Danh sách bài viết</h3>--}}
{{--<table border="1px">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th>ID</th>--}}
{{--        <th>Title</th>--}}
{{--        <th>Content</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    @foreach($user->posts as $key => $post)--}}
{{--        <tr>--}}
{{--            <td>{{$key+1}}</td>--}}
{{--            <td>{{$post->title}}</td>--}}
{{--            <td>{{$post->content}}</td>--}}
{{--        </tr>--}}
{{--    @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}
{{--<a href="{{route("users.list")}}">Quay lại</a>--}}
{{--</body>--}}


