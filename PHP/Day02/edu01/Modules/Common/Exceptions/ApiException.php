<?php

namespace Modules\Common\Exceptions;

use Exception;
use Throwable;
use Illuminate\Validation\ValidationException;

class ApiException extends Exception
{
    // 函数原型位置：php/lib/php.jar!/status/Core/Core_c.php
    // public function __construct( $message = "", $code = 0, Throwable $previous = null) 
    public function __construct(array $apiErrConst, Throwable $previous = null) {
        parent::__construct($apiErrConst['message'], $apiErrConst['status'], $previous);
    }
}