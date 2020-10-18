<?php

namespace App\Features\User\Services;

use Faker\Factory;

/**
 * Class UserService
 * Can be use by other modules to communicate with this feature/module.
 *
 * @package App\Features\User\Services
 */
class UserService
{
    public function createUser()
    {
        $faker = Factory::create();

        return [
            'username' => $faker->name
        ];
    }
}
