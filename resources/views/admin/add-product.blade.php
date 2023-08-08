@extends('layouts.adminfrontend')

@section('content')
<div>
    <form action="{{ route('admin.products.store') }}" method="post">
        @csrf
        <!-- Add your form fields here -->
        <button type="submit">Add Product</button>
    </form>

</div>

@endsection

@section('styles')
<link href="{{ asset('css/product.css') }}" rel="stylesheet">
@endsection