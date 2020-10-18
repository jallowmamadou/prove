<?php

namespace App\Features\User\Http\Controllers;

use App\Features\User\Actions\GenerateUserCredentialAction;
use App\Features\User\Database\Models\User;
use App\Features\User\Events\UserWasCreatedEvent;
use App\Features\User\Http\Resources\UserResource;
use App\Features\User\Services\UserService;

class UsersController
{
    /**
     * @var UserService
     */
    private $userService;

    /**
     * UsersController constructor.
     * @param  UserService  $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    /**
     * Creates a new user.
     *
     * @return array|false|string
     */
    public function create()
    {
        $user = $this->userService->createUser();

        GenerateUserCredentialAction::execute($user);

        UserWasCreatedEvent::fire(new User($user));

        return UserResource::toJson($user);
    }
}
