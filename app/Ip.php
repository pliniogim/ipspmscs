<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;

class Ip extends Model
{
  public function infos(){
      return $this->hasMany(Info::class);
    }

    public function user(){
      return $this->belongsTo(User::class);
    }
    //protected $fillable = ['local', 'ip'];
    //protected $guarded = [];
    public function scopeNome($query, $nome){
      return $query->where('local', 'like', '%'.$nome.'%');
    }
}
