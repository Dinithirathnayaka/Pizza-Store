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
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255',
            'description' => 'required',
        ]);

        try {
            $category = Category::create($validatedData);

            return redirect()->route('admin.category')
                ->with('success', 'Category created successfully.');
        } catch (\Throwable $th) {
            return redirect()->route('admin.category.create')
                ->with('fail', 'Category created failed.');
        }


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
       try {
        $category = Category::findOrFail($id);
        $category->delete();
            return redirect()->route('admin.category')
                ->with('success', 'Category deleted successfully.');
       } catch (\Throwable $th) {
            return redirect()->route('admin.category')
            ->with('success', 'Category deleted failed.');
       }
    }
}
