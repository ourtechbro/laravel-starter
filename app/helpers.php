<?php

use App\Events\ActivityLoggerEvent;
use Illuminate\Support\Facades\Cache;
use Nwidart\Modules\Facades\Module;
use Modules\Language\Entities\Translation;

//https://spatie.be/docs/laravel-activitylog/v4/basic-usage/logging-activity
if (! function_exists('activity_log')) {
    function activity_log($userModel, $event, $log) {
        ActivityLoggerEvent::dispatch([
            'userModel' => $userModel,
            'event' => $event,
            'log' => $log,
        ]);
    }
}

if (! function_exists('get_locales')) {
    function get_locales() {
        Cache::forget('locales.cache');
        return Cache::remember('locales.cache', 1, function () {
            $locales = config('app.locales');
            if(Module::has('ActivityLog')) {
                return array_unique(array_merge(Translation::groupBy('locale')->pluck('locale')->toArray(), $locales));
            }
            return $locales;
        });
    }
}
