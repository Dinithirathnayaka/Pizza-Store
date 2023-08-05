<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class MenuController extends Controller
{
    public function index()
    {

        $products=Product::paginate(5);
        $categories = Category::all();

        return view('menu', compact('products', 'categories'));
    }
}
