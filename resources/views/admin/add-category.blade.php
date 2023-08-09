@extends('layouts.adminfrontend')

@section('content')
<div class="rightnav-header">
    <span class="ms-1 font-weight-bold light">Add Category</span>
    <div style="margin-left: 80%"> <a href="{{ route('admin.login') }}"><img src="{{ asset('images/adminuser.png') }}"
                class="signinicon" alt="main_logo"> <span>Sign In</a></span></div>

</div>
<hr style="color: #fff" />
<div>
    <h2>Add New Category</h2>
    <form action="{{ route('admin.category.store') }}" method="post">
        @csrf
        <label for="name">Category Name:</label>
        <input type="text" id="name" name="name" required>
        <label for="description">Category Description:</label>
        <textarea id="description" name="description" required></textarea>
        <button type="submit"  class="mx-auto d-block text-center">Add Category</button>
       
    </form>

</div>

@endsection

@section('styles')
<link href="{{ asset('css/category.css') }}" rel="stylesheet">
@endsection