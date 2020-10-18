<?php

namespace App\Features\User\Support;

/**
 * Class Display
 * Support class to achieve specific task.
 */
class Display
{
    /**
     * Displays a variable and then dies.
     *
     * @param $content
     */
    public static function dd($content)
    {
        var_dump($content);
        die();
    }
}
