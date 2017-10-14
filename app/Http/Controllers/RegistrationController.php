<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
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
    //$user = User::create(request( ['nome', 'email', 'password', 'perfil']));
    $user = User::create([
      'nome' => request('nome'),
      'email' => request('email'),
      'password' => bcrypt(request('password')),
      'perfil' => request('perfil')
    ]);
    auth()->login($user);
    return redirect()->home();
  }
}
