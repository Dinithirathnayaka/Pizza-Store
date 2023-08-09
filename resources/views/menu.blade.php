@extends('layouts.frontend')

@section('content')
    <section class=" home-slider owl-carousel img" style="background-color: black;">

        <div class="slider-item" style="background-image: url(images/bg_3.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row slider-text justify-content-center align-items-center">

                    <div class="aboutdiv col-md-7 col-sm-12 text-center ftco-animate">
                        <h1 class="mb-3 mt-5 bread">Menu</h1>
                        <p class="breadcrumbs"><span class="mr-2 homeabout" style="color: #ffffff"><a
                                    href="index.html">Home</a></span> <span>About</span></p>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="menupizzaimg">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-3">
                <div class="col-md-7 heading-section  text-center p-3">
                    <h2 class="mb-4 pt-3 pb-3" style="color: #fff">Our Menu</h2>
                    <p style="color: #858585">Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia, there live the blind texts.</p>
                </div>
            </div>
        </div>

        <div class="main">
            @php $counter = 0 @endphp
            @foreach ($products as $product)
                @if ($counter < 6)
                    <div class="left">
                        <div class=" text-center p-3">
                            <div class="services-wrap ">
                                <img src={{ $product->imgurl }} class="menupizza" />
                            </div>
                        </div>
                        <div class=" text-div ">
                            <div class="services-wrap ">
                                <div class="text">
                                    <h3>{{ $product->name }}</h3>
                                    <p>{{ $product->description }}</p>
                                    <p><span class="price">${{ $product->price }} </span> <a href="#"
                                            class="ml-2 btn-order btn-white btn-outline-white ">Order</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    @php $counter++ @endphp <!-- Increment the counter variable -->
                @endif
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
                            <div class="imgdiv"><img src={{ $product->imgurl }} class="menuimg" /></div>
                            <div class="menucontent">
                                <div class="toprule">
                                    <div class="namepizza">{{ $product->name }}</div>
                                    <div class="pizzaprice"><span>------------------------</span>${{ $product->price }}
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


        <div class="menus pt-3">
            <div class="row">
                <div class="col-lg-4 col-sm-12"><img src="images/about.jpg" class="menusleftimg" /></div>
                <div class="col-lg-8 col-sm-12">
                    <div class="btnlist mb-3 mt-3">

                        @foreach ($categories as $category)
                            <button onclick="fetchProductsByCategory({{ $category->id }})">{{ $category->name }}</button>
                        @endforeach

                    </div>

                    <div id="carousel-container" style="display: none;">
                        <div id="carouselExample" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">

                            </div>
                            <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        </div>
        </div>


    </section>
@endsection

<script>
    function fetchProductsByCategory(categoryId) {
        console.log("IN-----------IN");
        $.ajax({
            url: '/fetch-products',
            type: 'GET',
            data: {
                id: categoryId
            },
            success: function(data) {
                console.log(data);

                // Select the carousel container
                var carouselContainer = $('#carousel-container');

                // Clear existing content
                carouselContainer.empty();

                // Group products into sets of 3
                for (var i = 0; i < data.length; i += 3) {
                    var productsSet = data.slice(i, i + 3);

                    // Generate carousel slide HTML
                    var slideHtml = `
                        <div class="carousel-item">
                            <div class="row">
                                ${productsSet.map(function(product) {
                                    return `
                                        <div class="col-md-4 text-center">
                                            <div class="menu-wrap">
                                                <img src="${product.imgurl}" class="menu-img" />
                                                <div class="text">
                                                    <h5>${product.name}</h5>
                                                    <p style="color: #808080">${product.description}</p>
                                                    <p class="price"><span style="color: #ffc107">$${product.price}</span></p>
                                                    <p><a href="#" class="btn-service mb-3">Add to cart</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    `;
                                }).join('')}
                            </div>
                        </div>
                    `;

                    carouselContainer.append(slideHtml);
                }

                // Show the carousel container
                carouselContainer.show();
            },
            error: function(error) {
                console.log("ERROR  ");
                console.log(error);
            }
        });
    }
</script>
