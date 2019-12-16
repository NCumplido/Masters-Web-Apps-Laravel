<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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

//************** Redirect users to certain views depending on role/authorisation: if adomin return adminview etc */
    /**
     * 
     *                                  Lecturer: Can edit student grade return True
     *                                  Student: Can edit student grade  return False
     * 
     *                                  Claims based system, I'm allowed to "fake claims"
     * 
     *                                  Where to redirect users after login.
     *                                  Could use an external API, for something: Google/Twitter as mentioned in lecture 12 27:00
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
