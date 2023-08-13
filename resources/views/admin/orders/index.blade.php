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
                <tr>
                    <td>02</td>
                    <td>05/08/2023</td>
                    <td>Supus</td>
                    <td>5%</td>
                    <td>Rs1000.00</td>
                    <th><button class="offline">Offline</button></th>
                    <th><button class="completebtn">Complete Button</button></th>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td>02</td>
                    <td>05/08/2023</td>
                    <td>Supus</td>
                    <td>5%</td>
                    <td>Rs1000.00</td>
                    <th><button class="offline">Offline</button></th>
                    <th><button class="completebtn">Complete Button</button></th>
                </tr>
            </tbody>

        </table>

    </div>
@endsection

@section('styles')
    <link href="{{ asset('css/order.css') }}" rel="stylesheet">
@endsection
