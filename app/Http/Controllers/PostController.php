<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Repositories\CategoryRepository;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postRepository;
    protected $categoryRepository;

    public function __construct(PostRepository $postRepository, CategoryRepository $categoryRepository)
    {
        $this->postRepository = $postRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $posts = $this->postRepository->getAll();
        return view("backend.post.list", compact("posts"));
    }

    public function create()
    {
        $categories = $this->categoryRepository->getAll();
        return view("backend.post.create", compact("categories"));
    }

    public function store(Request $request)
    {
        $data = $request->only("title","content","user_id");
        $post = Post::create($data);
        $post->categories()->attach($request->category);
        return redirect()->route("posts.list");
    }

    public function show($id)
    {
        $post = $this->postRepository->getById($id);
        $categories = $this->categoryRepository->getAll();
        return view("backend.post.detail", compact("post","categories"));
    }

    public function edit($id)
    {
        $post =$this->postRepository->getById($id);
        $categories = $this->categoryRepository->getAll();
        return view("backend.post.update",compact("post","categories"));
    }

    public function update(Request $request,$id)
    {
        $data = $request->only("title","content","user_id");
        $post = Post::findOrFail($id);
        $post->update($data);
        $post->categories()->sync($request->category);
        return redirect()->route("posts.list");
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route("posts.list");
    }
}
