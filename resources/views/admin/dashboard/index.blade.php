@extends('layouts.admin')


{{-- @php
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
@endphp --}}
@section('styles')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="dashboard_container">
        <div class="row topcon">
            <div class="col-6 topLeftcon">
                <div class="row">
                    <div class="col-6">
                        <div class="card border-warning mb-3">
                            <div class="card-body text-center">
                                Today Total Orders<br><span>
                                    <h1>{{ $totalOrdersToday }}</h1>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-warning mb-3">
                            <div class="card-body text-center">
                                Customer Count<br><span>
                                    <h1>{{ $totalCustomers }}</h1>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="card border-warning mb-3">
                            <div class="card-body text-center">
                                No of Products<br><span>
                                    <h1>{{ $totalProducts }}</h1>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-warning mb-3">
                            <div class="card-body text-center">
                                No of Categories<br><span>
                                    <h1>{{ $totalCategories }}</h1>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="col-6 topRightcon">
                <div class="chart-container ">
                    <canvas id="revenueChart"></canvas>
                </div>



            </div>
        </div>
        <div class="row bottomcon">
            <h5 class="card-title mb-3">Recent Orders</h5>
            <div class="card" style="background-color:rgb(33, 37, 41, 0.5)">
                <div class="card-body">
                    <table class="table  text-center" border="1" style="width: 100%">


                        <thead class="table-secondary">
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Order_ID
                                </th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Date
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Customer
                                    Name</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Discount
                                </th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Price</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                    Status</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                </th>
                            </tr>
                        </thead>
                        <tbody class="table-dark">
                            @foreach ($orders as $order)
                                <tr>
                                    <td>{{ $order->id }}</td>
                                    <td>{{ \Carbon\Carbon::parse($order->created_at)->format('Y-m-d H:i') }}</td>
                                    <td>{{ $order->cusname }}</td>
                                    <td>{{ $order->discount }}</td>
                                    <td>{{ $order->total }}</td>

                                    {{-- <th style="color: {{ getStatusColor($order->orderstatus) }}">
                                        {{ getStatus($order->orderstatus) }}
                                    </th> --}}

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
                                            <a href="{{ route('admin.orders.showcomplete', $order->id) }}"
                                                class="completebtn">Complete
                                                Order</a>
                                        @endif


                                    </th>
                                </tr>
                            @endforeach
                        </tbody>


                    </table>
                    {{-- <div class="container">
                        {!! orders->withQueryString()->links('pagination::bootstrap-5') !!} --}}

                </div>

            </div>
        </div>
    </div>


    </div>
@endsection

@section('styles')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var ctx = document.getElementById('revenueChart').getContext('2d');
        var year = 2023;
        var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
            'October', 'November', 'December'
        ];
        var revenue = {!! json_encode($revenueData->pluck('revenue')) !!};

        var labels = months;

        var data = {
            labels: labels,
            datasets: [{
                label: 'Revenue',
                data: revenue,
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 2,
                fill: false
            }]
        };

        var options = {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                title: {
                    display: false
                }
            },
            legend: {
                display: false
            }

        };

        var revenueChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: options
        });

        canvasElement.style.height = '500px';
        canvasElement.style.width = '100%';
        canvasElement.style.display = 'block';
    });
</script>
