<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\OrderEmail;
use App\Models\Order;
use App\Models\Order_item;
use App\Models\Rider;
use App\Services\CartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class OrdersController extends Controller
{

    public function __construct()
    {

    }


    public function index()
    {
        $orders = Order::where('orderstatus', 0)
                       ->orWhere('orderstatus', 1)
                       ->paginate(15);

        return view('admin.orders.index', compact('orders'));
    }




    public function create(CartService $cart)
    {
        $items = $cart->getItems();
        $user = Auth::user();
        return view('user.placeorder', compact('items','user'));
    }

    public function show($id)
    {

        $order = Order::find($id);
        $orderitems=$order->orderItems;


       return view('admin.orders.show', compact('order','orderitems'));
    }

    public function showcomplete($id)
    {
        $riders = Rider::all();
        $order = Order::find($id);
        $orderitems=$order->orderItems;


       return view('admin.orders.complete', compact('riders','order','orderitems'));
    }



    public function store(Request $request, CartService $cart)
    {
        try {
            $validatedData = $request->validate([
                'address' => 'required|string|max:255',
                'mobile_number' => 'required|string|max:255',
                'cusname' => 'required|string|max:255',
                'note' => 'nullable|string|max:255',

            ]);
            $items = $cart->getItems();

            $totalbill = 0.0;
            $totaldiscount = 0.0;

            foreach ($items as $item) {
                $prod = $item['product'];
                $qty = $item['quantity'];
                $tbill = $prod->price * $qty;
                $tdis = ($prod->price * (($prod->discount) / 100)) * $qty;
                $totalbill += $tbill;
                $totaldiscount += $tdis;
            }


            $order = new Order();
            $order->address = $validatedData['address'];
            $order->mobile_number = $validatedData['mobile_number'];
            $order->cusname = $validatedData['cusname'];
            $order->note = $validatedData['note'];
            $order->user_id = auth()->user()->id;
            $order->total = $totalbill - $totaldiscount;
            $order->discount = $totaldiscount;
            $order->save();

            foreach ($items as $item) {
                Order_item::create([
                    'qty' => $item['quantity'],
                    'total' => $item['product']->price,
                    'discount' => $item['product']->discount,
                    'order_id' => $order->id,
                    'product_id' => $item['product']->id,
                ]);
            }
            $cart->clear();
            return redirect()->route('cart.index')->with('success', 'Order created successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Throwable $th) {
            return $th;
            return redirect()->back()->withErrors(['error' => 'An error occurred while processing your request.'])->withInput();
        }
    }



        public function update(Request $request, $id)
    {
        try {
            $validatedData = $request->validate([
                'status' => 'required|integer',
                'rider_id' => 'nullable|exists:riders,id',
            ]);
            // return $validatedData;
            $order = Order::findOrFail($id);
            $order->orderstatus = $validatedData['status'];
            $order->rider_id = $validatedData['rider_id'];
            $order->save();
            return redirect()->route('admin.orders')->with('success', 'Order updated successfully.');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Throwable $th) {
            return redirect()->back()->withErrors(['error' => 'An error occurred while processing your request.'])->withInput();
        }
    }
    public function complete(Request $request, $id)
        {
            try {
            $validatedData = $request->validate([
                'status' => 'required|integer',
                'rider_id' => 'exists:riders,id',
            ]);

            $order = Order::findOrFail($id);
            $order->orderstatus = $validatedData['status'];
            $order->rider_id = $validatedData['rider_id'];
            $order->save();

            Mail::to( $order->user->email)->send(new OrderEmail($order,"Order Status"));


            return redirect()->route('admin.orders')->with('success', 'Order updated successfully.');
    } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
     } catch (\Throwable $e) {
            return redirect()->back()->withErrors(['error' => 'An error occurred while processing your request.'])->withInput();
     }
    }

    public function orderhistory()
    {
        $orders = Order::whereNotIn('orderstatus', [0, 1]) ->paginate(15);;
        return view('admin.orders.orderhistory', compact('orders'));
    }
}
