<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 * @link https://basic-app.com
 */
namespace BasicApp\HelperLogger;

use Throwable;
use Exception;

class HelperLoggerException extends Exception
{

    public function __construct(string $message, array $context = [], int $code = 0, Throwable $previous = null)
    {
        $replace = [];

        foreach($context as $key => $value)
        {
            $replace['{' . $key . '}'] = $value;
        }

        $message = strtr($message, $replace);

        parent::__construct($message, $code, $previous);
    }

}