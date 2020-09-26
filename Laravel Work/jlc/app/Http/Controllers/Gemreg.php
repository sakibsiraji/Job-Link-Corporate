<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\GempregModel;
use Illuminate\Support\Facades\Hash;


class Gemreg extends Controller
{
    function save(Request $req)
    {
        $validatedData = $req->validate([
            'ge_name'             => 'required',                        // just a normal required validation
            'ge_email'            => 'required|email|unique:shaqaalahaguud',     // required and must be unique in the ducks table
            'ge_dob'         => 'required',
            'ge_address'         => 'required',
            'ge_cs'         => 'required',
            'ge_ps'         => 'required',
            'ge_c'         => 'required',
            'ge_mob'         => 'required',
            'ge_pass'         => 'required',
            'geskill_id'         => 'required',
        ]);

       
    
        //print_r($req->input());
        $data = new GempregModel;
        $data->ge_name = $req->ge_name;
        $data->ge_dob = $req->ge_dob;
        $data->ge_email = $req->ge_email;
        $data->ge_address = $req->ge_address;
        $data->ge_cs = $req->ge_cs;
        $data->ge_ps = $req->ge_ps;
        $data->ge_c = $req->ge_c;
        $data->ge_mob = $req->ge_mob;
        //password Hash::make($request->newPassword)
       // $password = Hash::make('yourpassword');
        $data->ge_pass = Hash::make($req->ge_pass);
        //$data->ge_pass = $req->ge_pass;
        $data->geskill_id = $req->geskill_id;
        $data->save();
        return redirect()->back()->with('success','You are successfully registered');
        //return 'successful';
       // return redirect('/gempayment')->withInput($req->input());
    
} 
}
