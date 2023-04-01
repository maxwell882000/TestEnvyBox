<?php

namespace App\Domain\Users\Entities;

use App\Domain\Common\Traits\HasCustomFactory;
use App\Domain\Users\Factories\UserFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasCustomFactory, Notifiable;

    protected static function newFactory(): UserFactory
    {
        return UserFactory::new();
    }
}
