<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class MenuController extends Controller
{
    public function index()
    {

        $products=Product::paginate(6);
        $no_pgproducts=Product::all();
        $categories = Category::all();

        return view('menu', compact('products', 'categories','no_pgproducts'));
    }


    public function fetchProductsByCategory(Request $request)
    {
        $categoryId = $request->input('id');
        $products = Product::where('category_id', $categoryId)->get();

        return response()->json($products);
    }
}
