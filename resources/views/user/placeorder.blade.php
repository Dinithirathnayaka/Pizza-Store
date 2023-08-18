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
    <section class="contactinfo pt-5 pb-5">
        <div class="container newcontainer ">
            <div class="row block-9">
                <div class="col-md-6 col-xs-12 contact-info ">
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <h2 class="h4" style="color: #ffffff">Order Details</h2>
                        </div>
                        <div class="col-md-12 mb-4">
                            <h2 class="h4" style="color: #ffffff">{{ round($total - $discount, 2) }}</h2>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p style="color: #808080"><span style="color: #ffffff">Address:</span> 198 West 21th Street,
                                Suite 721 New York NY 10016</p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span style="color: #ffffff">Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span style="color: #ffffff">Email:</span> <a
                                    href="mailto:info@yoursite.com">info@yoursite.com</a></p>
                        </div>
                        <div class="col-md-12 mb-3">
                            <p><span style="color: #ffffff">Website:</span> <a href="#">yoursite.com</a></p>
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
                            <input type="submit" value="Place Order" class="btn btn-primary py-3 px-5 "
                                style="color:#000000 ">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
