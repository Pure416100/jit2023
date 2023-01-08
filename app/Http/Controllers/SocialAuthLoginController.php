<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Validator;
use Laravel\Socialite\Facades\Socialite;
use Exception;
use Log;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SocialAuthLoginController extends Controller
{
    public function ajaxRequestPost(Request $request)
    {
        try {
           
            $userData = ($request->all());
            // error_log("name--------->".($userData["name"])); 
            $useDratadb = User::where('google_id',$userData["sub"])->first();
            // $finduser = User::where('google_id')->first();
          
            if (User::where('google_id',$userData["sub"])->count()>0) {
               
                $email = $userData['email'];
                $password = ('password');

                $login_type = filter_var($email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
                Auth::loginUsingId($useDratadb->id, TRUE);
                return redirect()->intended($this->redirectPath());
                // if (Auth::attempt([$login_type => $email, 'password' => $password])) {
                //Auth successful here

                //      }

            } else {
                $newUser = User::create([
                    
                    'name' => $userData["name"],
                    'username' => $userData["email"],
                    'email' => $userData["email"],
                    'email_verified_at' => 'current_timestamp()',
                    'google_id' => $userData["sub"],
                    'password' => encrypt('123456789')
                ]);

                Auth::loginUsingId($newUser->id, TRUE);
                return redirect()->intended($this->redirectPath());
            }

            return "555";
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }

    public function ajaxRequestPost2(Request $request)
    {
        try {
           
            $userData = ($request->all());
          
            $useDratadb = User::where('facebook_id',$userData["id"])->first();
            // $finduser = User::where('google_id')->first();
             error_log("name--------->".json_encode($userData)); 

            if (User::where('facebook_id',$userData["id"])->count()>0) {
               
                $email = $userData['email'];
                $password = ('password');

                $login_type = filter_var($email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
                Auth::loginUsingId($useDratadb->id, TRUE);
                return redirect()->intended($this->redirectPath());
                // if (Auth::attempt([$login_type => $email, 'password' => $password])) {
                //Auth successful here
                //      }
            } else {
                $newUser = User::create([
                  
                    'name' => $userData["name"],
                    'username' => $userData["name"],
                    'email' => $userData["email"],
                    'email_verified_at' => 'current_timestamp()',
                    'facebook_id' => $userData["id"],
                    'password' => encrypt('123456789')
                ]);

                Auth::loginUsingId($newUser->id, TRUE);
                return redirect()->intended($this->redirectPath());
            }

            return redirect()->back()
            ->withInput()
            ->with([
                'error' => 'ไม่สามารถเข้าระบบได้ ข้อมูลไม่ถูกต้อง.',
            ]);
        } catch (Exception $e) {
            error_log($e->getMessage());
        }
    }
}