<?php

namespace App\Http\Middleware\Authenticate;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Closure;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Termwind\renderUsing;

class UserAuthenticate extends Controller
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $auth_token = $request->header('authorization');
        $token = preg_replace('%(null|auth_token|\s)%', '', $auth_token);

        $result = DB::select('call p_user_auth_token_check(:auth_token)', [
            ':auth_token' => $token,
        ]);
        if(empty($result)){
            abort('404', 'Data Not Found');
        }

        $request['user'] = DB::select('call p_user_details_get(:user_id)', [
            ':user_id' => $result[0]->user_id,
        ]);;
       return $next($request);
    }
}
