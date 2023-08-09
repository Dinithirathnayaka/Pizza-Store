@extends('layouts.adminfrontend')

@section('content')
    <div class="rightnav-header">
        <span class="ms-1 font-weight-bold light">Category Details</span>
        <div style="margin-left: 80%"> <a href="{{ route('admin.login') }}"><img src="{{ asset('images/adminuser.png') }}"
                    class="signinicon" alt="main_logo"> <span>Sign In</a></span></div>

    </div>
    <hr style="color: #fff" />


    <div class="category">

        <a href="{{ route('admin.category.create') }}">Create Category</a>
        <table class="table  text-center" border="2" style="width: 100%">


            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category_ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Category Name</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Category
                        Description</th>
                    <th class="text-secondary opacity-7"></th>
                </tr>
            </thead>

            @foreach ($categories as $category)
                <tbody>
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->description }}</td>
                        <td>
                            <form action="{{ route('admin.category.delete', $category->id) }}" style="display: none;"
                                method="POST" id="deleteForm">
                                @csrf
                                @method('DELETE')

                            </form>

                            <button class="deletebtn" style="display: inline-block;" onclick="deletecat();"
                                id="deleteButton">Delete</button>

                        </td>
                    </tr>
                </tbody>
            @endforeach


        </table>

    </div>
@endsection

{{-- @include('modals.popup') --}}

@section('styles')
    <link href="{{ asset('css/category.css') }}" rel="stylesheet">
@endsection

@section('scripts')
    <script>
        function deletecat() {
            console.log("pressed");
            var shouldDelete = confirm('Are you sure you want to delete?');

            if (!shouldDelete) {
                event.preventDefault(); // Prevent the form submission
            } else {
                $("#deleteForm").submit();
            }

        }
    </script>

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
