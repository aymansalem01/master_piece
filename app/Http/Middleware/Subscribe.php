<?php

namespace App\Http\Middleware;

use Closure;
use Carbon\Carbon;
use App\Models\Subscribtion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Subscribe
{
    public function handle(Request $request, Closure $next ): Response
    {
        $user = auth()->user();
        $classId = $request->route('id') ?? $request->input('id');
        if(!Auth::check())
        {
            return redirect()->back()->with('error','you should login');
        }

        $subscription = Subscribtion::where('user_id', $user->id)
            ->where('classe_id', $classId)
            ->whereDate('start_date', '<=', Carbon::now())
            ->whereDate('end_date', '>=', Carbon::now())
            ->first();

        if (!$subscription) {
            return redirect()->back()->with('error','you shoud subscription in this calss');
        }

        return $next($request);
    }
}
