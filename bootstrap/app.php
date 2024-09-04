<?php

use App\Http\Middleware\AgeCheck;
use App\Http\Middleware\SubjectCheck;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\GlobalExample;
return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        // $middleware->append(GlobalExample::class);

        //Global with Group
        $middleware->appendToGroup('group1',[
            AgeCheck::class,
            SubjectCheck::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
