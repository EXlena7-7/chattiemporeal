<?php

namespace App\system\Facades;
use Illuminate\Support\Facades\Facade;

class Btn extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'btn';
    }
}
