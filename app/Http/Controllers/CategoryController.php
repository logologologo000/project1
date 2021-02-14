<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

        $data = [
            'categories' => Category::all()
        ];
        return view('category.index', $data);
    }

    public function create()
    {

        return view('category.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $category = new Category();
        $category->name = $name;
        $category->save();
        return redirect('/category');
    }

    public function edit($id)
    {
        // select * from category Where id = '$id';
        $category = Category::find($id);
        $data = [
            'category' => $category
        ];
        return view('category.edit', $data);
    }

    public function update(Request $request , $id)
    {
        // update category set (name = $name) where id = '$id'
        $name = $request->input('name');
        $category = Category::find($id);
        $category->name = $name;
        $category->save();
        return redirect('category');
    }

    public function delete($id)
    {
        //delete from category where id = '$id';
        $category = Category::find($id);
        $category->delete();
        return redirect('/category');
    }
}
