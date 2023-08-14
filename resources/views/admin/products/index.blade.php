@extends('layouts.admin')

@section('content')
    <div class="rightnav-header">
        <span class="ms-1 font-weight-bold light">Product Details</span>


    </div>
    <hr style="color: #fff" />
    <div class="product">


        <a href="{{ route('admin.products.create') }}" class="addbtn">Add</a>
        <table class="table  text-center" border="2" style="width: 100%">


            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Product_ID</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Image</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Discount
                    </th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Price</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Bill Price
                    </th>
                    <th class="text-secondary opacity-7"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            {{ $product->id }}
                        </td>
                        <td>
                            <img src="{{ asset($product->imgurl) }}" alt="Product Image" class="productimg">
                        </td>
                        <td>
                            {{ $product->name }}
                        </td>
                        <td>
                            {{ $product->discount }}%
                        </td>
                        <td>
                            Rs {{ $product->price }}
                        </td>
                        <td>
                            Rs {{ round($product->price - ($product->price * ((float) $product->discount)) / 100, 2) }}
                        </td>
                        <td>

                            <a href="{{ route('admin.products.edit', ['product' => $product->id]) }}"> <button
                                    class="edit">Edit</button></a>

                        <td>
                            <form action="{{ route('admin.product.delete', $product->id) }}" style="display: none;"
                                method="POST" id="deleteForm">
                                @csrf
                                @method('DELETE')

                            </form>

                            <button class="delete" style="display: inline-block;" onclick="deleteprod();"
                                id="deleteButton">Delete</button>

                        </td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="container">
            {!! $products->withQueryString()->links('pagination::bootstrap-5') !!}

        </div>

    </div>
@endsection

@section('styles')
    <link href="{{ asset('css/product.css') }}" rel="stylesheet">
@endsection
@section('scripts')
    <script>
        function deleteprod() {
            console.log("pressed");
            var shouldDelete = confirm('Are you sure you want to delete?');

            if (!shouldDelete) {
                event.preventDefault(); // Prevent the form submission
            } else {
                $("#deleteForm").submit();
            }

        }
    </script>
@endsection
