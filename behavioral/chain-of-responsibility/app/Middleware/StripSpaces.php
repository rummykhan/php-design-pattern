<?php

namespace App\Middleware;


use App\Http\Request;

class StripSpaces implements Middleware
{
    protected $middleware;

    public function setSuccessor(Middleware $middleware)
    {
        $this->middleware = $middleware;
    }

    public function handle(Request $request)
    {
        echo "<hr>";
        echo "Testing for Strip Spaces.";

        $request->setFormBody(array_map('trim', $request->getFormBody()));

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