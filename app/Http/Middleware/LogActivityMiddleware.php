<?php

namespace App\Http\Middleware;

use App\Services\RequestActivityLoggerInterface;
use Closure;
use App\Services\DummyRequestActivityLogger;



class LogActivityMiddleware
{

    private DummyRequestActivityLogger  $logger;

    public function __construct(RequestActivityLoggerInterface $logger)
    {
        $this -> logger = $logger;
    }

    public function handle($request, Closure $next, ?string $type = null)
    {

        $this->logger->logRequest($request, $type ?? 'unknown page');

        return $next($request);
    }


}
