@extends('layouts.user')
@php
    function getStatus($value)
    {
        switch ($value) {
            case 0:
                return 'Pending';
            case 1:
                return 'Accepted';
            case 2:
                return 'Completed';
            default:
                return 'Unknown';
        }
    }
@endphp
@php
    function getStatusColor($value)
    {
        switch ($value) {
            case 0:
                return 'red';
            case 1:
                return 'green';
            case 2:
                return 'yellow';
            default:
                return 'orange';
        }
    }
@endphp
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
                        <div class="col-7" style="color: #ffc107">{{ $user->mobile_number }}</div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5">Address :</div>
                        <div class="col-7" style="color: #ffc107">{{ $user->address }}</div>
                    </div>
                </div>
            </div>

            <div class="col-md-8 col-xs-12 accountRight">
                <h5 class="card-title mb-3">Order History</h5>
                @foreach ($user->orders as $order)
                    <div class="card">
                        <div class="card-body">
                            <table class="viewordertable  text-center" style="width: 100%">
                                <thead>

                                    <tr class="mb-3">

                                        <th
                                            class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
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

                                        <td>{{ \Carbon\Carbon::parse($order->created_at)->format('Y-m-d H:i') }}</td>
                                        <td>{{ $order->cusname }}</td>
                                        <td>{{ $order->discount }}</td>
                                        <td><span>Rs.</span>{{ round($order->total - $order->discount, 2) }}</td>
                                        <td><span>Rs.</span>{{ $order->total }}</td>
                                        <td style="color: {{ getStatusColor($order->orderstatus) }}">
                                            {{ getStatus($order->orderstatus) }}</td>

                                    </tr>

                                </tbody>
                            </table>
                            <a href="#" class="viewbtn ">View Order</a>
                        </div>
                    </div>
                @endforeach



            </div>
        </div>
    </section>
@endsection

@section('styles')
    <link href="{{ asset('css/account.css') }}" rel="stylesheet">
@endsection
