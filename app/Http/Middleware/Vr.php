<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Subscribtion;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Vr
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = auth()->user();

        $hasVrAccess = Subscribtion::where('user_id', $user->id)
            ->where('vr_access', true)
            ->whereDate('start_date', '<=', now())
            ->whereDate('end_date', '>=', now())
            ->exists();

        if (! $hasVrAccess) {
            return redirect()->back()->with('error','you should subscribe in vr access');
        }

        return $next($request);
    }
}
