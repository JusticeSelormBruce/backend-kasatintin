<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\shared\MasterCategoriesController;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories  = Category::all();
        return view('model.category.index', compact('categories'));
    }

    public function show($id)
    {
        $category  = Category::findOrFail($id);
        return view('model.category.show', compact('category'));
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'title' => "required|unique:categories|string",
                'color' => "required|string"
            ]
        );
        Category::create($data);
        return back()->with('msg','Category Add Successfully');
    }
}
