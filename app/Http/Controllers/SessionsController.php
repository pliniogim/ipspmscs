<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

class SessionsController extends Controller
{

  use AuthenticatesUsers;

  /**
  * Auth guard
  *
  * @var
  */
  protected $auth;

  /**
  * lockoutTime
  *
  * @var
  */
  protected $lockoutTime;

  /**
  * maxLoginAttempts
  *
  * @var
  */
  protected $maxLoginAttempts;

  /**
  * Where to redirect users after login.
  *
  * @var string
  */
  protected $redirectTo = '/';

  /**
  * Create a new controller instance.
  *
  * LoginController constructor.
  * @param Guard $auth
  */
  public function __construct(Guard $auth)
  {
    $this->middleware('guest')->except(['destroy']);
    $this->auth = $auth;
    $this->lockoutTime  = 2;        //lockout for 1 minute (value is in minutes)
    $this->maxLoginAttempts = 3;    //lockout after 3 attempts
  }

  /**
  * Determine if the user has too many failed login attempts.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return bool
  */
  protected function hasTooManyLoginAttempts(Request $request)
  {
    return $this->limiter()->tooManyAttempts(
      $this->throttleKey($request), $this->maxLoginAttempts, $this->lockoutTime
    );
  }


  public function create()
  {
    return view('sessions.create');
  }

  public function destroy(Request $request){

    $this->guard()->logout();

    $request->session()->flush();

    $request->session()->regenerate();

    //auth()->logout();
    return redirect('/');
  }

  public function store(Request $request){

    if ($this->hasTooManyLoginAttempts($request)) {
      $this->fireLockoutEvent($request);
      return $this->sendLockoutResponse($request);
    }

    if(! auth()->attempt(request(['email','password']))) {
      $this->incrementLoginAttempts($request);
      return back () -> withErrors ([
        'Message' => 'Por favor, cheque suas credencias e tente novamente.'
      ]);
    }

    $request->session()->regenerate();
    $this->clearLoginAttempts($request);
    return redirect()->home();

  }

}
