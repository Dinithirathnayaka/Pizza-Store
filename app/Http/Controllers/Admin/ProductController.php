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
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('admin.products.create',compact('categories'));
    }


    public function store(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'category_id' => 'required|exists:categories,id',
                'name' => 'required|string|max:255',
                'description'=> 'required|string|max:255',
                'imgurl' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'discount' => 'required|numeric|min:0|max:100',
                'price' => 'required|numeric|min:0',
            ]);

            // Upload and store the image
            if ($request->hasFile('imgurl')) {

                $image=$request->imgurl;
                $imagename=time().'.'.$image->getClientOriginalExtension();
                // return ($imagename);
                $request->imgurl->move('products',$imagename);

            }



            // Create a new product
            $product = new Product();
            $product->category_id = $validatedData['category_id'];
            $product->name = $validatedData['name'];
            $product->imgurl = $imagename; // Store the image path
            $product->discount = $validatedData['discount'];
            $product->price = $validatedData['price'];
            $product->description=$validatedData['description'];
            $product->save();

            return redirect()->route('admin.product')
                ->with('success', 'Product added successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => 'An error occurred while processing your request.'])->withInput();
        }
    }



    public function show($id)
    {
        // Your code to display details of a specific product
    }

    public function edit($id)
    {

        $categories = Category::all();

        $product = Product::findOrFail($id);
        return view('admin.products.edit', compact('product','categories'));
    }


    public function update(Request $request, $id)
    {
        try {
            $product = Product::findOrFail($id);

            $validatedData = $request->validate([
               'category_id' => 'required|exists:categories,id',
                'name' => 'required|string|max:255',
                'description'=> 'required|string|max:255',
                'imgurl' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
                'discount' => 'required|numeric|min:0|max:100',
                'price' => 'required|numeric|min:0',
            ]);


            $product->category_id = $validatedData['category_id'];
            $product->name = $validatedData['name'];
            $product->discount = $validatedData['discount'];
            $product->price = $validatedData['price'];
            $product->description=$validatedData['description'];

            if ($request->hasFile('imgurl')) {
                $image = $request->imgurl;
                $imagename = time().'.'.$image->getClientOriginalExtension();
                $request->imgurl->move('products', $imagename);
                $product->imgurl = $imagename;
            }

            // Save the changes
            $product->save();
            return redirect()->route('admin.product')
                ->with('success', 'Product updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => 'An error occurred while processing your request.'])->withInput();
        }
    }

    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();
                return redirect()->route('admin.product')
                    ->with('success', 'Category deleted successfully.');
           } catch (\Throwable $th) {
                return redirect()->route('admin.product')
                ->with('success', 'Category deleted failed.');
           }

    }
}
