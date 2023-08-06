@extends('layouts.adminfrontend')

@section('content')



<div class="category">
    <h5 style="color: #fff">Category Details</h5>
       
    <button class="addbtn">Add</button>
        <table class="table  text-center" border="2" style="width: 100%">
        
    
            <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category_ID</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category Name</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category Description</th>
                  <th class="text-secondary opacity-7"></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td>01</td>
                    <td>Pizza</td>
                    <td>Pizza fdssssssssssss fggggggggggggggggggggg</td>
                    <td><button class="deletebtn">Delete</button></td>
                  </tr>
              </tbody>
              <tbody>
                <tr>
                    <td>01</td>
            <td>Pizza</td>
            <td>Pizza fdssssssssssss fggggggggggggggggggggg</td>
            <td><button class="deletebtn">Delete</button></td>
                  </tr>
              </tbody>
         
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