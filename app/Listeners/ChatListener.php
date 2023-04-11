<?php

namespace App\Listeners;

use App\Events\ChatEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class ChatListener
{

    public function __construct()
    {
        //
    }

    public function handle(ChatEvent $event)
    {
        //
    }
}
