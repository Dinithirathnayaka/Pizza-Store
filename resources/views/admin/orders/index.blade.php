@extends('layouts.admin')

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
                        <td>{{ \Carbon\Carbon::parse($order->created_at)->format('Y-m-d H:i') }}</td>
                        <td>{{ $order->cusname }}</td>
                        <td>{{ $order->discount }}</td>
                        <td>{{ $order->total }}</td>

                        <th style="color: {{ getStatusColor($order->orderstatus) }}">{{ getStatus($order->orderstatus) }}
                        </th>

                        <th>
                            @if ($order->orderstatus == 0)
                                <form action="{{ route('orders.update', $order->id) }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" name="status" value="{{ 1 }}">
                                    <input type="hidden" name="rider_id" value="{{ null }}">
                                    <button class="completebtn " type="submit" style="green">Accept
                                        Order</button>
                                </form>
                            @else
                                <a href="{{ route('admin.orders.show', $order->id) }}" class="completebtn">Complete
                                    Order</a>
                            @endif


                        </th>
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
