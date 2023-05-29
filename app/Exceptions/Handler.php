<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Http\JsonResponse;
use Throwable;

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
    public function register(): void
    {
        $this->reportable(function (ModelNotFoundException $exception) {

        });
    }

    public function render($request, Throwable $e)
    {
        if ($e instanceof ModelNotFoundException) {
            $entity = class_basename($e->getModel());

            return new JsonResponse([
                'message' => "Unable to locate the $entity you requested.",
            ], 404);
        }
        if ($e instanceof QueryException) {
            if (str_contains($e->getMessage(), 'email_unique')) {
                return new JsonResponse([
                    'message' => 'The email field must be unique.',
                    'errors' => ['name' => ['The email field must be unique.']],
                ], 422);
            }

            return new JsonResponse([
                'message' => 'Something went wrong...',
            ], 404);
        }

        return parent::render($request, $e);
    }
}
