<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function profile_update(Request $request)
    {
        

        $user = Auth::user()->id;
        $update = User::findOrFail($user);
        $update->name = $request->input('name');
        $update->username = $request->input('username');
        $update->email = $request->input('email');
        

        $update->update();;
       
        return redirect('/profile')->with('Success', "อัพเดตข้อมูลเรียบร้อย");
    }


    public function GoogleCallback()
    {
        return view('GoogleCallbacks');
    }
}
