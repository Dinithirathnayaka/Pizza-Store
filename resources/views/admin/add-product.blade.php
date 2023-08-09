@extends('layouts.adminfrontend')

@section('content')
<div class="rightnav-header">
    <span class="ms-1 font-weight-bold light">Add Products</span>
    <div style="margin-left: 80%"> <a href="{{ route('admin.login') }}"><img src="{{ asset('images/adminuser.png') }}"
                class="signinicon" alt="main_logo"> <span>Sign In</a></span></div>

</div>
<hr style="color: #fff" />

<div class="product-form">
    <h4>Add New Product</h4>
    <form action="{{ route('admin.products.store') }}" method="post">
        @csrf
        <label for="name">Product Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="image">Product Image URL:</label>
        <input type="text" id="image" name="imgurl" required>

        <label for="discount">Discount (%):</label>
        <input type="number" id="discount" name="discount" min="0" max="100" step="1" required>

        <label for="price">Price (Rs):</label>
        <input type="number" id="price" name="price" step="0.01" required>
<br>
        <button type="submit" class="mt-3 mx-auto d-block text-center">Add Product</button>
    </form>

</div>

@endsection

@section('styles')
<link href="{{ asset('css/product.css') }}" rel="stylesheet">
@endsection