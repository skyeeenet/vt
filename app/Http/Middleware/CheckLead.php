<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Page;

class CheckLead
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
        $user = Auth::user();

        if ($user->role['id'] == Page::getLeadRole() || $user->role['id'] == Page::getAdminRole()) {

            return $next($request);
        }
        else {

            return response('Доступ только для старост или администраторов <br> <a href="/">На главную</a>', Response::HTTP_FORBIDDEN);
        }

    }
}
