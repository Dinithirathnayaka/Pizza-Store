@extends('layouts.admin')

@section('content')
    <div class="rightnav-header">
        <span class="ms-1 font-weight-bold light">Add Products</span>


    </div>
    <hr style="color: #fff" />

    <div >

        <form action="{{ route('admin.products.store') }}" method="post" enctype="multipart/form-data" class="productcreate-form">
            @csrf
            <label for="category">Product Category:</label>
            <select id="category" name="category_id" required>
                <option value="" disabled selected>Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
            <label for="name">Product Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="name">Description:</label>
            <input type="text" id="description" name="description" required>

            <label for="image">Product Image:</label>
            <input type="file" id="image" name="imgurl" accept="image/*" required
                onchange="updateImagePreview(this)">

            <div id="imagePreview"></div> <!-- Display selected image preview here -->

            <label for="discount">Discount (%):</label>
            <input type="number" id="discount" name="discount" min="0" max="100" step="1" required>

            <label for="price">Price (Rs):</label>
            <input type="number" id="price" name="price" step="0.01" required>
            <br>
            <button type="submit" class="addnewproductbtn mt-3 mx-auto d-block text-center " >Add Product</button>
        </form>

    </div>
@endsection

@section('styles')
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
@endsection

<script>
    function updateImagePreview(input) {
        const selectedFileName = document.getElementById('selectedFileName');
        const imagePreview = document.getElementById('imagePreview');

        if (input.files.length > 0) {
            const selectedFile = input.files[0];
            selectedFileName.textContent = 'Selected file: ' + selectedFile.name;

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
            selectedFileName.textContent = '';
            imagePreview.innerHTML = '';
        }
    }
</script>
