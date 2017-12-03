<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Ip;

class RedesController extends Controller
{

  public function index(Request $request){

    $rede = request('item');
    $ip = new Ip();
    $ip = Ip::find($rede);
    list($ip1, $ip2, $ip3, $ip4) = explode(".", $ip->ip);

    for ($z=1;$z<255;$z++){
      $ipm = "192.168.".$ip3.".".$z;
      $pingresult = exec("/usr/bin/fping -a -c1 -t50 $ipm", $outcome, $status);
      if (0 == $status)
      {
        $response = $rede;
        return $response;
      }
    }
    $response = 'Inativo';
    return $response;
  }
}
