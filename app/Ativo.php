<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ativo extends Model
{
  
  public function infos(){
    return $this->hasMany(Info::class);
  }

  public function user(){
    return $this->belongsTo(User::class);
  }

}
