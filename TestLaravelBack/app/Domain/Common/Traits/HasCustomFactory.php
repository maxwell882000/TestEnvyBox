<?php

namespace App\Domain\Common\Traits;

use App\Domain\Common\Constants\FactoryType;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

trait HasCustomFactory
{
    use HasFactory;

    public static function factory(...$parameters)
    {
        $factory = static::newFactory() ?: Factory::factoryForModel(get_called_class());
        $factory = $factory
            ->count(is_numeric($parameters[1] ?? null) ? $parameters[1] : null)
            ->state(is_array($parameters[1] ?? null) ? $parameters[1] : ($parameters[2] ?? []));
        $factory->setType($parameters[0] ?? FactoryType::DATABASE);
        return $factory;
    }
}
