<?php

namespace App\Features\User\Events;

use App\Features\User\Database\Models\User;

class UserWasCreatedEvent
{
    public static function fire(User $user)
    {
        // tell listeners that a user was created
    }
}
