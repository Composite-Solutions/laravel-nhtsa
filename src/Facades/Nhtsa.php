<?php

namespace Composite\LaravelNhtsa\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static vinDecodeService()
 * @method static get(string $uri, array $payload = [])
 */
class Nhtsa extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'nhtsa';
    }
}
