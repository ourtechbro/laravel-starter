<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ActivityLoggerEvent
{
    use Dispatchable, SerializesModels;

    public $data;
    /**
     * Create a new event instance.
     * Send Log Data To ActivityLog Module Listeners
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }
}
