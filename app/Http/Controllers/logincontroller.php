<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class logincontroller extends Controller
{

    public function auth (Request $request)
    {
    	$info = $request->all();

    	$email = $info['email'];
    	$password = $info['password'];

    	$usuarios = DB::table('usuarios')
			    	->where('email', '=', $email)
			    	->where('password', '=', $password)
			    	->get();

    	//dd($usuarios[0]->email);

		if ($usuarios->count() > 0)
		{
			//Aqui crear las variables de sesion
			Session::set('userinfo', $usuarios);
			return redirect('panel');

		}else{

			return redirect('login')->with('status', 'El usuario o password son incorrectos. Por favor intente nuevamente.');
		}
    	
    }

    public function signout ()
    {
    	//Remover las sesiones y redirect a login
        Session::flush();
        return redirect('login');
    }
}
