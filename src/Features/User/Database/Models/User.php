<?php

namespace App\Features\User\Database\Models;

/**
 * Class User
 * Simulates an active record model.
 * @package App\Features\User\Database\Models
 */
class User
{
    private $details;

    /**
     * User constructor.
     * @param $details
     */
    public function __construct($details)
    {
        $this->details = $details;
    }

    public $fields = ['id', 'username', 'full_name', 'age'];
}
