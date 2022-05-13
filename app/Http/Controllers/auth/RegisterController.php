<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Auth;
use AuthenticatesUsers;

class RegisterController extends Controller
{
	public function __construct()
	{
		$this->middleware(['auth']);
	}	
	
    public function reg()
	{
		return view('auth.register');
	}    
	
	  
	
	 
	public function store(Request $request)
	{
		//validation
		 $validated = $request->validate([
        'name' => 'required| max:255',
        'username' => 'required| max:255', 
		'email' => 'required|email |max:255',
        'password' => 'required| confirmed',
    ]);
	
		//store user
		User::create([
            'name' => $request->name,
			'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
		
		//sign in user
       Auth::attempt($request->only('email','password'));

		//redirect
		return redirect()->route('dashboard');
	}
}
