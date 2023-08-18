<!-- resources/views/cart/index.blade.php -->

@extends('layouts.user')

@section('content')
    <section class="home-slider owl-carousel img" style="background-image: url(images/bg_1.jpg);">

        <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Cart</h1>
                        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Cart</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </section>



    <div class="cartmain">
        <h5 class="cart-title">Your Cart</h5>

        <div class="cart_container">


            <div class="cartconLeft">
                <hr />

                @php
                    $total = 0.0;
                    $discount = 0.0;
                @endphp
                @foreach ($items as $productId => $item)
                    <div class="cart">
                        <div class="cartLeft"><img src="{{ asset('images/pasta-1.jpg') }}" class="cartimg" alt="cartimg">
                        </div>
                        <div class="cartMiddle">
                            <p>{{ $item['product']->name }}</p>Rs.{{ $item['product']->price }}<br><br><span
                                class="cartpreprice">Rs.{{ round($item['product']->price - ($item['product']->price * $item['product']->discount) / 100, 2) }}</span><span
                                class="discount">{{ $item['product']->discount }}%</span>
                        </div>

                        <div class="cartRight p-3">
                            <form action="{{ route('cart.remove', $item['product']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="image" src="{{ asset('images/bin.png') }}" alt="Delete" class="bin">
                            </form>

                            <br />
                            <div style="display: flex">
                                <form action="{{ route('cart.update', $item['product']) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="quantity" value="{{ -1 }}">
                                    <button class="minmax" type="submit">-</button>
                                </form>

                                {{ $item['quantity'] }}


                                <form action="{{ route('cart.update', $item['product']) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="quantity" value="{{ 1 }}">
                                    <button class="minmax" type="submit">+</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <hr />
                    @php
                        $total += $item['product']->price;
                        $discount += $item['product']->price * ($item['product']->discount / 100);
                    @endphp
                @endforeach
            </div>
            <div class="cartconRight">
                <h5>Order Summary</h5>
                <p class="sub" style="margin-bottom: 20px">Sub Total<span class="ordersum">Rs.
                        {{ round($total, 2) }}</span></p>
                <hr />
                <p class="sub" style="margin-bottom: 20px">Discount<span class="ordersum">Rs.
                        - {{ round($discount, 2) }}</span></p>
                <hr />
                <p>Total<span class="ordersum">Rs. {{ round($total - $discount, 2) }}</span></p>
                <a href="{{ route('orders.create') }}"><button class="placeorderbtn ">Place
                        Order</button></a>


            </div>



            {{-- <table class="table text-center" border="2" style="width: 100%">
             --}}
            {{-- <thead>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead> --}}
            {{-- <tbody>
                @foreach ($items as $productId => $item)
                    <tr>
                        <td>{{ $item['product']->name }}</td>
                        <td>
                            <form action="{{ route('cart.update', $item['product']) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input type="number" name="quantity" value="{{ $item['quantity'] }}">
                                <button type="submit">Update</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('cart.remove', $item['product']) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody> --}}
            {{-- </table> --}}


            {{-- <form action="{{ route('cart.clear') }}" method="POST" class="text-end pb-5">
            @csrf
            @method('DELETE')
            <button type="submit" class="clear-btn">Clear Cart</button>
        </form>
        @if (!$items->isEmpty())

            <a href="{{ route('orders.create') }}" class="addbtn">Complete Order</a>
        @endif --}}
        </div>

    </div>
@endsection
