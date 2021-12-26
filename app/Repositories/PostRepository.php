<?php

namespace App\Repositories;

use App\Models\Post;
use App\Repositories\Impl\PostRepositoryInterface;

class PostRepository extends BaseRepository implements PostRepositoryInterface
{

    public function __construct(Post $post)
    {
        $this->model = $post;
    }

//    public function create($request)
//    {
//        $data = $request->only('title','content','user_id');
//        Post::create($data);
//    }
}
