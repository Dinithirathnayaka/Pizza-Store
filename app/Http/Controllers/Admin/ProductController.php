<?php

namespace App\Http\Controllers\Admin;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Validation\ValidationException;
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
        $categories = Category::all();

        return view('admin.add-product',compact('categories'));
    }


    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'category_id' => 'required|exists:categories,id',
                'name' => 'required|string|max:255',
                'imgurl' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'discount' => 'required|numeric|min:0|max:100',
                'price' => 'required|numeric|min:0',
            ]);

            // Upload and store the image
            if ($request->hasFile('imgurl')) {
                $imagePath = $request->file('imgurl')->store('product_images', 'public');
            }

            // Create a new product
            $product = new Product();
            $product->category_id = $validatedData['category_id'];
            $product->name = $validatedData['name'];
            $product->imgurl = $imagePath; // Store the image path
            $product->discount = $validatedData['discount'];
            $product->price = $validatedData['price'];
            $product->save();

            return redirect()->route('admin.products.index')
                ->with('success', 'Product added successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Throwable $th) {
            // Handle other exceptions or errors
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
        // Your code to delete a product
    }
}
