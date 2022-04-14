<?php

namespace Modules\ActivityLog\Listeners;


use Illuminate\Support\Facades\Request;
use Jenssegers\Agent\Agent;

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
        if (!setting('activity_log_enable')) {
            return;
        }

        $agent = new Agent();

        activity()
            ->causedBy($event->data['userModel'])
            ->event($event->data['event'])
            ->withProperties([
                'ip' => Request::ip(),
                'browser' => $agent->browser(),
                'os' => $agent->platform(),
                'device' => $agent->device(),
            ])
            ->log($event->data['log']);
    }
}
