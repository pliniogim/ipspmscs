<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{

  use SoftDeletes;

  protected $dates = ['deleted_at'];

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
