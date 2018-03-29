<?php

namespace App\Listeners;

use Kevupton\LaravelCoinpayments\Events\Transaction\TransactionComplete;

class OnTransactionComplete
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
     * @param TransactionComplete $event
     * @return void
     */
    public function handle (TransactionComplete $event)
    {
        \Log::info("\n>>\tTRANSACTION COMPLETED");
        \Log::info($event->transaction->toJson(JSON_PRETTY_PRINT));
    }
}
