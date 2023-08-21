@extends('layouts.admin')

@section('styles')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">

@endsection

@section('content')

    <div class="dashboard_container">
        <div class="row topcon">
            <div class="col-6 topLeftcon">
                <div class="row">
                    <div class="col-6">
                        <div class="card mb-3">
                        <div class="card-body text-center">
                            Today Total Orders<br><span><h1>10</h1></span>
                        </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mb-3">
                            <div class="card-body text-center">
                                Customer Count<br><span><h1>10</h1></span>
                            </div>
                            </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="card mb-3">
                        <div class="card-body text-center">
                            No of Products<br><span><h1>10</h1></span>
                        </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card mb-3">
                        <div class="card-body text-center">
                            No of Categories<br><span><h1>10</h1></span>
                        </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-6 topRightcon" style="background-color: red"></div>
        </div>
        <div class="row bottomcon">
            <h5 class="card-title mb-3">Recent Orders</h5>
            <div class="card" style="background-color:rgb(33, 37, 41, 0.5)">
                <div class="card-body">
                    <table class="table  text-center" border="1" style="width: 100%">


                        <thead class="table-secondary">
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
                        <tbody class="table-dark">


                                <tr>
                                    <td>1</td>
                                    <td>2023/08/12</td>
                                    <td>Dinithi</td>
                                    <td>2%</td>
                                    <td><span>Rs.</span>100.00</td>
                                    <td>completed</td>
                                    <td><button>gf</button></td>

                                </tr>


                        </tbody>


                    </table>

                </div>
            </div>
        </div>


    </div>
@endsection

@section('styles')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection
