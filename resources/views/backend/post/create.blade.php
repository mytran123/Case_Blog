@extends("backend.layouts.master")
@section('title','Post')
@section("title-content","Thêm mới bài viết")
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Thêm mới người dùng
        </div>
        <div class="card-body">
            <form method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Tiêu đề</label>
                        <input type="text" class="form-control" id="inputName" name="title" placeholder="Nhập tiêu đề">
                    </div>
                    <br>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Nội dung</label>
                        <input type="text" class="form-control" id="inputEmail4" name="content" placeholder="Nhập nội dung">
                    </div>
                    <br>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">User ID</label>
                        <input type="text" class="form-control" id="inputPassword4" name="user_id" placeholder="ID user" value="1">

                    </div>
                </div>
                <br>
                <h3>Danh sách thể loại</h3>
                @foreach($categories as $category)
                    <input type="checkbox" name="category[]" value="{{$category->id}}"> {{$category->name}} <br>
                @endforeach
                <br>
                <a href="{{route('posts.list')}}" type="button">Quay lại</a>
{{--                <button onclick="confirm('Chắc chưa?')" class="btn btn-warning" type="reset">Reset</button>--}}
                <button type="submit" class="btn btn-primary">Thêm mới</button>

            </form>
@endsection




{{--<form action="" method="post">--}}
{{--    @csrf--}}
{{--    <input type="text" name="title" placeholder="Tiêu đề">--}}
{{--    <input type="text" name="content" placeholder="Nội dung">--}}
{{--    <input type="text" name="user_id" placeholder="ID user" value="1">--}}
{{--    <hr>--}}
{{--    <h3>Danh sách thể loại</h3>--}}
{{--    @foreach($categories as $category)--}}
{{--        <input type="checkbox" name="category[]" value="{{$category->id}}"> {{$category->name}} <br>--}}
{{--    @endforeach--}}
{{--    <br>--}}
{{--    <button type="submit">Thêm mới</button>--}}
{{--    <a href="{{route('posts.list')}}" type="button">Quay lại</a>--}}

{{--</form>--}}
