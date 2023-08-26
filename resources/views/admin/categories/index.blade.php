@extends('layouts.admin')

@section('content')
    <div class="rightnav-header">
        <span class="ms-1 font-weight-bold light">Category Details</span>


    </div>
    <hr style="color: #fff" />


    <div class="category">

        <a href="{{ route('admin.category.create') }}" class="categorybtn">Create Category</a>
        <table class="table text-center mt-5" border="1" style="width: 100%">


            <thead class="table-dark">
                <tr>
                    <th class="text-uppercase text-warning text-xxs  opacity-7">Category_ID</th>
                    <th class="text-uppercase text-warning text-xxs  opacity-7 ps-2">Category Name</th>
                    <th class="text-center text-uppercase text-warning text-xxs  opacity-7">Category
                        Description</th>
                    <th class="text-warning opacity-7"></th>
                </tr>
            </thead>

            @foreach ($categories as $category)
                <tbody class="table-dark">
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
