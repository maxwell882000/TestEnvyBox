<?php

namespace App\Domain\Common\Factories;

use App\Domain\Common\Constants\FactoryType;
use App\Domain\Common\Exceptions\FactoryTypeException;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

abstract class BaseFactory extends Factory
{
    private string $type = FactoryType::DATABASE;

    public function setType($type)
    {
        $this->type = $type;

    }

    public function storeEmail(Collection $results)
    {
        // TODO: implement storeEmail()
    }

    public function store(Collection $results)
    {
        switch ($this->type) {
            case FactoryType::DATABASE :
                parent::store($results);
                return;
            case FactoryType::EMAIL :
                $this->storeEmail($results);
                return;
        }
        throw new FactoryTypeException("Unrecognized type : " . $this->type);
    }
    // I think creating save method is not necessary, but it was written due to the requirement which was given
    public function save($attributes = [], ?Model $parent = null)
    {
        return $this->create($attributes, $parent);
    }

}
