<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\User;
use Auth;

class LogoutController extends Controller
{
      public function logout()
	{
		auth()->logout();
		//redirect
		return redirect()->route('index');
	}
}
