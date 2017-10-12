<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ip;

class IpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ips = Ip::all();
      return view('ips.index', compact('ips'));
    }

    public function search()
    {
      $search = request('search');
      $ips = Ip::Nome($search)->get();
      //dd($ips);
      return view('ips.index', compact('ips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ips.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$ip = new Ip;
        // $ip->local = request('local');
        // $ip->ip = request('rangeips');
        // $ip->save();
        //$this->validate($request, $rules [, $messages, $customAttributes])
        //'required|unique:tbl_name';
        $this->validate(request(), [
          'local' => 'required',
          'ip' => 'required|unique:ips'
      ]);
        Ip::create([
          'local' => request('local'),
          'ip' => request('ip')
        ]);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ip $id) //tem que ser o mesmo nome do wildcard da URI
    {
      return view('ips.show', compact('id'));
      //equivalente a
      //public function show($id)
      //$ip = Ip::find($id);
      //return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
