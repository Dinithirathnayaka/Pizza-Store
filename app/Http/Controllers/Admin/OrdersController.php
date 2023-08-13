<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class OrdersController extends Controller
{
    public function orders()
    {
        return view('admin.orders.index');
    }



    public function create(CartService $cart)
    {
        $items = $cart->getItems();
        return view('user.placeorder',compact('items'));
    }

    public function store(Request $request,CartService $cart)
{
    try {
        $validatedData = $request->validate([
            'address' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:255',
            'cusname' => 'required|string|max:255',
            'note' => 'nullable|string|max:255',

        ]);
        $items = $cart->getItems();

        $totalbill=0.0;
        $totaldiscount=0.0;

        foreach ($items as $item) {
          $prod= $item['product'];
          $qty=$item['quantity'];
          $tbill=$prod->price*$qty;
          $tdis= ($prod->price*(($prod->discount )/100))*$qty;
          $totalbill+=$tbill;
          $totaldiscount+=$tdis;
        }


        $order = new Order();
        $order->address = $validatedData['address'];
        $order->mobile_number = $validatedData['mobile_number'];
        $order->cusname = $validatedData['cusname'];
        $order->note = $validatedData['note'];
        $order->user_id = auth()->user()->id;
        $order->total=$totalbill-$totaldiscount;
        $order->discount=$totaldiscount;



        $order->save();


        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    } catch (ValidationException $e) {
        return redirect()->back()->withErrors($e->errors())->withInput();
    } catch (\Throwable $th) {
        return redirect()->back()->withErrors(['error' => 'An error occurred while processing your request.'])->withInput();
    }
}
}
