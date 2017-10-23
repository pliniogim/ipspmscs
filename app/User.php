<?php

namespace App;

use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

  use SoftDeletes;

  protected $dates = ['deleted_at'];

  use Notifiable;

  /**
  * The attributes that are mass assignable.
  *
  * @var array
  */
  protected $fillable = [
    'nome', 'email', 'password', 'perfil',
  ];

  /**
  * The attributes that should be hidden for arrays.
  *
  * @var array
  */
  protected $hidden = [
    'password', 'remember_token',
  ];
  public function ip(){
    return $this->hasMany(Ip::class);
  }
  public function info(){
    return $this->hasMany(Info::class);
  }
}
