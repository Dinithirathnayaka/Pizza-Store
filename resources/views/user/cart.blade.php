<!-- resources/views/cart/index.blade.php -->

@extends('layouts.user')

@section('content')
    <h2>Your Cart</h2>
    <table>
        <thead>
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $productId => $item)
                <tr>
                    <td>{{ $item['product']->name }}</td>
                    <td>
                        <form action="{{ route('cart.update', $item['product']) }}" method="POST">
                            @csrf
                            @method('PATCH')
                            <input type="number" name="quantity" value="{{ $item['quantity'] }}">
                            <button type="submit">Update</button>
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('cart.remove', $item['product']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Remove</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route('cart.clear') }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Clear Cart</button>
    </form>
    @if (!$items->isEmpty())
        </br>
        <a href="{{ route('orders.create') }}" class="addbtn">Complete Order</a>
    @endif
@endsection
