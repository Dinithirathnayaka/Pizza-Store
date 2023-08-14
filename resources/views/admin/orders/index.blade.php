@extends('layouts.admin')

@section('content')
    <div class="rightnav-header">
        <span class="ms-1 font-weight-bold light">Order Details</span>


    </div>
    <hr style="color: #fff" />


    <div class="order">



        <table class="table  text-center" border="2" style="width: 100%">


            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Order_ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Customer
                        Name</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Discount
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ \Carbon\Carbon::parse($order->total)->format('Y-m-d H:i') }}</td>
                        <td>{{ $order->cusname }}</td>
                        <td>{{ $order->discount }}</td>
                        <td>{{ $order->total }}</td>
                        <th><button class="offline">Offline</button></th>
                        <th><button class="completebtn">Complete Button</button></th>
                    </tr>
                @endforeach

            </tbody>


        </table>
        <div>
            {{ $orders->links('pagination::bootstrap-5') }}
        </div>

    </div>
@endsection

@section('styles')
    <link href="{{ asset('css/order.css') }}" rel="stylesheet">
@endsection
