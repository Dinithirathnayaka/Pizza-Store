@extends('layouts.admin')

@section('content')
    <div class="rightnav-header">
        <span class="ms-1 font-weight-bold light">Edit Product</span>

    </div>
    <hr style="color: #fff" />

    <div class="productcontainer">

        <form class="dark" action="{{ route('admin.products.update', $product->id) }}" method="post" enctype="multipart/form-data" class="product-form">
            @csrf
            @method('PATCH')

            <label for="category">Product Category:</label>
            <select id="category" name="category_id" required class="mb-2" style="margin-bottom: 100px">
                @foreach ($categories as $category)
                    <option  value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}  style="background-color:#ffff">
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>

            <label for="name" style="margin-top:50px ">Product Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $product->name) }}" required>

            <label for="description">Description:</label>
            <input type="text" id="description" name="description"
                value="{{ old('description', $product->description) }}" required>

            <label for="image">Product Image:</label>
            <input type="file" id="image" name="imgurl" accept="image/*" onchange="updateImagePreview(this)">
            <div id="imagePreview" >
                @if ($product->imgurl)
                    <img src="{{ asset('products/' . $product->imgurl) }}" style="max-width: 150px" alt="Product Image">
                @endif
            </div>

            <label for="discount">Discount (%):</label>
            <input type="number" id="discount" name="discount" value="{{ old('discount', $product->discount) }}"
                min="0" max="100" step="1" required>

            <label for="price">Price (Rs):</label>
            <input type="number" id="price" name="price" value="{{ old('price', $product->price) }}" step="0.01"
                required>

            <button type="submit" class="updateproductbtn mt-3 mx-auto d-block text-center">Update Product</button>
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

            const reader = new FileReader();
            reader.onload = function(e) {
                const imgElement = document.createElement('img');
                imgElement.src = e.target.result;
                imgElement.style.maxWidth = '100px';
                imagePreview.innerHTML = '';
                imagePreview.appendChild(imgElement);
            };
            reader.readAsDataURL(selectedFile);
        } else {
            selectedFileName.textContent = '';
            imagePreview.innerHTML = '';
        }
    }
</script>
