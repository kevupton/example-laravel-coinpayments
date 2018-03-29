<?php

namespace App\Providers;

use App\Listeners\OnDepositComplete;
use App\Listeners\OnTransactionComplete;
use App\Listeners\OnWithdrawalComplete;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Kevupton\LaravelCoinpayments\Events\Deposit\DepositComplete;
use Kevupton\LaravelCoinpayments\Events\Transaction\TransactionComplete;
use Kevupton\LaravelCoinpayments\Events\Withdrawal\WithdrawalComplete;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
        DepositComplete::class => [
            OnDepositComplete::class
        ],
        TransactionComplete::class => [
            OnTransactionComplete::class
        ],
        WithdrawalComplete::class => [
            OnWithdrawalComplete::class
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
