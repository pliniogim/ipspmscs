<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{

  public function __construct(){
    $this->middleware('auth');
  }

  public function create()
  {
      return view('registration.create');
  }

  public function store()
  {

    $this->validate(request(), [
      'nome' => 'required',
      'email' => 'required|unique:users|email',
      'password' => 'required|confirmed'
    ]);

    $user = User::create([
      'nome' => request('nome'),
      'email' => request('email'),
      'password' => bcrypt(request('password')),
      'perfil' => request('perfil')
    ]);

    return redirect('users');
  }

}
