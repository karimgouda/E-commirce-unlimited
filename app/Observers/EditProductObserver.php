<?php

namespace App\Observers;

use App\Http\Requests\User\OrderRequest;
use App\Models\Admin\Product;
use App\Models\Order;
use phpDocumentor\Reflection\Types\This;

class EditProductObserver
{
    /**
     * Handle the Order "created" event.
     */

    public function created(Order $order): void
    {
      $products = Product::where('id',$order->cart->product->id)->get();
        foreach ($products as $product){
          $product->update([
              'count'=>($product->count - $order->quantity),
          ]);

          if($product->count == 0)
          {
              $product->delete();
          }
        }
    }

    /**
     * Handle the Order "updated" event.
     */
    public function updated(Order $order): void
    {

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
