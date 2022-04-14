<?php

namespace Modules\ActivityLog\Providers;

use App\Events\ActivityLoggerEvent;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modules\ActivityLog\Listeners\LogActivityListener;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
        ActivityLoggerEvent::class => [
            LogActivityListener::class
        ]
    ];
}
