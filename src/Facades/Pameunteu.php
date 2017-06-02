<?php 
namespace Sagalagarap\Pameunteu\Facades;

use Illuminate\Support\Facades\Facade as  BaseFacade;

class Pameunteu extends BaseFacade
{
    protected static function getFacadeAccessor() { 
        return 'pameunteu';
    }
}