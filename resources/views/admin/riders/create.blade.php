@extends('layouts.admin')

@section('content')
    <div class="rightnav-header">
        <span class="ms-1 font-weight-bold light">Register New Rider</span>


    </div>
    <hr style="color: #fff" />

    <div >

        <form action="{{ route('admin.riders.store') }}" method="post" enctype="multipart/form-data" class="createrider-form" style="background-color: ">
            @csrf


            <label for="name">Employee Id:</label>
            <input type="text" id="emp_id" name="emp_id" required>
            <label for="name">Rider Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="name">Mobile No</label>
            <input type="text" id="mobile" name="mobile" required>
            <label for="image">Rider Image:</label>
            <input type="file" id="image" name="imgurl" accept="image/*" required
                onchange="updateImagePreview(this)">
            <div id="imagePreview"></div>

            <br>
            <button type="submit" class="createriderbtn mt-3 mx-auto d-block text-center">Add Rider</button>
        </form>

    </div>
@endsection

@section('styles')
    <link href="{{ asset('css/riders.css') }}" rel="stylesheet">
@endsection

<script>
    function updateImagePreview(input) {
        // const selectedFileName = document.getElementById('selectedFileName');
        const imagePreview = document.getElementById('imagePreview');

        if (input.files.length > 0) {
            const selectedFile = input.files[0];
            // selectedFileName.textContent = 'Selected file: ' + selectedFile.name;

            // Display image preview
            const reader = new FileReader();
            reader.onload = function(e) {
                const imgElement = document.createElement('img');
                imgElement.src = e.target.result;
                imgElement.style.maxWidth = '100px'; // Set max width for image preview
                imagePreview.innerHTML = ''; // Clear previous preview
                imagePreview.appendChild(imgElement);
            };
            reader.readAsDataURL(selectedFile);
        } else {
            // selectedFileName.textContent = '';
            imagePreview.innerHTML = '';
        }
    }
</script>
