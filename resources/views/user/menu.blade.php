@extends('layouts.user')

@section('content')
    <section class=" home-slider " style="background-image: url(images/menu.jpg);">

        <div class="slider-item">


            <div class="row slider-text justify-content-center align-items-center">

                <div class="aboutdiv text-center ">
                    <h1 class="mb-3 mt-5 bread">Menu</h1>
                    <p class="breadcrumbs"><span class="mr-2 homeabout"><a href="index.html">Home</a></span> <span>Menu</span>
                    </p>
                </div>

            </div>

        </div>
    </section>

    <section class="menupizzaimg">
        <div class="container">
            <div class="row justify-content-center mb-2 pb-3">
                <div class="col-md-7 heading-section  text-center p-3">
                    <h2 class="mb-4 pt-3 pb-3" style="color: #fff">Our Menu</h2>
                    <p style="color: #858585">Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia, there live the blind texts.</p>
                </div>
            </div>
        </div>

        <div class="main">

            @foreach ($products as $product)
                <div class="left">
                    <div class=" text-center p-3">
                        <div class="services-wrap ">
                            <img src={{ asset('products/' . $product->imgurl) }} class="menupizza" />
                        </div>
                    </div>
                    <div class=" text-div ">
                        <div class="services-wrap ">
                            <div class="text">
                                <h4 class="mb-3">{{ $product->name }}</h4>
                                <p>{{ $product->description }}</p>
                                <p><span class="pricebill">Rs {{ $product->price }} </span> <span class="price">Rs
                                        {{ round($product->price - ($product->price * $product->discount) / 100, 2) }}
                                    </span>
                                </p>
                                <p><a href="{{ route('cart.add', ['product' => $product]) }}"
                                        class=" ml-2 btn-order btn-white btn-outline-white ">Add to cart</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
        <div class="container">
            {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}

        </div>

        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section  text-center p-3">
                    <h2 class="mb-4 pt-3 pb-3" style="color: #fff">OUR MENU PRICING</h2>
                    <p style="color: #858585">Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia, there live the blind texts.</p>
                </div>
            </div>

            <div class="menurow">
                @php $counter = 0 @endphp
                @foreach ($no_pgproducts as $product)
                    @if ($counter < 8)
                        <div class="menudiv">
                            <div class="imgdiv"><img src={{ asset('products/' . $product->imgurl) }} class="menuimg" />
                            </div>
                            <div class="menucontent">
                                <div class="toprule">
                                    <div class="namepizza">{{ $product->name }}</div>
                                    <div class="pizzaprice"><span>------------------------</span> <span class="price">Rs
                                            {{ round($product->price - ($product->price * $product->discount) / 100, 2) }}
                                        </span>
                                    </div>
                                </div>
                                <div class="bottomrule">
                                    <p>{{ $product->description }}</p>
                                </div>
                            </div>
                        </div>
                        @php $counter++ @endphp <!-- Increment the counter variable -->
                    @endif
                @endforeach


            </div>


        </div>


        <div class="menus pt-3 ">
            <div class="row vw-100 text-center ">



                <div id="mbtnlist" class="btnlist mb-1 mt-3">

                    @foreach ($categories as $category)
                        <button onclick="fetchProductsByCategory({{ $category->id }})">{{ $category->name }}</button>
                    @endforeach

                </div>
            </div>
        </div>
        <div id="product-list" class="main">


            <!-- Product items will be displayed here -->

        </div>
        </div>
        </div>
        </div>


    </section>
@endsection

@section('styles')
    <link href="{{ asset('css/cart.css') }}" rel="stylesheet">
@endsection
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#mbtnlist button:first-child').addClass('checked');


        // Fetch and display products for the first category on page load
        @if ($categories !== null && $categories->isNotEmpty())
            fetchProductsByCategory({{ $categories->first()->id }});
        @endif
    });

    function fetchProductsByCategory(categoryId) {
        $.ajax({
            url: '/fetch-products',
            type: 'GET',
            data: {
                id: categoryId
            },
            success: function(data) {
                var productList = $('#product-list');
                productList.empty(); // Clear existing product list

                // Iterate through products and append to the product list
                data.forEach(function(product) {
                    var productHtml = `
                        <div class="left">
                            <div class="text-center p-3">
                                <div class="services-wrap">
                                    <img src="products/${ product.imgurl}" class="menupizza" />
                                </div>
                            </div>
                            <div class="text-div">
                                <div class="services-wrap">
                                    <div class="text">
                                        <h4 class="mb-3">${product.name}</h4>
                                        <p>${product.description}</p>
                                        <p> <span class="pricebill">Rs ${product.price}</span>
                                            <span class="price">Rs ${(product.price-(product.price*(product.discount/100))).toFixed(2)}</span></p>


                                        <p><a href="#" data-product='${JSON.stringify(product)}' class="ml-2 btn-order1 btn-white btn-outline-white">Add to cart</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    `;
                    productList.append(productHtml);
                });
            },
            error: function(error) {
                console.log("Error fetching products:", error);
            }
        });
    }


    $(document).on('click', '.btn-order1', function(event) {
        event.preventDefault();

        var productData = $(this).data('product');
        addToCart(productData);
    });

    function addToCart(product) {
        $.ajax({
            url: '/cart/addAjx',
            type: 'GET',
            data: {
                _token: '{{ csrf_token() }}',
                product: JSON.stringify(product)
            },
            success: function(response) {
                console.log("Product added to cart:", response);
                window.location.href = '{{ route('cart.index') }}';
            },
            error: function(error) {
                console.log("Error adding product to cart:", error);
            }
        });
    }
</script>
