<?php
/**
 * Created by PhpStorm.
 * User: Ivan Koretskiy aka gillbeits[at]gmail.com
 * Date: 20/04/15
 * Time: 13:06
 */

namespace CommerceMLParser\Exception;

use Exception;

class NoEventException extends Exception {
    /**
     * @param string $className
     * @param Exception $previous
     */
    public function __construct($className, Exception $previous = null)
    {
        $message = 'No event "' . $className . '" in parser exists';
        parent::__construct($message, null, $previous);
    }
}