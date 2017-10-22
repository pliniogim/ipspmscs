<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ip;

//Use DB;

class IpController extends Controller
{

  /**
  * Protege áreas do site com autenticação
  */
  public function __construct(){
    $this->middleware('auth')->except(['index', 'search']);
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
    public function index()
  {
    $ips = Ip::all()->sortBy('ip', SORT_NATURAL, false);
    return view('ips.index', compact('ips'));
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function home()
  {
    $ips = Ip::all()->sortBy('ip', SORT_NATURAL, false);
    return view('ips.home', compact('ips'));
  }

  /**
  * Retorna listagem do padrão procurado no campo Procura
  *
  * @return \Illuminate\Http\Response
  */
  public function search()
  {
    $search = request('search');
    $ips = Ip::Nome($search)->orderBy('local')->get();
    if(!$ips->count()){
      return back () -> withErrors ([
        'Message' => 'Pesquisa por [ ' .$search. ' ] não retornou resultado.'
      ]);
    } else {
      return view('ips.index', compact('ips'));
    }
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('ips.create');
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(Request $request)
  {

    $this->validate(request(), [
      'local' => 'required',
      'ip' => 'required|unique:ips',
      'endereco' => 'required'
    ]);

    Ip::create([
      'local' => request('local'),
      'ip' => request('ip'),
      'endereco' => request('endereco'),
      'user_id' => auth()->id()
    ]);

    return redirect('/home')->with('success', 'Rede ip foi criada com sucesso!');
  }

  /**
  * Display the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function show(Ip $id) //tem que ser o mesmo nome do wildcard da URI
  {
    return view('ips.show', compact('id'));
    //equivalente a
    //public function show($id)
    //$ip = Ip::find($id);
    //return $id;
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit(IP $id)
  {
    return view('ips.edit', compact('id'));
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

    $ip = new Ip();
    $data =$this->validate(request(), [
      'local' => 'required',
      'endereco' => 'required'
    ]);

    $data['id'] = $id;
    $ip = Ip::find($id);
    $ip->user_id = auth()->user()->id;
    $ip->local = $data['local'];
    $ip->endereco = $data['endereco'];
    $ip->save();
    return redirect('/home')->with('success', 'A rede ip foi alterada com sucesso!');
  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $ip = Ip::find($id);
    $ip->delete();
    return redirect('/home')->with('success', 'A rede ip foi deletada com sucesso!');
  }

  public function testaIp(){
    return view('ips.testaIp');
  }

  public function execTestaIp(){
    $this->validate(request(), [
      'range' => 'required',
    ]);
    $ip = new Ip();
    $range = request('range');
    $addr = $ip->testaIp($range);
    return view('ips.execTestaIp', compact('addr'));
  }

  public function execTestaIp1(){
    $this->validate(request(), [
      'range' => 'required',
    ]);
    $ip = new Ip();
    $range = request('range');
    $addr = $ip->testaIp1($range);
    return view('ips.execTestaIp', compact('addr'));
  }

  public function execTestaIp2(Ip $ip){
    $this->validate(request(), [
      'range' => 'required',
    ]);
    $ip = new Ip();
    $range = request('range');
    $addr = $ip->testaIp2($range);
    return view('ips.execTestaIp', compact('addr'));
  }

  public function testaIp1($id){
    $ip = new Ip();
    $ip = Ip::find($id);
    list($ip1, $ip2, $ip3, $ip4) = explode(".", $ip->ip);
    //dd($ip3);
    return view('ips.testaIp1', compact('ip3'));
  }

  public function testaIp2($id){
    $ip = new Ip();
    $ip = Ip::find($id);
    list($ip1, $ip2, $ip3, $ip4) = explode(".", $ip->ip);
    //dd($ip3);
    return view('ips.testaIp2', compact('ip3'));
  }
  
}
