<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;


class AuthController extends Controller
{
    public function showFormLogin()
    {
        return view("backend.auth.login");
    }

    public function login(Request $request)
    {
        $data = $request->only("email","password");
        if (Auth::attempt($data)) {
            return redirect()->route("posts.list");
        } else {
            dd("Đăng nhập không thành công");
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route("admin.login");
    }

    public function showFormRegister()
    {
        return view("backend.auth.register");
    }

    public function register(Request $request)
    {
        $data = $request->only("name","email","password");
        $data["password"] = Hash::make($request->password);
        User::create($data);
        return redirect()->route("admin.showFormLogin");
    }

    public function showFormResetPassword()
    {
        return view("backend.auth.password");
    }

    public function resetPassword(Request $request)
    {
        $currentPassword = Auth::user()->password;
        if (Hash::check($request->currentPassword,$currentPassword)) {
            Auth::user()->password = Hash::make($request->newPassword);
            Auth::user()->save();
            return redirect()->route("admin.login");
        } else {
            dd("Mật khẩu hiện tại không đúng");
        }
    }
}
