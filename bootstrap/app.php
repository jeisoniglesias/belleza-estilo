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
            $error_title = '';

            $message = $exception->getMessage();
            if ($previus = $exception->getPrevious()) {
                $message = $previus->errorInfo[2];
                $error_title = 'Error en la base de datos';
            }

            //return response()->json(['error' => $exception->getMessage()], 500);
            return response()->view('errors.default', ['error' => $message, 'error_title' => $error_title], 500);
        });
    })->create();
