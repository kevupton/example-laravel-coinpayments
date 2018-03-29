<?php

namespace App\Listeners;

use Kevupton\LaravelCoinpayments\Events\Deposit\DepositComplete;

class OnDepositComplete
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct ()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param DepositComplete $event
     * @return void
     */
    public function handle (DepositComplete $event)
    {
        \Log::info("\n>>\tDEPOSIT COMPLETED");
        \Log::info($event->deposit->toJson(JSON_PRETTY_PRINT));
    }
}
