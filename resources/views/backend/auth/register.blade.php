<!doctype html>
<html lang="en">
<head>
    <title>Login 09</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap')}}">

    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
<section class="ftco-section">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <div class="login-wrap py-5">
                    <div class="img d-flex align-items-center justify-content-center" style="background-image: url(images/bg.jpg);"></div>
                    <h3 class="text-center mb-0">Xin Chào</h3>

                    <form action="#" class="login-form" method="post">
                        @csrf
                        <div class="form-group">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-user"></span></div>
                            <input type="text" name="name" class="form-control" placeholder="Nhập Tên" required>
                        </div>
                        <div class="form-group">
                            <div class="icon d-flex align-items-center justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" color="white" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"></path>                                </svg>
                            </div>

                            <input type="text" name="email" class="form-control" placeholder="Nhập Email" required>
                        </div>
                        <div class="form-group">
                            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-lock"></span></div>
                            <input type="password" name="password" class="form-control" placeholder="Nhập mật khẩu" required>
                        </div>
{{--                        <div class="form-group d-md-flex">--}}
{{--                            <div class="w-100 text-md-right">--}}
{{--                                <a href="{{route('admin.showFormResetPassword')}}">Quên mật khẩu</a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <button type="submit" class="btn form-control btn-primary rounded submit px-3">Đăng ký</button>
                        </div>
                        <div class="form-group">
                            <a type="button" href="{{route('admin.login')}}" class="btn form-control btn-primary rounded submit px-3">Quay lại</a>
                        </div>
                    </form>
{{--                    <div class="w-100 text-center mt-4 text">--}}
{{--                        <p class="mb-0">Chưa có tài khoản?</p>--}}
{{--                        <a href="{{route('admin.showFormRegister')}}">Đăng ký</a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>
