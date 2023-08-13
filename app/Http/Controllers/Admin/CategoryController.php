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
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {

        return view('admin.categories.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:categories|max:255',
            'description' => 'required',
        ]);

        try {
            Category::create($validatedData);

            return redirect()->route('admin.category')
                ->with('success', 'Category created successfully.');
        } catch (\Throwable $th) {
            return redirect()->route('admin.category.create')
                ->with('fail', 'Category created failed.');
        }


    }

    public function show($id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

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
