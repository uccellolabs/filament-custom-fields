<?php

namespace Uccello\FilamentCustomFields\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Uccello\FilamentCustomFields\FilamentCustomFields
 */
class FilamentCustomFields extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Uccello\FilamentCustomFields\FilamentCustomFields::class;
    }
}
