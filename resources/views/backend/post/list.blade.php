@extends("backend.layouts.master")
@section('title','Post')
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Danh sách bài viết
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>User</th>
                    <th colspan="3">Action</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>User</th>
                    <th colspan="3">Action</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        {{--                <td>{{$post->content}}</td>--}}

                        <td>
                            @if(count($post->categories) > 0)
                                @foreach($post->categories as $category)
                                    <p>{{$category->name}}</p>
                                @endforeach
                            @else
                                <p>Chưa phân loại</p>
                            @endif
                        </td>

                        <td>{{$post->user->name}}</td>
                        <td><a href="{{route('posts.show', $post->id)}}" type="button">Detail</a></td>
                        <td><a href="{{route('posts.edit', $post->id)}}" type="button">Update</a></td>
                        <td><a onclick="confirm('Are you sure?')" href="{{ route('posts.delete',$post->id) }}" type="button">Delete</a></td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection


{{--<body>--}}
{{--<a type="button" class="btn btn-primary" href="{{route('posts.create')}}">Thêm mới</a>--}}
{{--<table border="1px">--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th>ID</th>--}}
{{--        <th>Title</th>--}}
{{--        <th>Content</th>--}}
{{--        <th>User</th>--}}
{{--        <th colspan="3">Action</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    @foreach($posts as $post)--}}
{{--        <tr>--}}
{{--            <td>{{$post->id}}</td>--}}
{{--            <td>{{$post->title}}</td>--}}
{{--            --}}{{--                <td>{{$post->content}}</td>--}}

{{--            <td>--}}
{{--                @if(count($post->categories) > 0)--}}
{{--                    @foreach($post->categories as $category)--}}
{{--                        <p>{{$category->name}}</p>--}}
{{--                    @endforeach--}}
{{--                @else--}}
{{--                    <p>Chưa phân loại</p>--}}
{{--                @endif--}}
{{--            </td>--}}

{{--            <td>{{$post->user->name}}</td>--}}
{{--            <td><a href="{{route('posts.show', $post->id)}}" type="button">Detail</a></td>--}}
{{--            <td><a href="{{route('posts.edit', $post->id)}}" type="button">Update</a></td>--}}
{{--            <td><a onclick="confirm('Are you sure?')" href="{{ route('posts.delete',$post->id) }}" type="button">Delete</a></td>--}}

{{--        </tr>--}}
{{--    @endforeach--}}
{{--    </tbody>--}}
{{--</table>--}}
{{--</body>--}}

