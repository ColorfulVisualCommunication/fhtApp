<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function reg()
	{
		return view('auth.register');
	}    
	
	  
	
	 
	public function store(Request $request)
	{
		//validation
		//$uri = $request->path();
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
		//redirect
		return redirect()->route('dashboard');
	}
}
