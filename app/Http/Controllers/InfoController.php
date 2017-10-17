<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use App\Ip;

class InfoController extends Controller
{
    public function store($id){
      //dd($id);
      $this->validate(request(),['info' => 'required|min:5' ]);
      Info::create([
        'info' => request('info'),
        'ip_id' => $id,
        'user_id' => auth()->id()
      ]);
      return back();
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
     return back()->with('success', 'Info foi deletada com sucesso!');
   }
   public function edit($id){

   }
}
