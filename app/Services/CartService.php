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
            $prevQuantity = $this->items->get($productId)['quantity'];

            if ($quantity + $prevQuantity >= 0) {
                $newQuantity = $quantity + $prevQuantity;
                $this->items = $this->items->map(function ($item, $key) use ($productId, $newQuantity) {
                    if ($key === $productId) {
                        $item['quantity'] = $newQuantity;
                    }
                    return $item;
                });
                $this->save();
            } else {
                $this->remove($productId);
            }
        }
    }

    public function getProduct($productId)
    {
        if ($this->has($productId)) {
            return $this->items->get($productId)['product'];
        }

        return null;
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
