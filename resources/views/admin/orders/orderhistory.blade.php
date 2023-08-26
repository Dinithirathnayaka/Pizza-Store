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
        <span class="ms-1 font-weight-bold light">Order History</span>


    </div>
    <hr style="color: #fff" />

    <div class="order">



        <table class="table  text-center" border="1" style="width: 100%">


            <thead class="table-dark">
                <tr>
                    <th class="text-uppercase text-warning text-xxs  opacity-7">Order_ID</th>
                    <th class="text-uppercase text-warning text-xxs  opacity-7 ps-2">Date</th>
                    <th class="text-center text-uppercase text-warning text-xxs  opacity-7">Customer
                        Name</th>
                    <th class="text-center text-uppercase text-warning text-xxs  opacity-7">Discount
                    </th>
                    <th class="text-center text-uppercase text-warning text-xxs  opacity-7">Price</th>
                    <th class="text-center text-uppercase text-warning text-xxs  opacity-7">Status</th>
                    <th class="text-center text-uppercase text-warning text-xxs  opacity-7"></th>
                </tr>
            </thead>
            <tbody class="table-dark">
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ \Carbon\Carbon::parse($order->updated_at)->format('Y-m-d H:i') }}</td>
                        <td>{{ $order->cusname }}</td>
                        <td>{{ $order->discount }}</td>
                        <td>{{ $order->total }}</td>

                        <th style="color: {{ getStatusColor($order->orderstatus) }}">{{ getStatus($order->orderstatus) }}
                        </th>
                        <th>
                            <a href="{{ route('admin.orders.show', $order->id) }}" class="completebtn">View
                                Order</a>
                        </th>

                    </tr>
                @endforeach


            </tbody>
            <div class="container">
                {!! $orders->withQueryString()->links('pagination::bootstrap-5') !!}

            </div>


        </table>
        <div>

        </div>

    </div>
@endsection

@section('styles')
    <link href="{{ asset('css/order.css') }}" rel="stylesheet">
@endsection
