<?php

namespace App\Http\Middleware;
use App\User;
use Illuminate\Support\Facades\Auth;

use Closure;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if((Auth::user())->role != 'admin'){
            return redirect('/');
        }

        return $next($request);
    }
}
