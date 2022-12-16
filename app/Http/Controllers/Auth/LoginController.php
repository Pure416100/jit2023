<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required|min:6'
        ]);

        $email = $request->get('email');
        $password = $request->get('password');

        $login_type = filter_var($email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        if (Auth::attempt([$login_type => $email, 'password' => $password])) {
            //Auth successful here
            return redirect()->intended($this->redirectPath());
        }


        return redirect()->back()
            ->withInput()
            ->with([
                'error' => 'ไม่สามารถเข้าระบบได้ ข้อมูลไม่ถูกต้อง.',
            ]);
    }
    public function redirectTo()
    {
       
       
        {
            return ('/');
        }
    }

    public function username()
    {
        return 'username';
    }
}
