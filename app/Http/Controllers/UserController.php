<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function __construct(){

        $this->middleware('auth');
    }

    public function index()
    {

        $data = [
            'users' => User::all()
        ];
        return view('user.index', $data);
    }

    public function create()
    {

        return view('user.create');
    }

    public function store(Request $request)
    {
        $user = new User();
        $user -> name = $request->input('name');
        $user -> username = $request->input('username');
        $user -> email = $request->input('email');
        $user -> password = Hash::make($request->input('password'));
        $user-> save();
        return redirect('/user');
    }

    public function edit($id)
    {
        // select * from category Where id = '$id';
        $user = User::find($id);
        $data = [
            'user' => $user
        ];
        return view('user.edit', $data);
    }

    public function update(Request $request, $id)
    {
        // update category set (name = $name) where id = '$id'
        $name = $request->input('name');
        $username = $request->input('username');
        $email = $request->input('email');
        $pp = $request->input('password');

        $users = User::find($id);

        $users->name = $name;
        $users->username = $username;
        $users->email = $email;
        $users-> password = Hash::make($request->input('password'));

        $users->save();
        return redirect('user');
    }


    public function delete($id)
    {
        //delete from category where id = '$id';
        $category = User::find($id);
        $category->delete();
        return redirect('/user');
    }
}
