<!-- resources/views/cart/index.blade.php -->

@extends('layouts.user')

@section('content')

{{-- <div class="form-check">
    <input class="form-check-input" type="checkbox" name="selectall"
        {{ old('selectall') ? 'checked' : '' }}>

    <label class="form-check-label" for="selectall">
        {{ __('Select all') }}
    </label>
</div> --}}

<div class="cartmain">
    <h5  class="cart-title">Your Cart</h5>

    <div class="cart_container">


        <div class="cartconLeft">
            <hr/>
             <div class="cart">
            <div class="cartLeft"><img src="{{ asset('images/pasta-1.jpg') }}" class="cartimg" alt="cartimg"></div>
            <div class="cartMiddle"><p>loremmmmmmmmmmmmmmmmmmmmmmmmmmm fhfdhgefghgfhf hgjdgg</p>Rs.2000.00<br><br><span class="price">Rs.2800.00</span><span class="discount">3%</span></div>
            <div class="cartRight p-3"> <img src="{{ asset('images/bin.png') }}" class="bin" alt=""><br/><button class="minmax">-</button> 1 <button  class="minmax">+</button></div>
        </div>
        <hr/>
        <div class="cart">
            <div class="cartLeft"><img src="{{ asset('images/pasta-2.jpg') }}" class="cartimg" alt="cartimg"></div>
            <div class="cartMiddle"><p>loremmmmmmmmmmmmmmmmmmmmmmmmmmm fhfdhgefghgfhf hgjdgg</p>Rs.2000.00<br><br><span class="price">Rs.2800.00</span> <span class="discount">3%</span></div>
            <div class="cartRight p-3"> <img src="{{ asset('images/bin.png') }}" class="bin" alt=""><br/><button class="minmax">-</button> 1 <button  class="minmax">+</button></div>
        </div>
        <hr/>
        <div class="cart">
            <div class="cartLeft"><img src="{{ asset('images/pasta-2.jpg') }}" class="cartimg" alt="cartimg"></div>
            <div class="cartMiddle"><p>loremmmmmmmmmmmmmmmmmmmmmmmmmmm fhfdhgefghgfhf hgjdgg</p>Rs.2000.00<br><br><span class="price">Rs.2800.00</span> <span class="discount">3%</span></div>
            <div class="cartRight p-3"> <img src="{{ asset('images/bin.png') }}" class="bin" alt=""><br/><button class="minmax">-</button> 1 <button  class="minmax">+</button></div>
        </div>
        <hr/>
    </div>
        <div class="cartconRight">
            <h5>Order Summary</h5>
            <p class="sub" style="margin-bottom: 20px">Sub Total<span class="ordersum">Rs.3000.00</span></p>
            <hr/>
            <p >Total<span class="ordersum">Rs.3000.00</span></p>
            <button class="placeorderbtn">Place Order</button>

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
