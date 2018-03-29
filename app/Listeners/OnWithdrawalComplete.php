<?php

namespace App\Listeners;

use Kevupton\LaravelCoinpayments\Events\Withdrawal\WithdrawalComplete;

class OnWithdrawalComplete
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
     * @param WithdrawalComplete $event
     * @return void
     */
    public function handle (WithdrawalComplete $event)
    {
        \Log::info("\n>>\tWITHDRAWAL COMPLETED");
        \Log::info($event->withdrawal->toJson(JSON_PRETTY_PRINT));
    }
}
