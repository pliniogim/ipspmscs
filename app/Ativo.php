<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Ativo extends Model
{

  use SoftDeletes;

  protected $dates = ['deleted_at'];
  
  public function infos(){
    return $this->hasMany(Info::class);
  }

  public function user(){
    return $this->belongsTo(User::class);
  }

}
