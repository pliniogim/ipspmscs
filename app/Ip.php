<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Ip extends Model
{

  use SoftDeletes;

  protected $dates = ['deleted_at'];

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

  public function testaIp($ip){
    $addr = array();
    for ($z=1;$z<255;$z++){
      $ipm = "192.168.".$ip.".".$z;
      $pingresult = exec("/usr/bin/fping -a -c1 -t50 $ipm", $outcome, $status);
      if (0 == $status)
      {
        array_push($addr, $ipm);
      }
    }
    //dd($addr, $ipm, $status, $pingresult);
    return ($addr);
  }
  public function testaIp1($ip){
    $addr = array();
    for ($z=1;$z<255;$z++){
      $ipm = "192.168.".$ip.".".$z;
      $pingresult = exec("/usr/bin/fping -a -c1 -t50 $ipm", $outcome, $status);
      if (0 == $status)
      {
        array_push($addr, $ipm);
      }
    }
    //dd($addr, $ipm, $status, $pingresult);
    return ($addr);
  }
  public function testaIp2($ip){
    $addr = array();
    for ($z=1;$z<255;$z++){
      $ipm = "192.168.".$ip.".".$z;
      $pingresult = exec("/usr/bin/fping -a -c1 -t50 $ipm", $outcome, $status);
      if (0 == $status)
      {
        array_push($addr, $ipm);
        return($addr);
      }
    }
    //dd($addr, $ipm, $status, $pingresult);
    return ($addr);
  }
}
