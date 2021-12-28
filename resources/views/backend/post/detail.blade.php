@extends("backend.layouts.master")
@section("title","Post")
@section("title-content","Chi tiết bài viết")
@section("content")
    <table class="table table-bordered" border="1px">
        <thead>
        <tr>
            <th scope="col">Title</th>
            <th scope="col">Content</th>
            <th scope="col">Name</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td>{{$post->user->name}}</td>

        </tr>
        <br>
        </tbody>

    </table>
    <h5>Thể loại</h5>
    @foreach($categories as $category)
        <input type="checkbox" {{$post->checkCategory($category->id) ? "checked" : ""}} name="category[]" value="{{$category->id}}"> {{$category->name}} <br>
    @endforeach
    <a href="{{route('posts.list')}}" type="button">Quay lại</a>



{{--    <div class="card mb-4">--}}
{{--        <div class="card-header">--}}
{{--            <i class="fas fa-table me-1"></i>--}}
{{--            Xem chi tiết--}}
{{--        </div>--}}
{{--        <div class="card-body">--}}

{{--                <div class="form-row">--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="inputName">Chủ đề: </label>--}}
{{--                        <label for="">{{$post->title}}</label>--}}
{{--                    </div>--}}
{{--                    <br>--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="inputEmail4">Nội dung: </label>--}}
{{--                        <label for="">{{$post->content}}</label>--}}
{{--                    </div>--}}
{{--                    <br>--}}
{{--                    <div class="form-group col-md-6">--}}
{{--                        <label for="inputPassword4">Người viết: </label>--}}
{{--                        <label for="">{{$post->user->name}}</label>--}}
{{--                    </div>--}}
{{--                    <br>--}}
{{--                    <h5>Thể loại</h5>--}}
{{--                    @foreach($categories as $category)--}}
{{--                        <input type="checkbox" {{$post->checkCategory($category->id) ? "checked" : ""}} name="category[]" value="{{$category->id}}"> {{$category->name}} <br>--}}
{{--                    @endforeach--}}
{{--                </div>--}}
{{--                <br>--}}

{{--                <button onclick="confirm('Chắc chưa?')" class="btn btn-warning" type="reset">Reset</button>--}}
{{--                <button type="submit" class="btn btn-primary">Tạo mới</button>--}}
{{--                <a href="{{route('posts.list')}}" type="button">Quay lại</a>--}}
@endsection





{{--    <h2>{{$post->title}}</h2>--}}

{{--    <p>Nội dung: {{$post->content}}</p>--}}

{{--    <p>Người viết: {{$post->user->name}}</p>--}}
{{--    <hr>--}}
{{--    <h3>Danh sách thể loại</h3>--}}
{{--    @foreach($categories as $category)--}}
{{--        <input type="checkbox" {{$post->checkCategory($category->id) ? "checked" : ""}} name="category[]" value="{{$category->id}}"> {{$category->name}} <br>--}}
{{--    @endforeach--}}
{{--    <br>--}}
{{--    <a href="{{route('posts.list')}}" type="button">Quay lại</a>--}}






