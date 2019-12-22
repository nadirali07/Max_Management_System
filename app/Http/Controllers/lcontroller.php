<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoginModal;
use Redirect;

class lcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if(session()->get('user')=="")
        // { echo "tgissssiss";
        //     return view('LoginBootstrap');
        // } else{
            // echo "tgissssiss1212132312312312";
         return view('index');
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tests=LoginModal::all();
        $tests = $tests->values()->all();

      // $test = LoginModal::where('pass','=',$request->pass)->get();

        $test = LoginModal::where('pass' ,$request->pass)->where('email', $request->email)->get();
        foreach($test as $value){
         $request->session()->put('user',$request->pass);
         
      // echo "$value->email";
         return view('index');
     }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
