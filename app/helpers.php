<?php

use App\Events\ActivityLoggerEvent;

if (! function_exists('tinydash_modules')) {
    function tinydash_modules($module, $submodule) {
        $menus = config('tinydash.menu.' . $module . '.items.' . $submodule. '.items');
        if ($menus) {
            return implode('|', array_keys($menus));
        }
    }
}

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
        return \Illuminate\Support\Facades\Cache::remember('locales.cache', 3600, function () {
            if(\Module::has('ActivityLog')) {
                return \Modules\Language\Entities\Translation::groupBy('locale')->pluck('locale')->toArray();
            } else {
                return config('app.locales');
            }
        });
    }
}
