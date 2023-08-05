@extends('admin.dashboard')

@section('content')
<div class="container" style="margin-top: 100px">

    <h3>Product Details</h3>

    <table class="table  text-center" border="2" style="width: 80%">
        <tr>
            <th>Product_ID</th>
            <th>Product Image</th>
            <th>Date</th>
            <th>Name</th>
            <th>Discount</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>01</td>
            <td><img src="{{ asset('images/pizza-7.jpg') }}" alt="Product Image"  class="productimg"></td>
            <td>05/08/2023</td>
            <td>Pizza</td>
            <td>5%</td>
            <td>Rs1000.00</td>
        </tr>
     
    </table>

</div>

@endsection

@section('styles')
<link href="{{ asset('css/product.css') }}" rel="stylesheet">
@endsection