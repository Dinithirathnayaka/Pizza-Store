@extends('layouts.adminfrontend')

@section('content')
    <div class="rightnav-header">
        <span class="ms-1 font-weight-bold light">Edit Rider</span>
        <div style="margin-left: 80%"> <a href="{{ route('admin.login') }}"><img src="{{ asset('images/adminuser.png') }}"
                    class="signinicon" alt="main_logo"> <span>Sign In</a></span></div>
    </div>
    <hr style="color: #fff" />

    <div class="product-form">
        <h4>Edit Rider</h4>
        <form action="{{ route('admin.riders.update', ['rider' => $rider->id]) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <label for="emp_id">Employee Id:</label>
            <input type="text" id="emp_id" name="emp_id" required value="{{ $rider->emp_id }}">
            <label for="name">Rider Name:</label>
            <input type="text" id="name" name="name" required value="{{ $rider->name }}">
            <label for="mobile">Mobile No:</label>
            <input type="text" id="mobile" name="mobile" required value="{{ $rider->mobile }}">

            <label for="image">Rider Image:</label>
            <input type="file" id="image" name="imgurl" accept="image/*" onchange="updateImagePreview(this)">
            <div id="imagePreview">
                @if ($rider->imgurl)
                    <img src="{{ asset('rider_images/' . $rider->imgurl) }}" alt="Rider Image" style="max-width: 100px;">
                @endif
            </div>

            <br>
            <button type="submit" class="mt-3 mx-auto d-block text-center">Update Rider</button>
        </form>
    </div>
@endsection

@section('styles')
    <link href="{{ asset('css/riders.css') }}" rel="stylesheet">
@endsection

<script>
    function updateImagePreview(input) {
        const imagePreview = document.getElementById('imagePreview');

        if (input.files.length > 0) {
            const selectedFile = input.files[0];

            // Display image preview
            const reader = new FileReader();
            reader.onload = function(e) {
                const imgElement = document.createElement('img');
                imgElement.src = e.target.result;
                imgElement.style.maxWidth = '100px';
                imagePreview.innerHTML = ''; // Clear previous preview
                imagePreview.appendChild(imgElement);
            };
            reader.readAsDataURL(selectedFile);
        } else {
            imagePreview.innerHTML = '';
        }
    }
</script>
