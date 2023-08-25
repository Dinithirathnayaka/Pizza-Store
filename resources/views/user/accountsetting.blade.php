@extends('layouts.user')

@section('content')
    <section class="account" style="background-image: url(images/pizza-1.jpg);">
        <div class="row midcontainer">
            <div class="col-md-4 col-xs-12 accountLeft ">
                <div class="accountDetails">
                    <h5 class="mb-5">Your Profile</h5>
                    <div class="row mb-3">
                        <div class="col-5"> Name : </div>
                        <div class="col-7" style="color: #ffc107">{{ $user->name }}</div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-5">Email Address :</div>
                        <div class="col-7" style="color: #ffc107">{{ $user->email }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5">Mobile Number :</div>
                        <div class="col-7" style="color: #ffc107">{{ $user->name }}</div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-xs-12 accountRight">
                <h5 class="card-title mb-3">Order History</h5>
                <div class="card">
                    <div class="card-body">
                        <table class="viewordertable  text-center" style="width: 100%">
                            <thead>
                                <tr class="mb-3">

                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Date</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Customer Name</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Discount</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Sub Total</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Total</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status</th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>2023/08/19</td>
                                    <td>Supus Rathnayake</td>
                                    <td>3%</td>
                                    <td><span>Rs.</span>1000.00</td>
                                    <td><span>Rs.</span>3000.00</td>
                                    <td>Completed</td>

                                </tr>
                            </tbody>
                        </table>
                        <a href="#" class="viewbtn ">View Order</a>
                    </div>
                </div>

                <div class="card">
                    <div class="card-body">
                        <table class="viewordertable  text-center" style="width: 100%">
                            <thead>
                                <tr class="mb-3">

                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Date</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Customer Name</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Discount</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Sub Total</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Total</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Status</th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td>2023/08/19</td>
                                    <td>Supus Rathnayake</td>
                                    <td>3%</td>
                                    <td><span>Rs.</span>1000.00</td>
                                    <td><span>Rs.</span>3000.00</td>
                                    <td>Completed</td>

                                </tr>
                            </tbody>
                        </table>
                        <a href="#" class="viewbtn ">View Order</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection

@section('styles')
    <link href="{{ asset('css/account.css') }}" rel="stylesheet">
@endsection
