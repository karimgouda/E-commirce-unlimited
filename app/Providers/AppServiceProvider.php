<?php

namespace App\Providers;

use App\Http\Traits\CartsTrait;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Cart;
use App\Models\Order;
use App\Observers\ProductObserver;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    use CartsTrait;
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Order::observe(ProductObserver::class);
        $views = [
            'EndUser.index',
            'EndUser.pages.cart',
            'EndUser.pages.category_product',
            'EndUser.pages.checkOut',
            'EndUser.pages.shop',
            'EndUser.pages.productDetails',
            'EndUser.pages.contact'
            ];
        View::composer($views,function (\Illuminate\View\View $view){
            $categories = Category::with('products')->paginate(12);
            $carts = $this->getCarts();
            $orders = Order::with('cart')->get();
            return $view->with(['categories'=>$categories , 'carts'=>$carts,'orders'=>$orders]);
        });
        Paginator::useBootstrapFive();
    }


}
