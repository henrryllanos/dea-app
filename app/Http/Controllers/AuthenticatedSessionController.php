<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;

class AuthenticatedSessionController extends Controller
{
    //
    public function store(Request $request){
        $credentials = $request->validate
        (['email'=>['required','string','email'],'password'=>['required','string',]]);
        if(!Auth::attempt($credentials)){
            //return redirect()->route('my.index')->with('failed','Cuenta no verificada espere confirmacion! ');
            return redirect()->back()->withErrors(['msg'=>'Credenciales incorrectos ']);
          
        }
        //return 'you are loggin';
        
        $user = User::FindOrFail(Auth::id());
        
        $user_roles = $user->getRoleNames();
        if(!$user_roles->count()){
            Auth::logout();
            Session::flush();
            return redirect()->route('my.index')->withErrors(['msg'=>'Cuenta no verificada espere confirmacion! ']);
        }
        //return 'No tiene roles';
        return redirect()->route('my.index')->with('status','Inicio Exitoso! ');
        

    }
    public function destroy(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('my.index')->with('status','You are logged out');
    }

}
