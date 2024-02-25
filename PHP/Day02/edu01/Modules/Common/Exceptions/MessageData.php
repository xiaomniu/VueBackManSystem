<?php

namespace Modules\Common\Exceptions;

// Http 提示信息

class MessageData{
    const BAD_REQUEST = '服务端异常！';
    const INTERNAL_SERVER_ERROR = '服务器错误 撒旦发射点！';
    const OK = '操作成功！';
    
    const PARSE_ERROR = '服务器 语法错误！';
    const REFLECTION_EXCEPTION = '服务器异常映射！';
    const RUNTIME_EXCEPTION = '服务器 运行期异常 运行时异常 运行异常 未检查异常！';
    const ERROR_EXCEPTION = '服务器 框架运行错误！';

    const INVALID_ARGUMENT_EXCEPTION = '数据库链接问题！';
    const MODEL_NOT_FOUND_EXCEPTION = '数据模型错误！';
    const QUERY_EXCEPTION = '数据库 DB 错误！';

    const COMMON_EXCEPTION = '网络错误！';
}