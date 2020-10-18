<?php

use App\Features\User\Http\Controllers\UsersController;
use App\Features\User\Services\UserService;
use App\Features\User\Support\Display;

$userController = new UsersController(new UserService);

Display::dd($userController->create());

