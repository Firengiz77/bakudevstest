<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    protected $client;

    public function __construct()
    {
       $this->middleware(function ($request, $next) {

           if (Auth::guard('all_users')->check()) {
               $this->client = Auth::guard('all_users')->user();
           } else {
               $session = session()->get('basket_token', function () {
                   $basket_token = Str::random(32);
                   session(['basket_token' => $basket_token]);
                   return $basket_token;
               });

            //    $this->client = User::query()->firstOrCreate(['session' => $session]);
            //    session()->put('basket_token', $sy1);
           }
           return $next($request);
       });
    }

    
}
