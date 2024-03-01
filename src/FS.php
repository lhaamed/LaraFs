<?php


namespace lhaamed\LaraFs;

use Illuminate\Support\Facades\Facade;

/**
 * @method static string render(?string $icon, ?string $type)
 */
class FS extends Facade
{

    protected static function getFacadeAccessor(): string
    {
        return LaraFsService::class;
    }

}
