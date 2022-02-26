<?php

if (! function_exists('tinydash_modules')) {
    function tinydash_modules($module, $submodule) {
        $menus = config('tinydash.menu.' . $module . '.items.' . $submodule. '.items');
        if ($menus) {
            return implode('|', array_keys($menus));
        }
    }
}
