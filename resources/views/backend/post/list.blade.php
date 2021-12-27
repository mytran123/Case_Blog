@extends("backend.layouts.master")
@section("title","Post")
@section("title-content","Quản lý bài viết")
@section("content")
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
                    <th>Action</th>
                </tr>
                </tfoot>
                <tbody>
                @foreach($posts as $key => $post)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$post->title}}</td>
{{--                                        <td>{{$post->content}}</td>--}}

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


                        <td>

                            <a href="{{route('posts.show', $post->id)}}" type="button" class="btn btn-outline-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ticket-detailed" viewBox="0 0 16 16">
                                    <path d="M4 5.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5Zm0 5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5ZM5 7a1 1 0 0 0 0 2h6a1 1 0 1 0 0-2H5Z"></path>
                                    <path d="M0 4.5A1.5 1.5 0 0 1 1.5 3h13A1.5 1.5 0 0 1 16 4.5V6a.5.5 0 0 1-.5.5 1.5 1.5 0 0 0 0 3 .5.5 0 0 1 .5.5v1.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 11.5V10a.5.5 0 0 1 .5-.5 1.5 1.5 0 1 0 0-3A.5.5 0 0 1 0 6V4.5ZM1.5 4a.5.5 0 0 0-.5.5v1.05a2.5 2.5 0 0 1 0 4.9v1.05a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-1.05a2.5 2.5 0 0 1 0-4.9V4.5a.5.5 0 0 0-.5-.5h-13Z"></path>
                                </svg>
                            </a>

                            <a href="{{route('posts.edit', $post->id)}}" type="button" class="btn btn-outline-success">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen-fill" viewBox="0 0 16 16">
                                    <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001z"></path>
                                </svg>
                            </a>

                            <a onclick="confirm('Bạn muốn xóa bài viết này?')" href="{{ route('posts.delete',$post->id) }}" type="button" class="btn btn-outline-danger">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path>
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
                                </svg>
                            </a>
                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

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
{{--            <td>{{$post->content}}</td>--}}

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





