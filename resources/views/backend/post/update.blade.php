@extends("backend.layouts.master")
@section('title','Post')
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Cập nhật bài biết
        </div>
        <div class="card-body">
            <form method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Tiêu đề</label>
                        <input type="text" class="form-control" id="inputName" name="title" placeholder="Nhập tiêu đề" value="{{$post->title}}">
                    </div>
                    <br>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nội dung</label>
                        <input type="text" class="form-control" id="inputEmail4" name="content" placeholder="Nhập nội dung" value="{{$post->content}}">
                    </div>
                    <br>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Người viết </label>
{{--                        <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Nhập password">--}}
                        <select name="" id="" value="{{$post->user->name}}">
                            @foreach(\App\Models\User::all() as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                        <hr>
                        <h3>Danh sách thể loại</h3>
                        @foreach($categories as $category)
                            <input type="checkbox" {{$post->checkCategory($category->id) ? "checked" : ""}} name="category[]" value="{{$category->id}}"> {{$category->name}} <br>
                        @endforeach


                </div>
                <br>
                {{--                <a type="button" href="{{route('users.list')}}">Quay lại</a>--}}
                {{--                <button onclick="confirm('Chắc chưa?')" class="btn btn-warning" type="reset">Reset</button>--}}
                {{--                <button type="submit" class="btn btn-primary">Tạo mới</button>--}}
                <a href="{{route('posts.list')}}" type="button">Quay lại</a>
                <button type="submit" class="btn btn-primary">Cập nhật</button>
            </form>
@endsection


{{--<form action="" method="post">--}}
{{--    @csrf--}}
{{--    <input type="text" name="title" placeholder="Tiêu đề" value="{{$post->title}}">--}}
{{--    <input type="text" name="content" placeholder="Nội dung" value="{{$post->content}}">--}}
{{--    <input type="text" name="user_id" placeholder="ID user" value="{{$post->user->name}}">--}}
{{--    <select name="" id="" value="{{$post->user->name}}">--}}
{{--        @foreach(\App\Models\User::all() as $user)--}}
{{--            <option value="{{$user->id}}">{{$user->name}}</option>--}}
{{--        @endforeach--}}
{{--    </select>--}}
{{--    <hr>--}}
{{--    <h3>Danh sách thể loại</h3>--}}
{{--    @foreach($categories as $category)--}}
{{--        <input type="checkbox" {{$post->checkCategory($category->id) ? "checked" : ""}} name="category[]" value="{{$category->id}}"> {{$category->name}} <br>--}}
{{--    @endforeach--}}
{{--    <br>--}}
{{--    <button type="submit">Sửa</button>--}}
{{--    <a href="{{route('posts.list')}}" type="button">Quay lại</a>--}}
{{--</form>--}}




