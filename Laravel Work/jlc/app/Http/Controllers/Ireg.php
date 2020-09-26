<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IempregModel;
use Illuminate\Support\Facades\Hash;

class Ireg extends Controller
{
    function save(Request $req)
    {

        $validatedData = $req->validate([
            'i_name'             => 'required',                        // just a normal required validation
            'i_email'            => 'required|email|unique:shaqaaleeyeshaqsiyeed',     // required and must be unique in the ducks table
            'i_dob'         => 'required',
            'i_address'         => 'required',
            'i_cs'         => 'required',
            'i_ps'         => 'required',
            'i_c'         => 'required',
            'i_mob'         => 'required',
            'i_pass'         => 'required',
            
        ]);
        //print_r($req->input());
        $data = new IempregModel;
        $data->i_name = $req->i_name;
        $data->i_dob = $req->i_dob;
        $data->i_email = $req->i_email;
        $data->i_address = $req->i_address;
        $data->i_cs = $req->i_cs;
        $data->i_ps = $req->i_ps;
        $data->i_c = $req->i_c;
        $data->i_mob = $req->i_mob;
        $data->i_pass = Hash::make($req->i_pass);
        $data->save();
        return redirect()->back()->with('success','You are successfully registered');
        //return 'successful';
        //return redirect('/iempayment')->withInput($req->input());
    }
}
