<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    
    
    
    
     public function index()
    { //auth::logout();
         return view('login');
    }

    
    
    public function login(Request $request){
        

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('/post');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
        
    
public function logout(Request $request){

        Auth::logout(); 
    $request->session()->invalidate(); 
    $request->session()->regenerateToken(); 
         return redirect('/login');
    }
 
        
public function validateAccount($token)
{
$user = User::where('remember_token',$token)->first();
if ($user && $user->remember_token == $token){
$user->remember_token = null;
$user->save();
return redirect('/login')->with('success','Account confirmed successfully.');
} else {
return redirect('/login')->with('error','Invalid token.');
}

}






}