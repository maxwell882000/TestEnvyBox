<?php

namespace App\Domain\Users\Factories;

use App\Domain\Common\Factories\BaseFactory;
use App\Domain\Users\Entities\User;

class UserFactory extends BaseFactory
{

    protected $model = User::class;

    public function definition()
    {
        return [
            'name' => "",
            'calling_name' => ""
        ];
    }
}
