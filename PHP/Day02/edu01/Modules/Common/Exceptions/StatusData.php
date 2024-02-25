<?php

namespace Modules\Common\Exceptions;

// Http 状态码

class StatusData{
    const BAD_REQUEST = 40000;
    const INTERNAL_SERVER_ERROR = 50000;
    const OK = 20000;

    const PARSE_ERROR = 50001;
    const REFLECTION_EXCEPTION = 50002;
    const RUNTIME_EXCEPTION = 50003;
    const ERROR_EXCEPTION = 50004;

    const INVALID_ARGUMENT_EXCEPTION = 60000;
    const MODEL_NOT_FOUND_EXCEPTION = 60001;
    const QUERY_EXCEPTION = 60002;
}