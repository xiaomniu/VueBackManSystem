<?php

namespace Modules\Common\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Validation\ValidationException;
use Modules\Common\Exceptions\ApiException;

use Modules\Common\Exceptions\CodeData;
use Modules\Common\Exceptions\StatusData;
use ParseError;

class Handler extends ExceptionHandler
{
    private $status = 0;
    private $message = '';
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
    
    private function setErrorException($e) {
        if ($e instanceof ParseError){
            $this->status = StatusData::PARSE_ERROR;
            $this->message = MessageData::PARSE_ERROR;
        } else if ($e instanceof ReflectionException){
            $this->status = StatusData::REFLECTION_EXCEPTION;
            $this->message = MessageData::REFLECTION_EXCEPTION;
        } else if ($e instanceof RuntimeException){
            $this->status = StatusData::RUNTIME_EXCEPTION;
            $this->message = MessageData::RUNTIME_EXCEPTION;
        } else if ($e instanceof ErrorException){
            $this->status = StatusData::ERROR_EXCEPTION;
            $this->message = MessageData::ERROR_EXCEPTION;
        } else if ($e instanceof InvalidArgumentException){
            $this->status = StatusData::INVALID_ARGUMENT_EXCEPTION;
            $this->message = MessageData::INVALID_ARGUMENT_EXCEPTION;
        } else if ($e instanceof ModelNotFoundException){
            $this->status = StatusData::MODEL_NOT_FOUND_EXCEPTION;
            $this->message = MessageData::MODEL_NOT_FOUND_EXCEPTION;
        } else if ($e instanceof QueryException){
            $this->status = StatusData::QUERY_EXCEPTION;
            $this->message = MessageData::QUERY_EXCEPTION;
        }
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Throwable  $e
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * @throws \Throwable
     */
    public function render($request, Throwable $e)
    {
        // echo ('Handler::render<hr>');
        if ($request->is('api/*')){
            // dd($request->all());

            $this->setErrorException($e);
            if ($this->status) {
                $data = [
                    'file' => $e->getFile(),
                    'line' => $e->getLine()
                ];
                if ($this->status == StatusData::MODEL_NOT_FOUND_EXCEPTION) {
                    $data['message'] = $e->getModel();
                }else{
                    $data['message'] = $e->getMessage();
                }
                return response()->json(
                    [
                        'status' => $this->status,
                        'message'=> env('APP_DEBUG') ? $this->message : MessageData::COMMON_EXCEPTION,
                        'data' => $data,
                    ]
                , CodeData::INTERNAL_SERVER_ERROR);
            }
            if ($e instanceof ApiException){
                $result = [
                    'status' => $e->getCode(),
                    'message'=> $e->getMessage(),
                ];
                return response()->json( $result, CodeData::INTERNAL_SERVER_ERROR);
            }
            else if($e instanceof ValidationException)
            {
                // echo ('Handler::render::ValidationException<hr>');
                // dd($e->errors());
                // return $e->errors();
                // return $e->getMessage();
                // return parent::render($request, $e);
                // return response(array_values($e->errors()));
                $result = [
                    'status' => StatusData::BAD_REQUEST,
                    'message'=> array_values($e->errors()),
                ];
                return response()->json($result, CodeData::BAD_REQUEST);
            }
        }
        return parent::render($request, $e); 
    }
}
