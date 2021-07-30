<?php

namespace App\Listeners;

use App\Events\ProductPurchases;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AwardAchievement
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ProductPurchases  $event
     * @return void
     */
    public function handle(ProductPurchases $event)
    {
        var_dump('check for new achievement');
    }
}
