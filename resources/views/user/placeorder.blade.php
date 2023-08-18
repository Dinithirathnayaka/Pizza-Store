@extends('layouts.user')


@php
    $total = 0.0;
    $discount = 0.0;
    foreach ($items as $productId => $item) {
        $total += $item['product']->price;
        $discount += $item['product']->price * ($item['product']->discount / 100);
    }

@endphp




@section('content')
    <section class="contactinfo " style="height: 100vh,padding-top:200px">
        <div class="container newcontainer mt-5">
            <div class="row block-9">
                <div class="col-md-6 col-xs-12 placeorder-info mx-auto d-block " style="margin-right: 50px">
                            <h3 class="" style="color: #fac564">Summary of the Order </h3>

                        {{-- <div class="col-md-12 mb-4">
                            <h2 class="h4" style="color: #ffffff">{{ round($total - $discount, 2) }}</h2>
                        </div> --}}

                        <div class="ordersum p-3" style="background-color: #212529">
                            <div class="row mb-3 ">
                                <div class="col-4" style="color: #ffffff">No of Items :</div>
                                <div class="col-6 text-end" style="color: #fac564">10</div>
                            </div>
                            <hr style="color: #ffffff">
                            <div class="row mb-3">
                                <div class="col-4" style="color: #ffffff">Sub Total :</div>
                                <div class="col-6" style="color: #fac564">10</div>
                            </div>
                            <hr style="color: #ffffff">
                            <div class="row mb-3">
                                <div class="col-4" style="color: #ffffff">Disccount :</div>
                                <div class="col-6" style="color: green">10%</div>
                            </div>
                            <hr style="color: #ffffff">
                            <div class="row mb-3">
                                <div class="col-4" style="color: #ffffff">Total :</div>
                                <div class="col-6" style="color: #fac564">10</div>
                            </div>
                        </div>



                </div>

                <div class="col-md-6 col-xs-12 ">
                    <form action="{{ route('orders.store') }}" method="post" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="cusname" class="form-controlnew" placeholder="Your Name"
                                        required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="mobile_number" class="form-controlnew"
                                        placeholder="Mobile No" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-controlnew" name="address" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <textarea name="note" id="" cols="30" rows="7" class="form-controlnew" placeholder="Note"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Complete Order" class="completebtn  mx-auto d-block text-center">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
