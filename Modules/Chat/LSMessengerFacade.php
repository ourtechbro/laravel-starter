<?php

namespace Modules\Chat;

use Illuminate\Support\Facades\Facade;

class LSMessengerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'LSMessenger';
    }
}
