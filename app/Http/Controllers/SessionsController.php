<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Http\Request;

class SessionsController extends Controller
{
  public function __construct(){
    $this->middleware('guest');
  }
  public function create()
  {
      return view('sessions.create');
  }
  public function destroy(){
    auth()->logout();
    return redirect()->home();
  }
  public function store(){
    //$password=bcrypt(request('password'));
    if(! auth()->attempt(request(['email','password']))) {
      return back () -> withErrors ([
        'Message' => 'Por favor, cheque suas credencias e tente novamente.'
      ]);
    }
    return redirect()->home();
  }

}
