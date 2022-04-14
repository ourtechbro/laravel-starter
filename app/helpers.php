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
