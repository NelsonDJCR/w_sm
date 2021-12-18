<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Stage;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
     * @return string
     * @var string
     */

    public function asasasa()
    {
        return  1;
    }

     public function test()
     {
        return  view('auth.espectative');
     }



    protected function redirectTo()
    {
        return '/home';
    }

    protected function authenticated(Request $request, $user)
    {
        if(auth()->user()->getRoleName() == 'Client') {
            Stage::restoreCart();
            Stage::storeCart();
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

    public function frecuency()
    {
        if (substr(config('app.locale'),0,-3) == "es" ) {
            return view("about.frecuency-es");
        }else {
            return view("about.frecuency-en");
        }
    }

    public function terms_and_conditions()
    {
        if (substr(config('app.locale'),0,-3) == "es" ) {
            return view("about.terms_and_conditions-es");
        }else {
            return view("about.terms_and_conditions-en");
        }
    }
    public function privacy()
    {
        if (substr(config('app.locale'),0,-3) == "es" ) {
            return view("about.privacy-es");
        }else {
            return view("about.privacy-en");
        }   
    }
    public function declaration()
    {
        if (substr(config('app.locale'),0,-3) == "es" ) {
            return view("about.declaration-es");
        }else {
            return view("about.declaration-en");
        }   
    }
    public function aboutLanguaje()
    {
        if (substr(config('app.locale'),0,-3) == "es" ) {
            return view("about.about-es");
        }else {
            return view("about.about-en");
        }   
    }

    


}
