<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class AuthMiddleware
{

    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response) $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $bearerToken = $request->bearerToken();

        $bearerId = explode('|', $bearerToken);
        if (count($bearerId) < 1) {
            return \response()->json(['message' => 'The user must be authenticated.'], 401);
        }
        $tokens = DB::table('personal_access_tokens')->where('tokenable_id', $bearerId[0])->latest()->first();
        if ($tokens && $tokens->tokenable_id == $bearerId[0]  && $tokens->token == $bearerId[2]) {
            return $next($request);
        }

        return \response()->json(['message' => 'The user must be authenticated.'], 401);
    }
}
