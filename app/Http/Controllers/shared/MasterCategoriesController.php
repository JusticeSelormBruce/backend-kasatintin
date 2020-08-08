<?php

namespace App\Http\Controllers\shared;

use App\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoriesResource;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\PostResource;


class MasterCategoriesController extends Controller
{

    public   function index()
    {
        return  CategoryResource::collection(Category::paginate());
    }

    public function posts($id)
    {
      
        $category = Category::find($id);
        $posts = $category->posts;
        return  PostResource::collection($posts);
    }
}
