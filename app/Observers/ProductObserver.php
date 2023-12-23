<?php

namespace App\Observers;

use App\Models\Admin\Product;
use App\Models\Order;

class ProductObserver
{
    /**
     * Handle the Order "created" event.
     */
    public function created(Order $order): void
    {
        $products = Product::get();
        foreach ($products as $product){
            if ($product->id == $order->cart->product->id){
                $product->update([
                    'count'=>$product->count - $order->quantity,
                ]);
            }
        }
    }

    /**
     * Handle the Order "updated" event.
     */
    public function updated(Order $order): void
    {
        //
    }

    /**
     * Handle the Order "deleted" event.
     */
    public function deleted(Order $order): void
    {
        //
    }

    /**
     * Handle the Order "restored" event.
     */
    public function restored(Order $order): void
    {
        //
    }

    /**
     * Handle the Order "force deleted" event.
     */
    public function forceDeleted(Order $order): void
    {
        //
    }
}
