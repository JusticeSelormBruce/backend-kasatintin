<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\shared\MasterCategoriesController;
use App\Http\Resources\CategoriesResource;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $master_categories_controller;

    public  function  __construct()
    {
        $this->master_categories_controller = new MasterCategoriesController();
    }

    public function index()
    {
        return  $this->master_categories_controller->index();
    }

    public function posts($id)
    {
        return $this->master_categories_controller->posts($id);
    }
}
