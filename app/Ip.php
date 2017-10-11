<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ip extends Model
{
    public function scopeNome($query, $nome){
      return $query->where('local', 'like', '%'.$nome.'%');
    }
}
