@extends('layouts.adminfrontend')

@section('content')
<div class="">

    <h3>Category</h3>
    <button class="addbtn">Add</button>

    <table class="table  text-center" border="2" style="width: 80%">
        <tr>
            <th>Category_ID</th>
            <th>Category Name</th>
            <th>Category Description</th>
            <th></th>
           
        </tr>
        <tr>
            <td>01</td>
            <td>Pizza</td>
            <td>Pizza fdssssssssssss fggggggggggggggggggggg</td>
            <td><button class="deletebtn">Delete</button></td>
            
        </tr>
     
    </table>

</div>

@endsection

{{-- @include('modals.popup') --}}

@section('styles')
<link href="{{ asset('css/category.css') }}" rel="stylesheet">
@endsection

@section('scripts')
<script>
    function openPopup() {
        var popup = document.getElementById('addCategoryPopup');
        popup.style.display = 'block';
    }

    function closePopup() {
        var popup = document.getElementById('addCategoryPopup');
        popup.style.display = 'none';
    }

    function submitCategory() {
        // Add code to handle form submission and add the category
        // For example, you can use AJAX to send the form data to the server
        // and update the table content without reloading the page.
    }
</script>
@endsection