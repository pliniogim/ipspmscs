<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ip extends Model
{
    //protected $fillable = ['local', 'ip'];
    protected $guarded = [];
    public function scopeNome($query, $nome){
      return $query->where('local', 'like', '%'.$nome.'%');
    }
}
