<?php

namespace App\Listeners;

use App\Events\ProductsCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendNewsLetter
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
     * @param  ProductsCreated  $event
     * @return void
     */
    public function handle(ProductsCreated $event)
    {
        \Log::info('Enviando e-mails.')
    }
}
