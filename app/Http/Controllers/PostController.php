<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {

        $data = [
            'posts' => Post::all()
        ];

        return view('post.index', $data);
    }

    public function create()
    {
        $data = [
            'categories' => Category::all()
        ];

        return view('post.create', $data );
    }

    public function store(Request $request)
    {

        if ($request->hasFile('thumbnail')){
            $path = $request->file('thumbnail')->store('thumbnail');
        }
        else {
            $path = "http:/via.placeholder.com/150x150";
        }
        $post = new Post();
        $post -> thumbnail = $path;
        $post -> title = $request->input('title');
        $post -> user_id = auth()->user()->id;
        $post -> category_id = $request->input('category_id');
        $post -> detail = $request->input('detail');
        $post-> save();
        return redirect('/post');
    }

    public function edit($id)
    {
        // select * from category Where id = '$id';
        $post = Post::find($id);
        $data = [
            'post' => $post
        ];

        return view('post.edit', $data);
    }

    public function update(Request $request, $id)
    {

        if ($request->hasFile('thumbnail')){
            $path = $request->file('thumbnail')->store('thumbnail');
        }
        else {
            $path = "http:/via.placeholder.com/150x150";
        }
        // update category set (name = $name) where id = '$id'
        $title = $request->input('title');

        $user_id = $request->input('user_id');
        $category_id = $request->input('category_id');
        $detail = $request->input('detail');

        $users = Post::find($id);

        $users->title = $title;
        $users->thumbnail = $path;
        $users->user_id = $user_id;
        $users->category_id = $category_id;
        $users->detail = $detail;

        $users->save();
        return redirect('post');
    }


    public function delete($id)
    {
        //delete from category where id = '$id';
        $category = Post::find($id);
        $category->delete();
        return redirect('/post');
    }
}
