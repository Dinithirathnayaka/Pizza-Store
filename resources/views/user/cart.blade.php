@extends('layouts.user')

@section('content')
    <div class="cart_container">
        <div class="cartleft_container">
            <div class="d-flex justify-content-between align-items-center">
                <span>
                    <h5 class="cart-title ">Your Cart</h5>
                </span>
                <a class="explore-link" href="{{ route('menu') }}">EXPLORE MENU</a>

            </div>

            <hr />
            <form action="{{ route('cart.clear') }}" method="POST">
                @csrf
                @method('PATCH')
                <button class="clearallbtn"> Clear All</button>
            </form>


            @php
                $total = 0.0;
                $discount = 0.0;
            @endphp

            <div class="cartcard">
                <div class="card-body">

                    {{-- @if (is_null($items))
                        <lottie-player src="<URL HERE>" background="transparent" speed="1"
                            style="width: 300px; height: 300px;" loop controls autoplay></lottie-player>
                    @else
                    @endif --}}

                    <table class="carttable" style="width: 100%">


                        <thead class="mb-3" style="margin-bottom: 50px">
                            <tr>

                                <th
                                    class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2 text-center mb-3">
                                    Product Details</th>
                                <th
                                    class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 text-center mb-3">
                                    Quantity</th>
                                <th class="text-secondary opacity-7 text-center mb-3">Price</th>
                                <th class="text-secondary opacity-7 text-center mb-3">Total</th>
                                <th></th>

                            </tr>

                        </thead>


                        @foreach ($items as $productId => $item)
                            <tbody class="mt-3">

                                <tr class="contenttr">

                                    <td class=" row">
                                        <div class="col-md-5 imgcon"><img
                                                src={{ asset('products/' . $item['product']->imgurl) }} class="cartimgs"
                                                alt="cartimg"></div>
                                        <div class="col-md-5" style="justify-content: left">
                                            <p class="productname">{{ $item['product']->name }}</p><br>
                                            <p class="discount">{{ $item['product']->discount }}%</p>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="text-center quantiyselector">
                                            <form action="{{ route('cart.update', $item['product']) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="quantity" value="{{ -1 }}">
                                                <button class="minmax" type="submit">-</button>
                                            </form>
                                            <p style="color: #fff;margin:10px">{{ $item['quantity'] }}</p>

                                            <form action="{{ route('cart.update', $item['product']) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="quantity" value="{{ 1 }}">
                                                <button class="minmax" type="submit">+</button>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <p class="cartpreprice">
                                            Rs.{{ round($item['product']->price - ($item['product']->price * $item['product']->discount) / 100, 2) }}

                                    </td>
                                    <td class="text-center">
                                        <p class="cartpreprice">Rs.{{ $item['product']->price }}
                                    </td>
                                    <td>
                                        <form action="{{ route('cart.remove', $item['product']) }}" style="display: none;"
                                            method="POST" id="deleteForm">
                                            @csrf
                                            @method('DELETE')

                                        </form>


                                        <a style="" onclick="deleteprod()" id="deleteButton" class="viewbtn "><img
                                                src="images/bin.png" class="bin"></a>
                                    </td>
                                </tr>

                            </tbody>

                            @php
                                $total += $item['product']->price * $item['quantity'];
                                $discount += $item['product']->price * ($item['product']->discount / 100) * $item['quantity'];
                            @endphp
                        @endforeach

                    </table>


                </div>
            </div>

        </div>
        <div class="cartRight_container">

            <h5 style="margin-top: 80px">Order Summary</h5>
            <div class="row text-center">
                <div class="col-6">
                    <p class="sub">Sub Total</p>
                </div>
                <div class="col-6">
                    <p>Rs.{{ round($total, 2) }}</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-6">
                    <p class="sub">Discount</p>
                </div>
                <div class="col-6">
                    <p>-Rs.{{ round($discount, 2) }}</p>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-6">
                    <p class="sub">Total</p>
                </div>
                <div class="col-6">
                    <p>Rs. {{ round($total - $discount, 2) }}</p>
                </div>
            </div>
            <form action="{{ route('orders.create') }}" method="GET" class="text-center">
                @csrf <!-- Add this line for CSRF protection -->

                <button type="submit" class="placeorderbtn">Place Order</button>
            </form>


        </div>
    </div>
@endsection

@section('styles')
    <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
@endsection



<script>
    function deleteprod() {
        console.log("pressed");

        $("#deleteForm").submit();

    }
</script>
