<?php

namespace Modules\ActivityLog\Listeners;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogActivityListener
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        activity()
            ->causedBy($event->data['userModel'])
            ->event($event->data['event'])
            ->log($event->data['log']);
    }
}
