<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class HandleDatabaseErrors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        try {
            // Test database connection
            DB::connection()->getPdo();
            return $next($request);
        } catch (\Exception $e) {
            // If database connection fails, show friendly error page
            if ($request->expectsJson()) {
                return response()->json([
                    'error' => 'Database connection unavailable',
                    'message' => 'Please try again later or contact administrator'
                ], 503);
            }
            
            return response()->view('errors.database', [
                'error' => 'Database connection is currently unavailable'
            ], 503);
        }
    }
}
