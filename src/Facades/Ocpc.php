<?php
namespace Webguosai\LaravelOcpc\Facades;

use Illuminate\Support\Facades\Facade;
class Ocpc extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ocpc';
    }
}
