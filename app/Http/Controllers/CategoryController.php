<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Category;

class CategoryController extends Controller
{

    public function categories() {
        return view('category', [
            "title" => "Note APP | Categories",
            "categories" => Category::all()
        ]);
    }

    // explisit route binding
    public function categoriesById(Category $category) {
        return view('index', [
            "title" => "Note APP",
            "notes" => $category->notes,
            "by_category" => $category->name
        ]);
    }
}
