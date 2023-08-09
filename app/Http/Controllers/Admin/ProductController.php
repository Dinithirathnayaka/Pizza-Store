<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function product()
    // {
    //     return view('admin.product');
    // }

    public function index()
    {
        // Your code to display a list of products

        $products=Product::paginate(5);
        return view('admin.product', compact('products'));
    }

    public function create()
    {
        return view('admin.add-product');
    }

    public function store(Request $request)
    {
        // Your code to store a new product
    }

    public function show($id)
    {
        // Your code to display details of a specific product
    }

    public function edit($id)
    {
        // Your code to show a form for editing a product
    }

    public function update(Request $request, $id)
    {
        // Your code to update a product
    }

    public function destroy($id)
    {
        // Your code to delete a product
    }
}
