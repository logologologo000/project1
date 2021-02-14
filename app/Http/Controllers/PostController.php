<?php

namespace App\Http\Controllers;

use App\Models\Post;
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

        return view('post.create');
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post -> title = $request->input('title');
        $post -> thumbnail = $request->input('thumbnail');
        $post -> user_id = $request->input('user_id');
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
        // update category set (name = $name) where id = '$id'
        $title = $request->input('title');
        $thumbnail = $request->input('thumbnail');
        $user_id = $request->input('user_id');
        $category_id = $request->input('category_id');
        $detail = $request->input('detail');

        $users = Post::find($id);

        $users->title = $title;
        $users->thumbnail = $thumbnail;
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
