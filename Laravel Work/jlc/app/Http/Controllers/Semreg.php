<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SempregModel;
use Illuminate\Support\Facades\Hash;

class Semreg extends Controller
{
    function save(Request $req)
    {

        $validatedData = $req->validate([
            'se_name'             => 'required',                        // just a normal required validation
            'se_email'            => 'required|email|unique:shaqaalexirfadleh',     // required and must be unique in the ducks table
            'se_dob'         => 'required',
            'se_address'         => 'required',
            'se_cs'         => 'required',
            'se_ps'         => 'required',
            'se_c'         => 'required',
            'se_mob'         => 'required',
            'se_pass'         => 'required',
            'seskill_id'         => 'required',
        ]);

        //print_r($req->input());
        $data = new SempregModel;
        $data->se_name = $req->se_name;
        $data->se_dob = $req->se_dob;
        $data->se_email = $req->se_email;
        $data->se_address = $req->se_address;
        $data->se_cs = $req->se_cs;
        $data->se_ps = $req->se_ps;
        $data->se_c = $req->se_c;
        $data->se_mob = $req->se_mob;
        $data->se_pass = Hash::make($req->se_pass);
        $data->seskill_id = $req->seskill_id;
        $data->save();
        return redirect()->back()->with('success','You are successfully registered');
        //return 'successful';
        //return redirect('/sepayment')->withInput($req->input());
    }
}
