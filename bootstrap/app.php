<?php

use Illuminate\Database\QueryException;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
    })
    ->withExceptions(function (Exceptions $exceptions) {
        $exceptions->renderable(function (QueryException $exception) {

            $message = 'Error en la base de datos';

            if ($previus = $exception->getPrevious()) {
                $message = $previus->errorInfo[2];
            }
            /**
             * $variable = $exception->getPrevious();
             * if ($variable) {
             *    $message = $variable->errorInfo[2];
             * }
             
             */
            return response()->view('errors.default', [
                'error_title' => 'Ha ocurrido un error inesperado',
                'error' => $message,
            ], 500);
        });
    })->create();
