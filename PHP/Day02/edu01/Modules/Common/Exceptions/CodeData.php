<?php

namespace Modules\Common\Exceptions;

// Http 状态码

class CodeData{

    // 1** 请求收到，继续处理
    // 2** 操作成功收到，分析、接收
    // 3** 完成此请求必须进一步处理
    // 4** 请求包含一个错误语法或不能完成
    // 5** 服务器执行一个完全有效请求失败

    const CONTINUE = 100;                                   // 客户必须继续发出请求
    const SWITCHING_PROTOCOLS = 101;                        // 客户要求服务器根据请求转换 HTTP 协议版本
    const PROCESSING = 102;                                 // 

    const OK = 200;                                         // 交易成功
    const CREATED = 201;                                    // 提示知道新文件的 URL
    const ACCEPTED = 202;                                   // 接收 和 处理，但处理未完成
    const NON_AUTHORIATIVE_INFORMATION = 203;               // 返回信息 不确定或不完善
    const NO_CONTENT = 204;                                 // 请求收到，但返回信息为空
    const RESET_CONTENT = 205;                              // 服务器完成了请求，用户代理必须复位当前已经浏览过的文件
    const PARTIAL_CONTENT = 206;                            // 服务器已经完成了部分用户的 GET 请求
    const MULTI_STATUS = 207;                               // 

    const MULTIPLE_CHOICES = 300;                           // 请求的资源可在多出得到
    const MOVED_PERMANENTLY = 301;                          // 删除请求数据
    const FOUND = 302;                                      // 在其他地址发现了请求数据
    const SEE_OTHER = 303;                                  // 建议客户访问其他 URL 或 访问方式
    const NOT_MODIFIED = 304;                               // 客户端已经执行了GET，但文件没有变化
    const USER_PROXY = 305;                                 // 请求的资源必须从服务器指定的地址得到
    const UNUSED = 306;                                     // 前一版本 HTTP 中使用的代码，现行版本中不再使用
    const TEMPORARY_REDIRECT = 307;                         // 申明请求的资源临时性删除

    const BAD_REQUEST = 400;                                // 错误请求，如 语法错误
    const UNAUTHORIZED = 401;                               // 请求授权失败
    const PAYMENT_GRANTED = 402;                            // 保留有效 ChargeTo 头响应
    const FORBIDDEN = 403;                                  // 请求不允许
    const FILE_NOT_FOUND = 404;                             // 没有发现文件、查询 或 URL
    const METHOD_NOT_ALLOWED = 405;                         // 用户在 Request-line 字段定义的方法 不允许
    const NOTE_ACCEPTABLE = 406;                            // 根据用户发送的 Accept，请求资源不可访问
    const PROXY_AUTHENTICATION_REQUIRED = 407;              // 类似 401，用户必须首先在代理服务器上得到授权
    const REQUEST_TIME_OUT = 408;                           // 客户端没有在用户指定的时间内完成请求
    const CONFLICT = 409;                                   // 对当前资源状态，请求不能完成
    const GONE = 410;                                       // 服务器上不再有此资源且无进一步的参考地址
    const LENGTH_REQUIRED = 411;                            // 服务器拒绝用户定义的 content-length 属性请求
    const PRECONDITION_FAILED = 412;                        // 一个 或 多个 请求头 字段 在当前请求中错误
    const REQUEST_ENTITY_TOO_LARGE = 413;                   // 请求的资源 大于 服务器 允许的大小
    const REQUEST_URL_TOO_LARGE = 414;                      // 请求的资源 URL 长于 服务器 允许的长度
    const UNSUPPORTED_MEDIA_TYPE = 415;                     // 请求资源不支持请求项目格式
    const REQUESTED_RANGE_NOT_SATIFIABLE = 416;             // 请求中包含 Range 请求头字段，在当前请求资源范围内 没有 Range 指示值。请求也不包含 IF-RANGE 请求头
    const EXPECTATION_FAILED = 417;                         // 服务器不满足请求 Except 头字段指定的期望值，如果是代理服务器，可能是下一级服务器不能满足请求
    const UNPROCESSABLE_ENTITY = 422;                       // 
    const LOCKED = 423;                                     // 
    const FAILED_DEPENDENCY = 424;                          // 


    const INTERNAL_SERVER_ERROR = 500;                      // 服务器产生内部错误
    const NOT_IMPLEMENTED = 501;                            // 服务器不支持请求的函数
    const BAD_GETEWAY = 502;                                // 服务器暂时不可用，有时是为了防止发生系统过载
    const SERVICE_UNAVALABLE = 503;                         // 服务器过载或暂停维修
    const GATEWAY_TIMEOUT = 504;                            // 关口过载，服务器使用另一个关口或服务来响应用户，等待事件设定值较长
    const HTTP_VERSION_NOT_SUPPORT = 505;                   // 服务器 不支持或拒绝支持请求头中指定的HTTP版本
    const INSUFFICIENT_STORAGE = 507;

}