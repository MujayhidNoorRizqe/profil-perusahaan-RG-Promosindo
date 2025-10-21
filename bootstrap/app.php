<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

/*
|--------------------------------------------------------------------------
| Bootstrap Laravel Application
|--------------------------------------------------------------------------
|
| File ini menginisialisasi Laravel & konfigurasi global (routing, middleware,
| exception handler). Sesuai Laravel 11.
|
*/

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        // Tambah middleware global bila perlu.
    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Tambah handler exception bila perlu.
    })
    ->create();