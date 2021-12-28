<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->getAll();
        return view("backend.user.list", compact("users"));
    }

    public function create()
    {
        return view("backend.user.create");
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required | max:10 | min:3",
            "email" => "required",
            "password" => "required",
        ]);
        $this->userRepository->store($request);
        return redirect()->route("users.list");
    }

    public function show($id)
    {
        $user = $this->userRepository->getById($id);
        return view("backend.user.detail", compact("user"));
    }

    public function edit($id)
    {
        $user = $this->userRepository->getById($id);
        return view("backend.user.update",compact("user"));
    }

    public function update(Request $request, $id)
    {
        $this->userRepository->update($request, $id);
        return redirect()->route("users.list");
    }

    public function destroy($id)
    {
//        $this->userRepository->delete($id);
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route("users.list");
    }
}
