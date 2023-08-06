@extends('layouts.adminfrontend')
@section('content')
<div>
    <h3>Order List</h3>

    
    <table class="table  text-center" border="2" style="width: 80%">
        <tr>
            <th>Order_ID</th>
            <th>Date</th>
            <th>Customer Name</th>
            <th>Discount</th>
            <th>Price</th>
            <th>Status</th>
            <th></th>
        </tr>
        <tr>
            <td>01</td>
            <td>05/08/2023</td>
            <td>Dinithi</td>
            <td>5%</td>
            <td>Rs1000.00</td>
            <th><button class="online">Online</button></th>
            <th><button>Complete Button</button></th>
        </tr>

        <tr>
            <td>02</td>
            <td>05/08/2023</td>
            <td>Supus</td>
            <td>5%</td>
            <td>Rs1000.00</td>
            <th><button class="offline">Offline</button></th>
            <th><button>Complete Button</button></th>
        </tr>
     
    </table>

</div>

@endsection

@section('styles')
<link href="{{ asset('css/order.css') }}" rel="stylesheet">
@endsection