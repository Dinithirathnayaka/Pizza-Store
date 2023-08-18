@extends('layouts.admin')

@section('content')
    <div class="rightnav-header">
        <span class="ms-1 font-weight-bold light">Order</span>


    </div>
    <hr style="color: #fff" />


    <div class="ordersummary">
        <div class="leftsummary">
            <span class="ms-1 font-weight-bold light">Order Summary</span>
            <div class="row">
                <div class="col-4">Order_ID :</div>
                <div class="col-5">001</div>
            </div>
            <div class="row">
                <div class="col-4">Date :</div>
                <div class="col-5">2023/08/24</div>
            </div>
            <div class="row">
                <div class="col-4">Customer Name :</div>
                <div class="col-5">Dinithi</div>
            </div>
            <div class="row">
                <div class="col-4">Telephone Number :</div>
                <div class="col-5">0570000000</div>
            </div>
            <div class="row">
                <div class="col-4">Discount :</div>
                <div class="col-5">3%</div>
            </div>
            <div class="row">
                <div class="col-4">Total Price :</div>
                <div class="col-5">3000.00</div>
            </div>

        </div>
        <div class="rightsummary">
            <span class="ms-1 font-weight-bold light">Rider Details</span>
            <form action="">
                <label for="riders">Choose a Rider:</label>
                <select name="riders" id="cars">
                    <option value="" disabled selected>Select a sider</option>
                    @foreach ($riders as $rider)
                        <option value="{{ $rider->id }}">{{ $rider->name }}</option>
                    @endforeach
                </select>
                <br><br>
                <input type="submit" value="Accept Order">
            </form>
        </div>
    </div>

    <div class="orderItems">
        <table class="table  text-center" border="2" style="width: 100%">


            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Image</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Product Id</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product Name
                    </th>
                    <th class="text-secondary opacity-7">Discount</th>
                    <th class="text-secondary opacity-7">Price</th>
                    <th class="text-secondary opacity-7">Bill price</th>
                    <th class="text-secondary opacity-7">Quantity</th>
                </tr>
            </thead>


            <tbody>
                @foreach ($orderitems as $item)
                    <tr>
                        <td>
                            <img src="{{ asset('products/.$item->product->imgurl') }}" class="productimg" alt="product">
                        </td>
                        <td>{{ $item->product->id }}</td>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->product->discount }}%</td>
                        <td>{{ $item->product->price }}</td>
                        <td>{{ round($item->product->price - $item->product->price * ($item->product->discount / 100), 2) }}
                        </td>
                        <td>10</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('styles')
    <link href="{{ asset('css/order.css') }}" rel="stylesheet">
@endsection
