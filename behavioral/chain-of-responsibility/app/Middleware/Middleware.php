<?php

namespace App\Middleware;


use App\Http\Request;

interface Middleware
{
    public function setSuccessor(Middleware $middleware);

    public function handle(Request $request);

    public function next(Request $request);
}