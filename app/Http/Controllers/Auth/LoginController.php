<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    //protected $redirectTo = '/home';
    //override

    public function redirectPath()
    {  
        if (Auth::User()) { 
            if(Auth::User()->user_role->role == User::SUPER_ADMIN_USER_CONST){ 
                return $redirectTo = '/admin' ;
            }else if(Auth::User()->user_role->role == User::REVIEW_ADMIN_LEADER_USER_CONST){ 
                return $redirectTo = '/reviewer' ;
            }else if(Auth::User()->user_role->role == User::REVIEW_ADMIN_USER_CONST){ 
                return $redirectTo = '/reviewer' ;
            }else if(Auth::User()->user_role->role == User::DOCTOR_USER_CONST){ 
                return $redirectTo = '/doctor' ;
            }else if(Auth::User()->user_role->role == User::RESEARCHER_USER_CONST){ 
                return $redirectTo = '/researcher' ;
            }
            else
                abort(404); 
        }else{
            abort(404);

        }
    } 

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
