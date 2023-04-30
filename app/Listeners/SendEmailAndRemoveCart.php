<?php

namespace App\Listeners;

use App\Events\Orders;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Auth;

class SendEmailAndRemoveCart
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Orders $event): void
    {
        $event->carts->where('user_id',Auth::id())->delete();
    }

}
