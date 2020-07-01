<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        return view ('form');
    }

    public function welcomename(Request $request){
    //dd($request->all());
        $nama=$request['FirstName'].' '.$request['LastName'];
        //$nama=$request["FirstName"];
        return view('welcomename',["nama"=>$nama]);
       // return "Welcome ".$nama;
   

    }

}
