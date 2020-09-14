<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CempregModel;
use Illuminate\Support\Facades\Hash;

class Creg extends Controller
{
    function save(Request $req)
    {

        $validatedData = $req->validate([
            'c_name'             => 'required',                        // just a normal required validation
            'c_email'            => 'required|email|unique:looshaqeeyahashirkadda',     // required and must be unique in the ducks table
           
            'c_address'         => 'required',
            'c_cs'         => 'required',
            'c_ps'         => 'required',
            'c_c'         => 'required',
            'c_mob'         => 'required',
            'c_pass'         => 'required',
            
        ]);

        //print_r($req->input());
        $data = new CempregModel;
        $data->c_name = $req->c_name;
        $data->c_email = $req->c_email;
        $data->c_address = $req->c_address;
        $data->c_cs = $req->c_cs;
        $data->c_ps = $req->c_ps;
        $data->c_c = $req->c_c;
        $data->c_mob = $req->c_mob;
        $data->c_pass = Hash::make($req->c_pass);
        $data->save();
        return redirect()->back()->with('success','You are successfully registered');
        //return 'successful';
        //return redirect('ssgem');
       // return redirect('/cempayment')->withInput($req->input());
    }
}
