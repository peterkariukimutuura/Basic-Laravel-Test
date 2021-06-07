<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    
    public function __construct()
    {
        $this->middleware(['guest']);
    }
    
    // Presents the registration form
    public function index() {
        return view('auth.login');
    }

    // This logs in the user
    public function welcome(Request $request) {
        
        // Validate credentials
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',       
        ]);
        
        // Check whether attempt is successful
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid login details!');
        }
        else {
            return redirect()->route('tasks.show');
        }
    }
}
