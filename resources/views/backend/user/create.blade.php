@extends("backend.layouts.master")
@section("title","Admin")
@section("title-content","Thêm mới người dùng")
@section("content")
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
                        <label for="inputName">Name</label>
                        <input type="text" class="form-control" id="inputName" name="name" placeholder="Nhập tên" value="{{old('name')}}">
                        @error('name')
                        <p class="text text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email" placeholder="Nhập email" value="{{old('email')}}">
                        @error('email')
                        <p class="text text-danger">{{$message}}</p>
                        @enderror
                    </div>
                    <br>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" name="password" placeholder="Nhập password">
                        @error('password')
                        <p class="text text-danger">{{$message}}</p>
                        @enderror
                    </div>
                </div>
                <br>
                <a type="button" href="{{route('users.list')}}">Quay lại</a>
                <button onclick="confirm('Chắc chưa?')" class="btn btn-warning" type="reset">Reset</button>
                <button type="submit" class="btn btn-primary">Tạo mới</button>
            </form>
@endsection



{{--<form action="" method="post">--}}
{{--    @csrf--}}
{{--    <input type="text" name="name" placeholder="Nhập tên">--}}
{{--    <input type="text" name="email" placeholder="Nhập email">--}}
{{--    <input type="password" name="password" placeholder="Nhập password">--}}
{{--    <button type="submit">Tạo mới</button>--}}
{{--    <a href="{{route('users.list')}}">Quay lại</a>--}}
{{--</form>--}}
