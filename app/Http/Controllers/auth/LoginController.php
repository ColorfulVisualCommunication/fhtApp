<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use AuthenticatesUsers;

class LoginController extends Controller
{
       public function login()
	{
		
		return view('auth.login');
	}  
	public function store(Request $request)
	{
		//validation
		 $validated = $request->validate([
         
		'email' => 'required|email',
        'password' => 'required',
    ]);
			//sign in user
       if(!Auth::attempt($request->only('email','password')))
	    {
			
		   return back()->with('status','Invalid Login Details');
	   }

		//redirect
		return redirect()->route('dashboard');
	}
}
