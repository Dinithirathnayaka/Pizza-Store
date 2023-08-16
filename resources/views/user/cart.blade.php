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

<div class="slider" style="background-image: linear-gradient(to bottom, transparent, #231F1F),url(images/bg_1.jpg);">
    <!-- fade css -->
    <div class="myslide ">
        <div class="txt">
            <p class="text-center">Welcome</p>
            <h1 class="text-center"> WE COOKED YOUR DESIRED<br>PIZZA RECIPE</h1>
            <p class="text-center mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="orderbtn mx-auto d-block text-center">Order Now</a> </p>
        </div>

    </div>

    <div class="myslide ">
        <div class="txt">
            <span class="subheading">Crunchy</span>
            <h1 class="mb-4">Italian Pizza</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="orderbtn mx-auto d-block text-center">Order Now</a> </p>
        </div>
        <img src="{{ url('/images/bg_1.png') }}"  class="sliderimg" style="width: 100%; height: 100%;">
    </div>

    <div class="myslide">
        <div class="txt">
            <span class="subheading">Crunchy</span>
            <h1 class="mb-4">Italian Burger</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="orderbtn mx-auto d-block text-center">Order Now</a> </p>
        </div>
        <img src="{{ url('/images/burger-1.jpg') }}"  class="sliderimg" style="width: 100%; height: 100%; border-radius:50% ;">
    </div>

    <div class="myslide">
        <div class="txt">
            <span class="subheading">Delicious</span>
            <h1 class="mb-4">Italian Pasta</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="orderbtn mx-auto d-block text-center">Order Now</a> </p>
        </div>
        <img src="{{ url('/images/pasta-1.jpg') }}"  class="sliderimg" style="width: 100%; height: 100%; border-radius:50% ;">
    </div>

    <div class="myslide">
        <div class="txt">
            <span class="subheading">Delicious</span>
            <h1 class="mb-4">Lime Juice</h1>
            <p class="mb-4 mb-md-5">A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
            <p><a href="#" class="orderbtn mx-auto d-block text-center">Order Now</a> </p>
        </div>
        <img src="{{ url('/images/drink-1.jpg') }}"  class="sliderimg" style="width: 100%; height: 100%; border-radius:50% ;">
    </div>



    <!-- /fade css -->

    <!-- onclick js -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
      <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="dotsbox" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>

    </div>

</div>

<div class="cartmain">
    <h5  class="cart-title">Your Cart</h5>

    <div class="cart_container">


        <div class="cartconLeft">
            <hr/>
             <div class="cart">
            <div class="cartLeft"><img src="{{ asset('images/pasta-1.jpg') }}" class="cartimg" alt="cartimg"></div>
            <div class="cartMiddle"><p>loremmmmmmmmmmmmmmmmmmmmmmmmmmm fhfdhgefghgfhf hgjdgg</p>Rs.2000.00<br><br><span class="cartpreprice">Rs.2800.00</span><span class="discount">3%</span></div>
            <div class="cartRight p-3"> <img src="{{ asset('images/bin.png') }}" class="bin" alt=""><br/><button class="minmax">-</button> 1 <button  class="minmax">+</button></div>
        </div>
        <hr/>
        <div class="cart">
            <div class="cartLeft"><img src="{{ asset('images/pasta-2.jpg') }}" class="cartimg" alt="cartimg"></div>
            <div class="cartMiddle"><p>loremmmmmmmmmmmmmmmmmmmmmmmmmmm fhfdhgefghgfhf hgjdgg</p>Rs.2000.00<br><br><span class="cartpreprice">Rs.2800.00</span> <span class="discount">3%</span></div>
            <div class="cartRight p-3"> <img src="{{ asset('images/bin.png') }}" class="bin" alt=""><br/><button class="minmax">-</button> 1 <button  class="minmax">+</button></div>
        </div>
        <hr/>
        <div class="cart">
            <div class="cartLeft"><img src="{{ asset('images/pasta-2.jpg') }}" class="cartimg" alt="cartimg"></div>
            <div class="cartMiddle"><p>loremmmmmmmmmmmmmmmmmmmmmmmmmmm fhfdhgefghgfhf hgjdgg</p>Rs.2000.00<br><br><span class="cartpreprice">Rs.2800.00</span> <span class="discount">3%</span></div>
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
