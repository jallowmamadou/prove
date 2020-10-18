<?php

namespace App\Features\User\Actions;

use Faker\Factory;

/**
 * Class GenerateUserCredentialAction
 * @package App\Feeatures\User\Actions
 */
class GenerateUserCredentialAction
{
    public static function execute($user)
    {
        $faker = Factory::create();

        return [
            'email'    => $user['username'].'@email.com',
            'password' => $faker->password
        ];
    }
}
