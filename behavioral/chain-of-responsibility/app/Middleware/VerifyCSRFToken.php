<?php

namespace App\Middleware;


use App\Http\Request;

class VerifyCSRFToken implements Middleware
{
    protected $middleware;

    public function setSuccessor(Middleware $middleware)
    {
        $this->middleware = $middleware;
    }

    public function handle(Request $request)
    {
        echo "<hr>";
        echo "Testing for CSRF Token.";

        $cookies = $request->getCookies();

        if ($cookies['csrfToken'] !== 'rummykhan') {
            throw new \Exception("CSRF Token mismatch.");
        }

        return $this->next($request);
    }

    public function next(Request $request)
    {
        if ($this->middleware) {
            return $this->middleware->handle($request);
        }

        return true;
    }
}