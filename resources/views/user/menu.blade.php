@extends('layouts.user')

@section('content')

    <section class=" home-slider " style="background-image: url(images/menu.jpg);">

        <div class="slider-item" >


                <div class="row slider-text justify-content-center align-items-center">

                    <div class="aboutdiv text-center ">
                        <h1 class="mb-3 mt-5 bread">Menu</h1>
                        <p class="breadcrumbs"><span class="mr-2 homeabout"><a
                                    href="index.html">Home</a></span> <span>Menu</span></p>
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
                            <img src={{ $product->imgurl }} class="menupizza" />
                        </div>
                    </div>
                    <div class=" text-div ">
                        <div class="services-wrap ">
                            <div class="text">
                                <h4 class="mb-3">{{ $product->name }}</h4>
                                <p>{{ $product->description }}</p>
                                <p><span class="price">${{ $product->price }} </span> </p>
                                    <p><a href="{{ route('cart.add', ['product' => $product]) }}" class=" ml-2 btn-order btn-white btn-outline-white ">Add to cart</a></p>
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


        <div class="menus pt-3 ">
            <div class="row vw-100">
                <div class="col-lg-4 col-sm-12"><img src="images/pizza-9.jpg" class="menusleftimg" /></div>

                <div class="col-lg-8 col-sm-12 pb-3">
                    <div class=" d-flex ">
                        <div class="btnlist mb-1 mt-3">

                            @foreach ($categories as $category)
                                <button onclick="fetchProductsByCategory({{ $category->id }})">{{ $category->name }}</button>
                            @endforeach

                        </div>
                    </div>

                    <div class="slider" id="slider-id">

                        <input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav" />
                        <input type="radio" name="slider" title="slide2" class="slider__nav" />
                        <input type="radio" name="slider" title="slide3" class="slider__nav" />
                        <input type="radio" name="slider" title="slide4" class="slider__nav" />

                        <div class="slider__inner">
                            <div class="slider__contents">
                                <div class="row">
                                    <div class="col-md-4 text-center">

                                        <div class="menu-wrap">
                                            <img src="${product.imgurl}" class="menu-img" />
                                            <div class="text">
                                                <h5>"dfdf"</h5>
                                                <p style="color: #808080">sddsd</p>
                                                <p class="price"><span style="color: #ffc107">rsdsd</span></p>
                                                <p><a href="#" class="btn-service mb-3">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <img src="${product.imgurl}" class="menu-img" />
                                            <div class="text">
                                                <h5>"dfdf"</h5>
                                                <p style="color: #808080">sddsd</p>
                                                <p class="price"><span style="color: #ffc107">rsdsd</span></p>
                                                <p><a href="#" class="btn-service mb-3">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <img src="${product.imgurl}" class="menu-img" />
                                            <div class="text">
                                                <h5>"dfdf"</h5>
                                                <p style="color: #808080">sddsd</p>
                                                <p class="price"><span style="color: #ffc107">rsdsd</span></p>
                                                <p><a href="#" class="btn-service mb-3">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="slider__contents">
                                <div class="row">
                                    <div class="col-md-4 text-center">

                                        <div class="menu-wrap">
                                            <img src="${product.imgurl}" class="menu-img" />
                                            <div class="text">
                                                <h5>"dfdf"</h5>
                                                <p style="color: #808080">sddsd</p>
                                                <p class="price"><span style="color: #ffc107">rsdsd</span></p>
                                                <p><a href="#" class="btn-service mb-3">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <img src="${product.imgurl}" class="menu-img" />
                                            <div class="text">
                                                <h5>"dfdf"</h5>
                                                <p style="color: #808080">sddsd</p>
                                                <p class="price"><span style="color: #ffc107">rsdsd</span></p>
                                                <p><a href="#" class="btn-service mb-3">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <div class="menu-wrap">
                                            <img src="${product.imgurl}" class="menu-img" />
                                            <div class="text">
                                                <h5>"dfdf"</h5>
                                                <p style="color: #808080">sddsd</p>
                                                <p class="price"><span style="color: #ffc107">rsdsd</span></p>
                                                <p><a href="#" class="btn-service mb-3">Add to cart</a></p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="slider__contents"><i class="slider__image fa fa-television"></i>
                                <h2 class="slider__caption">television</h2>
                                <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At
                                    cupiditate omnis possimus illo quos, corporis minima!</p>
                            </div>
                            <div class="slider__contents"><i class="slider__image fa fa-diamond"></i>
                                <h2 class="slider__caption">diamond</h2>
                                <p class="slider__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At
                                    cupiditate omnis possimus illo quos, corporis minima!</p>
                            </div>
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
                var carouselContainer = $('#slider-id');

                // Clear existing content
                carouselContainer.empty();

                let catcount = Math.floor(data.length / 3);
                var slideHtml = '';
                for (var i = 0; i < data.length; i += 3) {
                    if (i == 0) {
                        slideHtml +=
                            '<input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav" /> ';
                    } else {
                        slideHtml +=
                            '<input type="radio" name="slider" title="slide4" class="slider__nav" /> ';
                    }
                }
                slideHtml += '<div class="slider__inner">';

                // Group products into sets of 3
                console.log(carouselContainer);

                for (var i = 0; i < data.length; i += 3) {
                    var productsSet = data.slice(i, i + 3);
                    // Generate carousel slide HTML
                    slideHtml += `
                    <div class="slider__contents">
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

                    // carouselContainer.show();
                }
                slideHtml += '</div>';
                console.log(slideHtml);
                carouselContainer.append(slideHtml);

                // Show the carousel container
                carouselContainer.show();
            },
            error: function(error) {
                console.log("ERROR");
                console.log(error);
            }
        });
    }


    // function fetchProductsByCategory(categoryId) {
    //     console.log("IN-----------IN");
    //     $.ajax({
    //         url: '/fetch-products',
    //         type: 'GET',
    //         data: {
    //             id: categoryId
    //         },
    //         success: function(data) {
    //             console.log(data);

    //             // Select the carousel container
    //             var carouselContainer = $('#carousel-container');
    //             console.log(carouselContainer);
    //             // Clear existing content
    //             carouselContainer.empty();

    //             // Group products into sets of 3
    //             for (var i = 0; i < data.length; i += 3) {
    //                 var productsSet = data.slice(i, i + 3);

    //                 // Generate carousel slide HTML
    //                 var slideHtml = `
    //                     <div class="carousel-item">
    //                         <div class="row">
    //                             ${productsSet.map(function(product) {
    //                                 return `
    //                                     <div class="col-md-4 text-center">
    //                                         <div class="menu-wrap">
    //                                             <img src="${product.imgurl}" class="menu-img" />
    //                                             <div class="text">
    //                                                 <h5>${product.name}</h5>
    //                                                 <p style="color: #808080">${product.description}</p>
    //                                                 <p class="price"><span style="color: #ffc107">$${product.price}</span></p>
    //                                                 <p><a href="#" class="btn-service mb-3">Add to cart</a></p>
    //                                             </div>
    //                                         </div>
    //                                     </div>
    //                                 `;
    //                             }).join('')}
    //                         </div>
    //                     </div>
    //                 `;
    //                 // console.log(slideHtml);
    //                 carouselContainer.append(slideHtml);
    //                 carouselContainer.show();

    //             }

    //             // Show the carousel container
    //             carouselContainer.show();
    //         },
    //         error: function(error) {
    //             console.log("ERROR  ");
    //             console.log(error);
    //         }
    //     });
    // }
</script>
