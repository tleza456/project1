<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PostController extends Controller
{
    public function index()
    {
        $data = [
            'posts' => Post::all(),
        ];
        return view('post.index', $data);
    }
    public function create()
    {
        $data = [
            'categories' =>Category::all(),
        ];
        return view('post.create', $data);
    }
    public function store(Request $request)
    {
        if ($request->hasFile('thumnail')) {
        $path = $request->file('thumnail')->store('thumnail');
        } else {
            $path = "http://via.placeholder.com/150x150";
        }
        $title = $request->input('title');
        $category_id = $request->input('category_id');
        $user_id = auth()->user()->id;
        $detail = $request->input('detail');

        $post = new Post();
        $post->title = $title;
        $post->thumnail = $path;
        $post->category_id = $category_id;
        $post->user_id = $user_id;
        $post->detail = $detail;
        $post->save();
        return redirect('/post');
    }
    public function edit($id)
    {
        $post = Post::find($id);
        $data = [
            'post' => $post

        ];
        return view('post.edit', $data);
    }
    public function update(Request $request, $id)
    {
        $name = $request->input('name');
        $postname = $request->input('postname');
        $email = $request->input('email');
        $password = $request->input('password');

        $post =  Post::find($id);
        $post->name = $name;
        $post->postname = $postname;
        $post->email = $email;
        $post->password = Hash::make($password);
        $post->save();
        return redirect('/post');
    }
    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('/post');
    }
}
