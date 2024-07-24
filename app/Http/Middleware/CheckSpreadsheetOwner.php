<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Check;

class CheckSpreadsheetOwner{
    use Check;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response{
        if($role === 'admin'){
            if($this->checkSpreadsheetOwner($request, true)){
                return $next($request);
            }
        } else {
            if($this->checkSpreadsheetOwner($request)){
                return $next($request);
            }
        }
        
        return redirect()->route('error');
    }
}