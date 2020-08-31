<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IempregModel;

class Ireg extends Controller
{
    function save(Request $req)
    {
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
        $data->i_pass = $req->i_pass;
        $data->save();
        //return 'successful';
        return redirect('/iempayment')->withInput($req->input());
    }
}
