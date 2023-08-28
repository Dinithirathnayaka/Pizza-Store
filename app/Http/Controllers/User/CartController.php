<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Services\CartService;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(CartService $cart)
    {
        $items = $cart->getItems();
        return view('user.cart', compact('items'));
    }

    public function add(Request $request, Product $product, CartService $cart)
    {

        try {
            $quantity = $request->input('quantity', 1);
            $cart->add($product, $quantity);
            return redirect()->route('cart.index')->with('success', 'Product added to cart.');
        } catch (\Throwable $th) {
           return $th;
        }


    }

    public function addAjx(Request $request, CartService $cart)
{
    try {

        $productData = $request->input('product');
        $product = json_decode($productData, true); // Convert JSON data to associative array
        $productModel = Product::find($product['id']);
        $quantity = 1;
        $cart->add($productModel, $quantity);
        return "ok";
    } catch (\Throwable $th) {
        return $th;
    }
}


    public function update(Request $request, Product $product, CartService $cart)
    {
        $quantity = $request->input('quantity',0);
        $cart->updateQuantity($product->id, $quantity);

        return redirect()->route('cart.index')->with('success', 'Cart updated.');
    }

    public function remove(Product $product, CartService $cart)
    {
        $cart->remove($product->id);
        return redirect()->route('cart.index')->with('success', 'Product removed from cart.');
    }

    public function clear(CartService $cart)
    {
        $cart->clear();
        return redirect()->route('cart.index')->with('success', 'Cart cleared.');
    }















}
