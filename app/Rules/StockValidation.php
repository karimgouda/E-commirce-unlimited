<?php

namespace App\Rules;

use App\Http\Requests\User\OrderRequest;
use App\Models\Admin\Product;
use App\Models\Cart;
use App\Models\Order;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class StockValidation implements ValidationRule
{


    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {

       $orders = Cart::get();
        foreach ($orders as $order)
        {
            $product_id = $order->product_id;
            $product = Product::where('id' , $product_id)->get();
            foreach ($product as $x){
                if ($x->count < request('quantity'))
                {
                    $fail('Sorry, the quantity is not available');
                }
            }


        }
    }
}
