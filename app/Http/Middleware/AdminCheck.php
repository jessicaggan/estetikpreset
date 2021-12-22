<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(auth::check()){
            $user = Auth::user();
            if($user->role != 2){
                return redirect('/')->with('accessFail','Access denied!');
            }else{
                return $next($request);
            }
        }else{
            return redirect('/')->with('accessFail','Access denied!');
        }
            
    }
}
