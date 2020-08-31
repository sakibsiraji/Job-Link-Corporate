<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CempregModel;

class Creg extends Controller
{
    function save(Request $req)
    {
        //print_r($req->input());
        $data = new CempregModel;
        $data->c_name = $req->c_name;
        $data->c_email = $req->c_email;
        $data->c_address = $req->c_address;
        $data->c_cs = $req->c_cs;
        $data->c_ps = $req->c_ps;
        $data->c_c = $req->c_c;
        $data->c_mob = $req->c_mob;
        $data->c_pass = $req->c_pass;
        $data->save();
        return 'successful';
        //return redirect('ssgem');
    }
}
