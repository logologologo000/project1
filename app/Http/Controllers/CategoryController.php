<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){

        $data = [
            'categories' => Category::all()
        ];
        return view('category.index',$data);
    }

    public function create(){

        return view('category.create');
    }

    public function store(Request $request){
        $name = $request->input('name');
        $category = new Category();
        $category->name = $name;
        $category->save();
        return redirect('/category');
    }
}
