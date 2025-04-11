<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Support\Facades\App;

class Handler extends ExceptionHandler
{
    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */

    public function render($request, Throwable $exception)
    {
        if ($exception instanceof NotFoundHttpException) {
            $additionalData = [
                'identificador' => 'no-encontrado',
            ];
            if (strpos($request->url(), '/en/') !== false) {
                $additionalData = [
                    'identificador' => 'not-found',
                ];
            }
            return response()->view('404', $additionalData, 404);
        }

        return parent::render($request, $exception);
    }
    
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }
}
