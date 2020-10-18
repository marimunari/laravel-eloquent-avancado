<?php

namespace App\Observers;

class ProductObserver
{
    public function created()
    {
        \Log::info('Observer created');
    }

    public function saving()
    {
        \Log::info('Observer saving');
    }
}
