<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Info extends Model
{

  public function ip(){
    return $this->belongsTo(Ip::class);
  }

  public function ativo(){
    return $this->belongsTo(Ativo::class);
  }

  public function user(){
    return $this->belongsTo(User::class);
  }

}
