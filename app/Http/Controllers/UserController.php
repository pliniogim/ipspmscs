<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function __construct(){
    $this->middleware('auth');
  }

  public function index()
  {
    $users = User::all()->sortBy('nome', SORT_NATURAL, false);
    return view('users.index', compact('users'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    //
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request, $id)
  {
    $user = new User();
    $data =$this->validate(request(), [
      'password' => 'required|confirmed'
    ]);
    $data['id'] = $id;
    $user = User::find($id);
    $user->password = bcrypt(request('password'));
    $user->save();
    return redirect('users')->with('success', 'O usuário foi alterado com sucesso!');
  }

  public function password($id)
  {
    $user = User::find($id);
    return view('users.password', compact('user'));
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */

  public function show($id)
  {
    //return view('users.show');
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit(User $id)
  {
    return view('users.edit', compact('id'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function update(Request $request, $id)
  {
    $user = new User();
    $data =$this->validate(request(), [
      'nome' => 'required',
      'email' => 'required'
    ]);
    $data['id'] = $id;
    $user = User::find($id);
    //$user->user_id = auth()->user()->id;
    $user->nome = $data['nome'];
    $user->email = $data['email'];
    $user->save();
    return redirect('users')->with('success', 'O usuário foi alterado com sucesso!');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $user = User::find($id);
    $user->delete();
    return redirect('users')->with('success', 'Usuário foi deletado com sucesso!');

  }

}
