<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ativo;

class AtivoController extends Controller
{

  /**
  * construtor middleware: todas os métodos somente com autenticação
  */
  public function __construct(){
    $this->middleware('auth');
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $ativos = Ativo::all();
    return view('ativos.index', compact('ativos'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    return view('ativos.create');
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
      'fabricante' => 'required',
      'contato' => 'required',
      'telefone' => 'required',
      'modelo' => 'required',
      'ano' => 'required',
      'nserie' => 'required',
      'descricao' => 'required',
      'aplicacao' => 'required',
      'enderecoip' => 'required',
      'local' => 'required',
      'responsavel' => 'required',
      'usuario' => 'required',
      'senha' => 'required',
      'protocolo1' => 'required',
      'protocolo2' => 'required',
      'protocolo3' => 'required',
      'emoperacao' => 'required',
      'garantia' => 'required',
      'versaosoftware' => 'required',
      'hardware' => 'required',
      'memoria' => 'required',
      'processador' => 'required',
      'nprocessadores' => 'required',
      'portas' => 'required',
      'descportas' => 'required',
      'observacoes' => 'required'
    ]);

    $ativo = new Ativo();
    $ativo->fabricante = request('fabricante');
    $ativo->contato = request('contato');
    $ativo->telefone = request('telefone');
    $ativo->modelo = request('modelo');
    $ativo->ano = request('ano');
    $ativo->nserie = request('nserie');
    $ativo->descricao = request('descricao');
    $ativo->aplicacao = request('aplicacao');
    $ativo->enderecoip = request('enderecoip');
    $ativo->local = request('local');
    $ativo->responsavel = request('responsavel');
    $ativo->usuario = request('usuario');
    $ativo->senha = request('senha');
    $ativo->protocolo1 = request('protocolo1');
    $ativo->protocolo2 = request('protocolo2');
    $ativo->protocolo3 = request('protocolo3');
    $ativo->emoperacao = request('emoperacao');
    $ativo->garantia = request('garantia');
    $ativo->versaosoftware = request('versaosoftware');
    $ativo->hardware = request('hardware');
    $ativo->memoria = request('memoria');
    $ativo->processador = request('processador');
    $ativo->nprocessadores = request('nprocessadores');
    $ativo->portas = request('portas');
    $ativo->descportas = request('descportas');
    $ativo->observacoes = request('observacoes');

    $ativo->save();

    return redirect('/ativos')->with('success', 'Ativo foi criado com sucesso!');

  }

  /**
  * Lista os dados do ativo selecionado
  */
  public function show(Ativo $id) //tem que ser o mesmo nome do wildcard da URI
  {
    return view('ativos.show', compact('id'));
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function edit(Ativo $id)
  {
    return view('ativos.edit', compact('id'));
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

    $data =$this->validate(request(), [
      'fabricante' => 'required',
      'contato' => 'required',
      'telefone' => 'required',
      'modelo' => 'required',
      'ano' => 'required',
      'nserie' => 'required',
      'descricao' => 'required',
      'aplicacao' => 'required',
      'enderecoip' => 'required',
      'local' => 'required',
      'responsavel' => 'required',
      'usuario' => 'required',
      'senha' => 'required',
      'protocolo1' => 'required',
      'protocolo2' => 'required',
      'protocolo3' => 'required',
      'emoperacao' => 'required',
      'garantia' => 'required',
      'versaosoftware' => 'required',
      'hardware' => 'required',
      'memoria' => 'required',
      'processador' => 'required',
      'nprocessadores' => 'required',
      'portas' => 'required',
      'descportas' => 'required',
      'observacoes' => 'required'    ]);

      $data['id'] = $id;

      $ativo = Ativo::find($id);

      $ativo->fabricante = request('fabricante');
      $ativo->contato = request('contato');
      $ativo->telefone = request('telefone');
      $ativo->modelo = request('modelo');
      $ativo->ano = request('ano');
      $ativo->nserie = request('nserie');
      $ativo->descricao = request('descricao');
      $ativo->aplicacao = request('aplicacao');
      $ativo->enderecoip = request('enderecoip');
      $ativo->local = request('local');
      $ativo->responsavel = request('responsavel');
      $ativo->usuario = request('usuario');
      $ativo->senha = request('senha');
      $ativo->protocolo1 = request('protocolo1');
      $ativo->protocolo2 = request('protocolo2');
      $ativo->protocolo3 = request('protocolo3');
      $ativo->emoperacao = request('emoperacao');
      $ativo->garantia = request('garantia');
      $ativo->versaosoftware = request('versaosoftware');
      $ativo->hardware = request('hardware');
      $ativo->memoria = request('memoria');
      $ativo->processador = request('processador');
      $ativo->nprocessadores = request('nprocessadores');
      $ativo->portas = request('portas');
      $ativo->descportas = request('descportas');
      $ativo->observacoes = request('observacoes');

      $ativo->save();

      return redirect('/ativos')->with('success', 'O ativo foi alterado com sucesso!');

  }

  /**
  * Remove the specified resource from storage.
  *
  * @param  int  $id
  * @return \Illuminate\Http\Response
  */
  public function destroy($id)
  {
    $ativo = Ativo::find($id);
    $ativo->delete();
    return redirect('/ativos')->with('success', 'Ativo foi deletado com sucesso!');
  }
  
}
