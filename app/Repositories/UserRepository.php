<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Impl\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function create($data)
    {
        $this->model->create($data);
    }

    public function getPostOfUser($userId)
    {
        $user = $this->getById($userId);
        return $user->posts;
    }

    public function store($request)
    {
        $data = $request->only("name","email","password");
        $user = User::create($data);
//        $user->save();
        return $user;
    }

    public function update($request,$id)
    {
        User::findOrFail($id);
        $data = $request->only("name","email","password");
        return User::query()->where('id','=',$id)->update($data);

//        $user = User::findOrFail($request->$id);
//        $user->update([
//            "name" => $request->name,
//            "email" => $request->email,
//            "password" => $request->password,
//        ]);
//        $user->save();

    }
}
