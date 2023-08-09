<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category', compact('categories'));
    }

    public function create()
    {
        return view('admin.add-category');
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
