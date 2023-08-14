<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Collection;

class CartService
{
    protected $items;

    public function __construct()
    {
        $this->items = collect(session('cart', []));
    }

    public function add(Product $product, $quantity = 1)
    {
        if ($this->has($product->id)) {
            $this->updateQuantity($product->id, $quantity);
        } else {
            $this->items->put($product->id, ['product' => $product, 'quantity' => $quantity]);
            $this->save();
        }

    }

    public function updateQuantity($productId, $quantity)
    {
        if ($this->has($productId)) {
            $this->items->get($productId)['quantity'] = $quantity;
            $this->save();
        }
    }

    public function remove($productId)
    {
        $this->items->forget($productId);
        $this->save();
    }

    public function clear()
    {
        $this->items = collect();
        $this->save();
    }

    public function has($productId)
    {
        return $this->items->has($productId);
        $this->save();
    }

    public function getItems()
    {
        return $this->items;
    }

    public function count()
    {
        return $this->items->count();

    }

    public function save()
    {
        session(['cart' => $this->items->toArray()]);
    }
}
