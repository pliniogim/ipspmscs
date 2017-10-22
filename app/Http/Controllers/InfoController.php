<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Info;

use App\Ip;

use App\Ativo;

class InfoController extends Controller
{

    /**
    * armazena info para a rede ip relacionada
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function store($id){

      $this->validate(request(),['info' => 'required|min:5' ]);

      Info::create([
        'info' => request('info'),
        'ip_id' => $id,
        'user_id' => auth()->id()
      ]);

      return back()->with('success', 'Informação adicionada com sucesso!');

    }

    /**
    * armazena info para o ativo relacionado
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function store1($id){

      $this->validate(request(),['info' => 'required|min:5' ]);

      Info::create([
        'info' => request('info'),
        'ativo_id' => $id,
        'user_id' => auth()->id()
      ]);

      return back()->with('success', 'Informação adicionada com sucesso!');

    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function destroy($id)
   {
     $info = Info::find($id);
     $info->delete();
     return back()->with('success', 'Informação foi deletada com sucesso!');
   }

}
