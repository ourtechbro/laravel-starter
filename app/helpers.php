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

if (! function_exists('module_enabled')) {
    function module_enabled($module) {
        if(Module::has($module) && Module::find($module)->isStatus(1)) {
            return true;
        }

        return false;
    }
}

if (! function_exists('get_locales')) {
    function get_locales() {
        return Cache::remember('locales.cache', 3600, function () {
            $locales = config('app.locales');
            if(module_enabled('ActivityLog')) {
                return array_unique(array_merge(Translation::groupBy('locale')->pluck('locale')->toArray(), $locales));
            }
            return $locales;
        });
    }
}

if (! function_exists('get_menus')) {
    function get_menus() {
        return Cache::remember('menus.cache', 1, function () {
            $menus = config('tinydash.menu');
            if (module_enabled('Tinydash')) {
                $menus = array_merge($menus, config('tinydash.theme_menu'));
            }

            return $menus;
        });
    }
}
