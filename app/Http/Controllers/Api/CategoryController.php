<?php

namespace App\Http\Controllers\Api;

use App\Model\Category;
use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getAll(Category $category)
    {
        return CategoryResource::collection(Category::all());
    }
}
