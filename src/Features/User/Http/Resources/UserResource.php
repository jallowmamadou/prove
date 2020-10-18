<?php

namespace App\Features\User\Http\Resources;

class UserResource
{
    /**
     * Converts a resource to json.
     *
     * @param $resource
     *
     */
    public static function toJson($resource)
    {
        return json_encode($resource);
    }
}
