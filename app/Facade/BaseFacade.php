<?php

namespace App\Facade;

use Illuminate\Support\Facades\Facade;

class BaseFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Base';
    }
}